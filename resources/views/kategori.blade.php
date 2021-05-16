@extends('layouts.master')
@section('title',$kategori->kategori_adi) {{-- degistirilebilir alanı degistirmek icin--}}
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section" style="margin-top: 20px; margin-left: -80px;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">{{$kategori->kategori_adi}}</h3>

                        <h7>Bu kategoride {{ $kategori->urunler->count() }} ürün bulunuyor.</h7>
                        <hr>

                        @if (count($alt_kategoriler)>0)
                            <h4 class="aside-title" style="text-transform: capitalize;">Alt Kategoriler</h4>
                        @else
                            {{ $kategori->kategori_adi }} kategorisinde alt kategori bulunmuyor.
                            <hr>
                            @if ($ust_kategori != null)
                                <a href="{{ route('kategori', $ust_kategori->slug) }}" class="primary-btn cta-btn" style="text-transform: capitalize;">
                                    <i class="fa fa-arrow-circle-left"></i>

                                    {{ $ust_kategori->kategori_adi }}
                                </a>
                                <hr>
                            @endif
                        @endif

                        <div class="checkbox-filter">
                            <ul class="breadcrumb-tree">
                                @foreach($alt_kategoriler as $alt_kategori)
                                    <li>
                                        <a href="{{route('kategori',$alt_kategori->slug)}}">
                                            <i class="fa fa-arrow-circle-right fa-2x"></i>
                                            {{$alt_kategori->kategori_adi}}
                                            <hr>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /ASIDE -->
                </div>
                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <a href="?order=coksatanlar" class="primary-btn order-submit">Çok Satanlar</a>
                            <a href="?order=yeni" class="primary-btn order-submit">Yeni Ürünler</a>
                        </div>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row">
                        @foreach($urunler as $urun)
                            <div class="col-md-4 col-xs-6">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{$urun->detay->urun_resmi}}" alt="">
                                    </div>
                                    <div class="product-body" style="max-height: 120px;">
                                        <p class="product-category">{{$kategori->kategori_adi}}</p>
                                        <h3 class="product-name"><a
                                                href="{{route('urun',$urun->slug)}}">{{$urun->urun_adi}}</a></h3>
                                        <h4 class="product-price">{{$urun->fiyati}} ₺ </h4>
                                    </div>
                                    <form action="{{route('sepet.ekle')}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="add-to-cart">
                                            <input type="hidden" name="id" value="{{$urun->id}}">
                                            <button type="submit" class="add-to-cart-btn"><i
                                                    class="fa fa-shopping-cart"></i>Sepete Ekle
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <br><br><br>
                            </div>
                            <div class="clearfix visible-sm visible-md"></div>
                        @endforeach
                    </div>
                    <br><br><br>
                {{ request()->has('order') ? $urunler->appends(['order' => request('order')])->links() : $urunler->links() }}

                <!-- /store products -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

@endsection

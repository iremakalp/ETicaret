@extends('layout.master')
@section('title',$kategori->kategori_adi) {{-- degistirilebilir alanı degistirmek icin--}}
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="{{route('anasayfa')}}">Anasayfa</a></li>
                        <li><a href="#">{{$kategori->kategori_adi}}</a></li>
                    </ul>
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
                        <div class="checkbox-filter">
                            <ul class="breadcrumb-tree">
                                @foreach($alt_kategoriler as $alt_kategori)
                                    <li>
                                        <a href="{{route('kategori',$alt_kategori->slug)}}">
                                            <i class="fa fa-arrow-circle-right fa-2x"></i>
                                            {{$alt_kategori->kategori_adi}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Fiyat</h3>
                        <div class="price-filter">
                            <div id="price-slider"></div>
                            <div class="input-number price-min">
                                <input id="price-min" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                            <span>-</span>
                            <div class="input-number price-max">
                                <input id="price-max" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /ASIDE -->

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
                                            <img src="{{$urun->url}}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{$kategori->kategori_adi}}</p>
                                            <h3 class="product-name"><a href="{{route('urun',$urun->slug)}}">{{$urun->urun_adi}}</a></h3>
                                            <h4 class="product-price">{{$urun->fiyati}} ₺ </h4>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <br><br><br>
                                </div>
                            <div class="clearfix visible-sm visible-md"></div>
                        @endforeach
                    </div>
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

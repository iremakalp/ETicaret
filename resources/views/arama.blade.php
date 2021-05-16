@extends('layouts.master')
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
                        <li class="active">Arama Sonucu</li>
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
                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store products -->
                    <div class="row">
                        @if (count($urunler)==0)
                            <div class="col-md-12 text-center">
                                Bir ürün bulunamadı!
                            </div>
                        @endif
                        @foreach($urunler as $urun)

                            <div class="col-md-4 col-xs-6">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{$urun->detay->urun_resmi}}" alt="">
                                    </div>
                                    <div class="product-body">
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
                {{ $urunler->appends(['aranan' => old('aranan')])->links() }}
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

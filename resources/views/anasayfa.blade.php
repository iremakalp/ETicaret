@extends('layouts.master')
@section('title','Anasayfa')
@section('content')
    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            @include('layouts.partials.alert')

        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
    <!-- ÖNE ÇIKAN ÜRÜNLER SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Öne Çıkan Ürünler</h3>
                        <div id="slick-nav-1" class="products-slick-nav"></div>
                        <div class="section-nav">
                        </div>
                    </div>
                </div>
                <!-- /section title -->
                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                @foreach($urunler_one_cikan as $urun)
                                    <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{$urun->detay->urun_resmi}}" alt="">
                                            </div>
                                            <div class="product-body" style="max-height: 150px; min-height: 150px;">
                                                <h3 class="product-name"><a
                                                        href="{{route('urun',$urun->slug)}}">{{$urun->urun_adi}}</a>
                                                </h3>
                                                <h4 class="product-price">{{$urun->fiyati}}₺ </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
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
                                        <!-- /product -->
                                    @endforeach
                                </div>

                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /ÖNE ÇIKAN ÜRÜNLER SECTION -->

    <!-- ÇOK SATAN ÜRÜNLER SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Çok Satan Ürünler</h3>
                        <div id="slick-nav-2" class="products-slick-nav"></div>
                        <div class="section-nav"></div>
                    </div>
                </div>
                <!-- /section title -->
                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                @foreach($urunler_cok_satan as $urun)
                                    <!-- product1 -->
                                        <div class="product" style="max-height: 80%;">
                                            <div class="product-img">
                                                <img src="{{$urun->detay->urun_resmi}}" alt="">
                                            </div>
                                            <div class="product-body" style="max-height: 150px;">
                                                <h3 class="product-name"><a
                                                        href="{{route('urun',$urun->slug)}}">{{$urun->urun_adi}}</a>
                                                </h3>
                                                <h4 class="product-price">{{$urun->fiyati}}</h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
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
                                        <!-- /product1 -->
                                    @endforeach
                                </div>

                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /ÇOK SATAN ÜRÜNLER SECTION -->
@endsection


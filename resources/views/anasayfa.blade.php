@extends('layouts.master')
@section('title','Anasayfa')
@section('content')
    <style>
        @media only screen and (min-width: 990px) {
            #gizle2 {
                display: none;
            }
            #search-menu2 {
                display: none;
            }
        }
        @media only screen and (max-width: 370px) {
            .hesap{
                width: 40%;
                height: 40%;
            }
            .form-group{
                width: 50%;

            }
        }
    </style>
    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
        @include('layouts.partials.alert')
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li>
                        <div class="col-md-6">
                            <div class="header-search" id="gizle2">
                                <form action="{{route('urun_ara')}}" method="post">
                                    {{csrf_field()}}
                                    <input class="input" name="aranan" placeholder="Ara" style="width: 100px;">
                                    <button class="search-btn">Ara</button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="active"><a href="#">Anasayfa</a></li>
                   @foreach($kategoriler as $kategori)
                    <li>
                        <a href="{{route('kategori',$kategori->slug)}}">
                        {{$kategori->kategori_adi}}
                        </a>
                    </li>
                    @endforeach
                    <li>
                        <a href="{{ route('sepet') }}" id="gizle2"><i class="fa fa-shopping-cart"></i> Sepet <span
                                class="qty">{{ Cart::count() }}</span></a>
                    </li>
                    @guest()
                        <li class="dropdown" style="text-color: whitesmoke;" id="gizle2">
                            <a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Giriş  <i class="fa fa-user-o"></i></a>
                            <ul class="dropdown-menu">
                                <li><a style="color: whitesmoke;" href="{{ route('kullanici.oturumac') }}">Oturum Aç</a></li>

                                <li><a style="color: whitesmoke;" href="{{ route('kullanici.kaydol') }}">Kaydol</a>
                                </li>
                            </ul>
                        </li>
                    @endguest
                    @auth()
                        <li class="dropdown"id="gizle2">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->adsoyad }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li ><a style="color: whitesmoke;" href="{{route('kullanici.duzenle', Auth::user()->id) }}">Profil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a style="color: whitesmoke;" href="{{ route('siparisler') }}">Siparişlerim</a></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a style="color: whitesmoke;" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Çıkış</a>
                                    <form id="logout-form" action="{{route('kullanici.oturumukapat')}}" method="post" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth

                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
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
                        <h3 class="title">Öne Çıkan Ürünler</h3><div id="slick-nav-1" class="products-slick-nav"></div>
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
                                        <!-- product1 -->
                                            <div class="product">
                                                <div class="product-img">
                                                    <img src="{{$urun->detay->urun_resmi}}" alt="">
                                                </div>
                                                <div class="product-body" style="max-height: 150px;">
                                                    <h3 class="product-name"><a href="{{route('urun',$urun->slug)}}">{{$urun->urun_adi}}</a></h3>
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
                                                        <button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
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
                        <h3 class="title">Çok Satan Ürünler</h3><div id="slick-nav-2" class="products-slick-nav"></div>
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
                                        <div class="product" style="max-height: 80%;" >
                                            <div class="product-img">
                                                <img src="{{$urun->detay->urun_resmi}}" alt="">
                                            </div>
                                            <div class="product-body" style="max-height: 150px;">
                                                <h3 class="product-name"><a href="{{route('urun',$urun->slug)}}">{{$urun->urun_adi}}</a></h3>
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
                                                    <button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
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


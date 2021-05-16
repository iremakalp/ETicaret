<style>
    @media only screen and (max-width: 1000px) {
        #gizle {
            display: none;
        }
        #search-menu {
            display: none;
        }
        .menu-toggle {
            margin-right: 150px;
        }
    }
    @media only screen and (max-width: 370px) {
        header{
            width: 450px;
        }
    }
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

<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li style="color: whitesmoke;"><i class="fa fa-phone"></i> +021-95-51-84</li>
                <li><a href="mailto:iremklp@gmail.com.tr"><i class="fa fa-envelope-o"></i> info@electrotech.com.tr</a></li>
                <li><a href="https://www.google.com/maps/place/Kartepe,+Kocaeli/@40.7453448,29.9976738,13z/data=!3m1!4b1!4m5!3m4!1s0x14cb509aa64c1233:0x72649c34bfcb0a2e!8m2!3d40.753369!4d30.023216"><i
                            class="fa fa-map-marker"></i>Kartepe/Kocaeli</a></li>
            <li style="float: right; margin-left: 600px;">
                <!-- weather widget start --><a target="_blank" href="https://bookeder.com/weather/kartepe-52663"><img src="https://w.bookcdn.com/weather/picture/21_52663_1_21_1E1F29_250_1E1F29_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=765&anc_id=65603"  alt="booked.net"/></a><!-- weather widget end -->
            </li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header" class="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{route('anasayfa')}}" class="logo">
                            <img src="/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->
                <!-- SEARCH BAR -->
                <div class="col-md-6" id="search-menu">
                    <div class="header-search">
                        <form action="{{route('urun_ara')}}" method="post">
                            {{csrf_field()}}
                            <input class="input" name="aranan" placeholder="Ara">
                            <button class="search-btn">Ara</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars fa-5x"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- Profilim -->
                        <div>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="{{ route('sepet') }}" id="gizle" style="background-color:#D10024 ; border-radius: 30px; margin-right: 5px; color: whitesmoke;"><i class="fa fa-shopping-cart"></i> Sepet
                                        <span
                                            class="qty">{{ Cart::count() }}</span></a>
                                </li>
                                @guest()
                                    <li class="dropdown" style="background-color: #D10024; border-radius: 30px; color: whitesmoke;" id="gizle">
                                        <a href="#" style="background-color: #D10024; border-radius: 30px; color: whitesmoke;"  data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">Giriş <i class="fa fa-user-o"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('kullanici.oturumac') }}">Oturum Aç</a></li>

                                            <li><a href="{{ route('kullanici.kaydol') }}">Kaydol</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest

                                @auth()
                                    <li class="dropdown" id="gizle" >
                                        <a href="#"  class="dropdown-toggle" style="background-color: #D10024; border-radius: 30px; color: whitesmoke;" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">{{ Auth::user()->adsoyad }} <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('kullanici.duzenle',Auth::user()->id)}}">Profil</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{{ route('siparisler') }}">Siparişlerim</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="#"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Çıkış</a>
                                                <form id="logout-form" action="{{route('kullanici.oturumukapat')}}"
                                                      method="post" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                        <!-- /Profilim -->
                        <!-- Menu Toogle -->

                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
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


<style>
    @media only screen and (max-width: 1000px) {
        #gizle {
            display: none;
        }
        #search-menu {
            display: none;
        }
        .menu-toggle {
            margin-right: 250px;
        }
    }
    @media only screen and (max-width: 370px) {
        header{
            width: 450px;
        }
    }
</style>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="mailto:iremklp@gmail.com.tr"><i class="fa fa-envelope-o"></i> info@electro.com.tr</a></li>
                <li><a href="https://www.google.com/maps/d/embed?mid=1PyfL2yockyzgneQV0Cbx3NJshXs"><i
                            class="fa fa-map-marker"></i>İzmit/Kocaeli</a></li>
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
                                    <a href="{{ route('sepet') }}" id="gizle"><i class="fa fa-shopping-cart"></i> Sepet
                                        <span
                                            class="qty">{{ Cart::count() }}</span></a>
                                </li>
                                @guest()
                                    <li class="dropdown" style="text-color: whitesmoke;" id="gizle">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false">Giriş <i class="fa fa-user-o"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('kullanici.oturumac') }}">Oturum Aç</a></li>

                                            <li><a href="{{ route('kullanici.kaydol') }}">Kaydol</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest

                                @auth()
                                    <li class="dropdown" id="gizle">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
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


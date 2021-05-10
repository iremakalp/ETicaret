<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> info@electro.com.tr</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
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
                <div class="col-md-6">
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

                        <!-- Profilim -->
                        <div>
                            <ul class="nav navbar-nav navbar-right">
                                @guest()
                                    <li><a href="{{ route('kullanici.oturumac') }}"><i class="fa fa-user "></i>Oturum Aç</a></li>
                                    <li><a href="{{ route('kullanici.kaydol') }}"><i class="fa fa-user "></i>Kaydol</a></li>
                                @endguest
                                @auth()
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-o"></i>{{ Auth::user()->adsoyad }} <span class="caret"></span></a>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Çıkış</a>
                                            <form id="logout-form" action="{{route('kullanici.oturumukapat')}}" method="post" style="display: none;">
                                                {{ csrf_field() }}

                                            </form>
                                        </li>
                                        <li><a href="{{ route('sepet') }}"><i class="fa fa-shopping-cart"></i> Sepet <span class="badge badge-theme">{{ Cart::count() }}</span></a></li>                                    </li>
                                @endauth
                            </ul>
                        </div>
                        <!-- /Profilim -->
                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
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


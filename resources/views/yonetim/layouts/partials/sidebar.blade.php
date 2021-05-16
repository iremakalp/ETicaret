<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars fa-3x"></i>
            </button>
            <a class="navbar-brand" href="{{route('yonetim.anasayfa')}}"><img src="/img/logo.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('yonetim.anasayfa')}}"> <i class="menu-icon fa fa-dashboard"></i>KONTROL PANELİ
                    </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <h3 class="menu-title">Kategori ayarları</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" >Kategoriler</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li>
                            <a href="{{ route('yonetim.kategori') }}" style="margin-left: -50px;">
                                Tümü
                            </a>
                        </li>
                @foreach($kategoriler as $kategori)

                            <li>
                                <a href="{{route('yonetim.kategori.urun',$kategori->id)}}" style="margin-left: -50px;">
                                    {{$kategori->kategori_adi}}
                                </a>
                            </li>

                @endforeach
                    </ul>
                </li>
                <h3 class="menu-title">Ürün Ayarları</h3><!-- /.menu-title -->
                <li>

                   <a href="{{route('yonetim.urun')}}">Ürünler
                   </a>
                </li>
                <li>
                    <a href="{{route('yonetim.yorum')}}">Ürün Yorumları</a>
                </li>

                <h3 class="menu-title">Kullanıcı-Sipariş Ayarları</h3><!-- /.menu-title -->
                <li>
                    <a href="{{route('yonetim.kullanici')}}">Kullanıcılar</a>
                </li>
                <li>
                    <a href="{{route('yonetim.siparis')}}">Siparişler</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('yonetim.oturumukapat') }}"><i class="fa fa-power-off"></i>
                        Logout</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
@section('footer')
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="/assets/js/dashboard.js"></script>
    <script src="/assets/js/widgets.js"></script>
    <script src="/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function ($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>


@endsection

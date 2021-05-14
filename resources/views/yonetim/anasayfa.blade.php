@extends('yonetim.layouts.master')
@section('title', 'Kontrol Paneli')

@section('content')
    <div id="right-panel" class="right-panel">
        <div class="content mt-3">
            <div class="content mt-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0" style="margin-left: 10%;">
                            <p class="text-light">Bekleyen Sipariş</p>
                            <h4 class="mb-0">
                                <span class="count">{{$istatistikler['bekleyen_siparis']}}</span>
                            </h4>
                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-2">
                        <div class="card-body pb-0" style="margin-left: 8%;">
                            <p class="text-light">Tamamlanan Sipariş </p>
                            <h4 class="mb-0">
                                <span class="count">{{$istatistikler['tamamlanan_siparis']}}</span>
                            </h4>
                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-3">
                        <div class="card-body pb-0" style="margin-left: 10%;">
                            <p class="text-light">Ürün</p>
                            <h4 class="mb-0">
                                <span class="count">{{$istatistikler['toplam_urun']}}</span>
                            </h4>
                        </div>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-4">
                        <div class="card-body pb-0" style="margin-left: 10%;">
                            <p class="text-light">Kullanıcı</p>
                            <h4 class="mb-0">
                                <span class="count">{{$istatistikler['toplam_kullanici']}}</span>
                            </h4>
                            <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="card-title mb-0" style="text-transform: uppercase;">Çok Satan
                                        Ürünler</h4>
                                    <div class="panel-body" style="width: 400px; height: 200px; float: bottom">
                                        <canvas id="chartCokSatan" style="margin-top: 10px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="card-title mb-0">Aylara Göre Satışlar</h4>
                                    <div class="panel-body" style="width: 400px; height: 200px; margin: 10px;">
                                        <canvas id="chartAylaraGoreSatislar"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
@endsection
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script>
        @php
            $labels=" ";
            $data=" ";
           foreach($cok_satan_urunler as $rapor)
           {
                 $labels .= "\"$rapor->urun_adi\", ";
                 $data .= "$rapor->adet, ";
           }
        @endphp
        var ctx = document.getElementById('chartCokSatan').getContext('2d');
        var chartCokSatan = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: [{!! $labels !!}],
                datasets: [{
                    label: 'Çok Satan Ürünler',
                    data: [{!! $data !!}], {{-- ozel karakter oldugu icin --}}
                    backgroundColor:'rgb(7,51,164)',
                    borderColor:'#f5e4e4',
                    borderWidth: 1
                }]
            },
            options: {
                legend:{
                  display:false
                },
                scales: {
                    x: {
                        beginAtZero: true
                    }
                }
            }
        });
        @php
            $labels = "";
            $data = "";
            foreach($aylara_gore_satislar as $rapor) {
                $labels .= "\"$rapor->ay\", ";
                $data .= "$rapor->adet, ";
            }
        @endphp
        var ctx2 = document.getElementById("chartAylaraGoreSatislar").getContext('2d');
        var chartAylaraGoreSatislar = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: [{!! $labels !!}],
                datasets: [{
                    label: 'Aylara Göre Satışlar',
                    data: [{!! $data !!}],
                    borderColor: '#f6ea07',
                    borderWidth: 1
                }]
            },
            options: {
                legend:{
                    display:false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                    }]
                }
            }
        });
    </script>
@endsection

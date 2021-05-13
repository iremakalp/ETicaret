@extends('yonetim.layouts.master')
@section('title', 'Kontrol Paneli')

@section('content')
    <div id="right-panel" class="right-panel">
        <div class="content mt-3">
            <div class="content mt-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0"style="margin-left: 10%;">
                            <p class="text-light">Bekleyen Sipariş</p>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
                            </h4>
                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-2">
                        <div class="card-body pb-0"style="margin-left: 8%;">
                            <p class="text-light">Tamamlanan Sipariş </p>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
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
                                <span class="count">10468</span>
                            </h4>
                        </div>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        </div>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-4">
                        <div class="card-body pb-0"style="margin-left: 10%;">
                           <p class="text-light">Kullanıcı</p>
                            <h4 class="mb-0">
                                <span class="count">10468</span>
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
                                    <h4 class="card-title mb-0">Çok Satan Ürünler</h4>
                                </div>
                            </div>
                            <div class="chart-wrapper mt-4"style="height:200px;" height="200"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="card-title mb-0">Aylara Göre Satışlar</h4>
                                </div>
                            </div>
                            <div class="chart-wrapper mt-4"style="height:200px;" height="200">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .content -->
        </div><!-- /#right-panel -->
@endsection

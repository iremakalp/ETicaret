@extends('layouts.master')
@section('title',$urun->urun_adi) {{-- degistirilebilir alanı degistirmek icin--}}
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">

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
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="{{$urun->detay->urun_resmi}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->
                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="{{$urun->detay->urun_resmi}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{$urun->urun_adi}}</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#"></a>
                        </div>
                        <div>
                            <h3 class="product-price">{{$urun->fiyati}}₺ </h3>
                        </div>
                        <p> {{$urun->aciklama}}</p>
                        <div class="add-to-cart">
                            <form action="{{route('sepet.ekle')}}" method="post">
                                {{ csrf_field() }}
                                <div class="add-to-cart">
                                    <input type="hidden" name="id" value="{{$urun->id}}">
                                    <button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete
                                        Ekle
                                    </button>
                                </div>
                            </form>
                        </div>
                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li><a data-toggle="tab" href="#tab3">Yorumlar</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab3  -->
                            <div id="tab3" class="tab-pane fade in">
                                <div class="row">
                                    <!-- Reviews -->
                                    <div class="col-md-6">
                                        @if(count($yorumlar)==0)
                                            <div class="review-body">
                                                <p>Bu ürüne henüz yorum yapılmadı</p>
                                            </div>
                                        @endif
                                      @foreach($yorumlar as $yorum)
                                            <div id="reviews">
                                                <ul class="reviews">
                                                    <li>
                                                        <div class="review-heading">
                                                            <h5 class="name">{{$yorum->adsoyad}}</h5>
                                                            <p class="date">{{$yorum->olusturma_tarihi}}</p>
                                                        </div>
                                                        <div class="review-body">
                                                            <p>{{$yorum->yorum}}</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endforeach
                                          {{ $yorumlar->links() }}
                                    </div>
                                    <!-- /Reviews -->
                                    <!-- Review Form -->
                                    <div class="col-md-3">
                                        <div id="review-form">
                                            <form class="review-form" method="post" action="{{route('urun.yorumyap',$urun->slug)}}" onscroll="yes">
                                                {{ csrf_field() }}
                                                <input id="adsoyad" class="input" name="adsoyad" type="text" placeholder="Ad">
                                                <input class="input" id="email" type="email" name="email" placeholder="Email">
                                                <textarea class="input" id="yorum" name="yorum" placeholder="Yorum"></textarea>
                                                <button class="primary-btn">Yorum Yap</button>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- /Review Form -->
                                </div>
                            </div>
                            <!-- /tab3  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection

@extends('layout.master')
@section('title','Anasayfa')
@section('content')
    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="#">Anasayfa</a></li>
                   @foreach($kategoriler as $kategori)
                    <li>
                        <a href="{{route('kategori',$kategori->slug)}}">
                        {{$kategori->kategori_adi}}
                        </a>
                    </li>
                    @endforeach

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
                                    <!-- product1 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/telefon1.png" alt="" height="60%">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Akıllı Telefon</p>
                                            <h3 class="product-name"><a href="#">Huawei P40 Lite 128 GB Pembe Akıllı Telefon</a></h3>
                                            <h4 class="product-price">3.499TL </h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">İstek Listesine Ekle</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Karşılaştır</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Özellikleri</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <!-- /product1 -->
                                    <!-- product2 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/kulaklık1.png" alt="">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Aksesuar</p>
                                            <h3 class="product-name"><a href="#">Huawei Freebuds 3 Kulak içi Kablosuz Kulaklık Siyah</a></h3>
                                            <h4 class="product-price">999 TL</h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">İstek Listesine Ekle</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Karşılaştır</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Özellikleri</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <!-- /product2 -->
                                    <!-- product3 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/laptop1.jpg" alt="">
                                            <div class="product-label">
                                                <span class="sale">-11%</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Laptop</p>
                                            <h3 class="product-name"><a href="#">Asus X543NA-GQ303T Celeron N3350  Gri Notebook</a></h3>
                                            <h4 class="product-price">2.799 TL <del class="product-old-price">3.129 TL</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">İstek Listesine Ekle</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Karşılaştır</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Özellikleri</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <!-- /product3 -->
                                    <!-- product4 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/webcam1.jpg" alt="">
                                            <div class="product-label">
                                                <span class="sale">-8%</span>
                                            </div>
                                        </div>

                                        <div class="product-body">
                                            <p class="product-category">Aksesuar</p>
                                            <h3 class="product-name"><a href="#"></a>Logitech C270 HD Webcam </h3>
                                            <h4 class="product-price">329TL <del class="product-old-price">359TL</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">İstek Listesine Ekle</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Karşılaştır</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Özellikleri</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <!-- /product4 -->
                                    <!-- product5 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/mouse3.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Aksesuar</p>
                                            <h3 class="product-name"><a href="#">
                                                    Logitech M105 Kablolu Mouse (Mavi)</a></h3>
                                            <h4 class="product-price">69.90TL</h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">İstek Listesine Ekle</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Karşılaştır</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Özellikleri</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <!-- /product5 -->
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
                                    <!-- product1 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/telefon2.jpg" alt="" height="60%">
                                            <div class="product-label">
                                                <span class="sale">-9%</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Akıllı Telefon</p>
                                            <h3 class="product-name"><a href="#">HSamsung Galaxy Note10 Lite Glow Akıllı Telefon</a></h3>
                                            <h4 class="product-price">4.999TL <del class="product-old-price">5.499 TL</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">İstek Listesine Ekle</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Karşılaştır</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Özellikleri</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <!-- /product1 -->
                                    <!-- product2 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/kulaklık3.jpg" alt="">
                                            <div class="product-label">
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Aksesuar</p>
                                            <h3 class="product-name"><a href="#">JBL Reflect Flow, True Wireless Kulaklık, Siyah </a></h3>
                                            <h4 class="product-price">1.299 TL</h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">İstek Listesine Ekle</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Karşılaştır</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Özellikleri</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <!-- /product2 -->
                                    <!-- product3 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/laptop2.jpg" alt="">
                                            <div class="product-label">
                                                <span class="sale">-11%</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Laptop</p>
                                            <h3 class="product-name"><a href="#">Lenovo Yoga C740 81TC000VTX Intel i7-10510U</a></h3>
                                            <h4 class="product-price">10.999TL <del class="product-old-price">12.299 TL</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">İstek Listesine Ekle</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Karşılaştır</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Özellikleri</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <!-- /product3 -->
                                    <!-- product4 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/webcam1.jpg" alt="">
                                            <div class="product-label">
                                                <span class="sale">-5%</span>
                                            </div>
                                        </div>

                                        <div class="product-body">
                                            <p class="product-category">Aksesuar</p>
                                            <h3 class="product-name"><a href="#"></a>Logitech C310 Siyah HD Webcam  </h3>
                                            <h4 class="product-price">379TL <del class="product-old-price">399TL</del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">İstek Listesine Ekle</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Karşılaştır</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Özellikleri</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <!-- /product4 -->
                                    <!-- product5 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/mouse4.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Aksesuar</p>
                                            <h3 class="product-name"><a href="#">
                                                    HP V0L79AA Kablosuz Mouse (Siyah) </a></h3>
                                            <h4 class="product-price">159.90TL</h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">İstek Listesine Ekle</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Karşılaştır</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Özellikleri</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Sepete Ekle</button>
                                        </div>
                                    </div>
                                    <!-- /product5 -->
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


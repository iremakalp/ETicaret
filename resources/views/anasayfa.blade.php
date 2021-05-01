@extends('layout.master')
@section('title','Anasayfa')
@section('content')
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
                                            <img src="./img/product01.png" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Laptop</p>
                                            <h3 class="product-name"><a href="#">Ürün Adı</a></h3>
                                            <h4 class="product-price">980.00TL <del class="product-old-price">990.00TL</del></h4>
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
                                    <!-- /product1 -->
                                    <!-- product2 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product02.png" alt="">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Category</p>
                                            <h3 class="product-name"><a href="#">Ürün Adı</a></h3>
                                            <h4 class="product-price">980.00TL <del class="product-old-price">990.00TL</del></h4>
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
                                            <img src="./img/product03.png" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Aksesuar</p>
                                            <h3 class="product-name"><a href="#">Ürün Adı</a></h3>
                                            <h4 class="product-price">980.00TL <del class="product-old-price">990.00TL</del></h4>
                                            <div class="product-rating">
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
                                            <img src="./img/product04.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Laptop</p>
                                            <h3 class="product-name"><a href="#">Ürün Adı</a></h3>
                                            <h4 class="product-price">980.00TL <del class="product-old-price">990.00TL</del></h4>
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
                                            <img src="./img/xiaomi.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Aksesuar</p>
                                            <h3 class="product-name"><a href="#">
                                                    Xiaomi Haylou GT1 Plus TWS Kablosuz Bluetooth Kulaklık</a></h3>
                                            <h4 class="product-price">169.90TL <del class="product-old-price">249.90TL</del></h4>
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
                                            <img src="./img/product06.png" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Laptop</p>
                                            <h3 class="product-name"><a href="#">Ürün Adı</a></h3>
                                            <h4 class="product-price">980.00TL <del class="product-old-price">990.00TL</del></h4>
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
                                    <!-- /product1 -->
                                    <!-- product2 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product07.png" alt="">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Akıllı Telefon</p>
                                            <h3 class="product-name"><a href="#">Ürün Adı</a></h3>
                                            <h4 class="product-price">980.00TL <del class="product-old-price">990.00TL</del></h4>
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
                                            <img src="./img/product08.png" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Laptop</p>
                                            <h3 class="product-name"><a href="#">Ürün Adı</a></h3>
                                            <h4 class="product-price">980.00TL <del class="product-old-price">990.00TL</del></h4>
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
                                    <!-- /product3 -->
                                    <!-- product4 -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/product09.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Kamera</p>
                                            <h3 class="product-name"><a href="#">Ürün Adı</a></h3>
                                            <h4 class="product-price">980.00TL <del class="product-old-price">990.00TL</del></h4>
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
                                            <img src="./img/product01.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Laptop</p>
                                            <h3 class="product-name"><a href="#">Ürün Adı</a></h3>
                                            <h4 class="product-price">980.00TL <del class="product-old-price">990.00TL</del></h4>
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


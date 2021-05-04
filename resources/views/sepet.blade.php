@extends('layout.master')
@section('title','Sepet') {{-- degistirilebilir alanı degistirmek icin--}}
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Order Details -->
                <div class=" order-details">
                    <div class="section-title text-center">
                        <h3 class="title">SEPET</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>Ürün</strong></div>
                            <div><strong>Ücret</strong></div>
                        </div>
                        <div class="order-products">
                            <div class="order-col">
                                <div>Product Name Goes Here</div>
                                <a href="#" class="btn btn-xs btn-default">-</a>
                                <span style="padding: 10px 20px">1</span>
                                <a href="#" class="btn btn-xs btn-default">+</a>
                                <div>$980.00<a href="#" style="margin: 5px;">Sil</a></div>
                            </div>
                            <div class="order-col">
                                <div>Product Name Goes Here</div>
                                <a href="#" class="btn btn-xs btn-default">-</a>
                                <span style="padding: 10px 20px">1</span>
                                <a href="#" class="btn btn-xs btn-default">+</a>
                                <div>$980.00 <a href="#" style="margin: 5px;">Sil</a> </div>
                            </div>
                        </div>
                        <div class="order-col">
                            <div>Kargo</div>
                            <div><strong>Ücretsiz</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>Toplam</strong></div>
                            <div><strong class="order-total">$2940.00</strong></div>
                        </div>
                    </div>
                    <a href="#" class="primary-btn order-submit " style="width: 200px; float: left;">ödeme Yap</a>
                    <a href="#" class="primary-btn order-submit" style="width: 200px; float: left;">Sepeti Boşalt</a>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection

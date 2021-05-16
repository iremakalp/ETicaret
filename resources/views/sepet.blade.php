@extends('layouts.master')
@section('title','Sepet') {{-- degistirilebilir alanı degistirmek icin--}}
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
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-7">
                    <div class=" order-details" style="width: 900px;">
                        <div class="section-title text-center">
                            <h3 class="title">SEPET</h3>
                            @include('layouts.partials.alert')
                        </div>
                        <div class="order-summary">
                            @if(count(Cart::content())>0)
                                <table class="table table-bordererd table-hover">
                                    <tr>
                                        <th><strong>Ürün</strong></th>
                                        <th><strong>Adet Fiyatı</strong></th>
                                        <th><strong>Adet</strong></th>
                                        <th><strong>Tutar</strong></th>
                                        <th><strong>Kaldır</strong></th>
                                    </tr>
                                    @foreach(Cart::content() as $urunCartItem)
                                        <div class="order-products">
                                            <div class="order-col">
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('urun', $urunCartItem->options->slug) }}">{{$urunCartItem->name}}</a>
                                                    </td>
                                                    <td>{{$urunCartItem->price}}₺</td>
                                                    <td>
                                                        <a href="#" class="btn btn-xs btn-default urun-adet-azalt"
                                                           data-id="{{ $urunCartItem->rowId }}"
                                                           data-adet="{{ $urunCartItem->qty-1 }}">-</a>
                                                        <span style="padding: 10px 20px">{{ $urunCartItem->qty }}</span>
                                                        <a href="#" class="btn btn-xs btn-default urun-adet-artir"
                                                           data-id="{{ $urunCartItem->rowId }}"
                                                           data-adet="{{ $urunCartItem->qty+1 }}">+</a>
                                                    </td>
                                                    <td class="text-right">
                                                        {{ $urunCartItem->subtotal }} ₺
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('sepet.kaldir', $urunCartItem->rowId) }}"
                                                              method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <input type="submit" class="primary-btn"
                                                                   style="width: 50px; height: 20px;padding: 0px; margin: 0px;"
                                                                   value="Sil">
                                                        </form>
                                                    </td>
                                                </tr>
                                            </div>
                                        </div>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            <div class="order-col">
                                                <div>Kargo</div>
                                                <div><strong>Ücretsiz</strong></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            <div class="order-col">
                                                <div>Ara Toplam</div>
                                                <div><strong>{{Cart::subtotal()}}₺ </strong></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            <div class="order-col">
                                                <div>KDV</div>
                                                <div><strong>{{Cart::tax()}}₺ </strong></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            <div class="order-col">
                                                <a href="{{route('odeme')}}" class="primary-btn order-submit"
                                                   style="width: 120px; padding: 10px;float: left; margin: 2px;">Ödeme
                                                    Yap</a>
                                                <form action="{{ route('sepet.bosalt') }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <input type="submit" class="primary-btn order-submit"
                                                           style="width: 140px; padding: 10px; margin: 2px; float: left;"
                                                           value="Sepeti Boşalt">
                                                </form>
                                                <div><strong>TOPLAM</strong></div>
                                                <div><strong class="order-total">{{Cart::total()}}₺ </strong></div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            @else
                                <p>Sepetinizde ürün yok!</p>
                            @endif
                        </div>
                        <!-- /Order Details -->
                    </div>
                </div>
                <!-- Order Details -->

                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        @endsection
        @section('footer')
            <script>
                setTimeout(function () {
                    $('.alert').slideUp("slow");
                }, 3000);


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('.urun-adet-artir, .urun-adet-azalt').on('click', function () {

                    var id = $(this).attr('data-id');
                    var myAdet = $(this).attr('data-adet');

                    $.ajax({
                        type: 'PATCH',
                        url: '{{url('sepet/guncelle')}}/'+ id,
                        data: {adet: myAdet},
                        success: function () {
                            window.location.href = '{{route('sepet')}}';
                        }
                    });
                });
            </script>
@endsection

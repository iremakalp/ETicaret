@extends('layouts.master')
@section('title','Siparişler') {{-- degistirilebilir alanı degistirmek icin--}}
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
    <div class="container">
        <div class="bg-content" style="padding: 40px;">
            <h2>Siparişler</h2>
            @if (count($siparisler) == 0)
                <p>Henüz siparişiniz yok</p>
            @else
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th>Sipariş Kodu</th>
                        <th>Tutar</th>
                        <th>Toplam Ürün</th>
                        <th>Durum</th>
                        <th></th>
                    </tr>
                    @foreach($siparisler as $siparis)
                        <tr>
                            <td>SP-{{ $siparis->id }}</td>
                            <td>{{ $siparis->siparis_tutari * ((100+config('cart.tax'))/100) }}</td>
                            <td>{{ $siparis->sepet->sepet_urun_adet() }}</td>
                            <td>{{ $siparis->durum }}</td>
                            <td><a href="{{ route('siparis', $siparis->id) }}" class="primary-btn cta-btn" style="width: 100px; height: 30px; margin: 0px; padding: 5px;">Detay</a></td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
@endsection

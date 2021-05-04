@extends('layout.master')
@section('title','Siparis Detay') {{-- degistirilebilir alanı degistirmek icin--}}
@section('content')
    <div class="container" style="padding: 30px;">
        <div class="bg-content">
            <h2>Sipariş (SP-00123)</h2>
            <table class="table table-bordererd table-hover">
                <tr>
                    <th>Ürün</th>
                    <th>Tutar</th>
                    <th>Adet</th>
                    <th>Ara Toplam</th>
                    <th>Durum</th>
                </tr>
                <tr>
                    <td> <img src="/img/"> Ürün adı</td>
                    <td>18.99</td>
                    <td>1</td>
                    <td>18.99</td>
                    <td>
                        Sipariş alındı, <br> Onaylandı, <br> Kargoya verildi, <br> Bir sorun var. İletişime geçin!
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Toplam Tutar (KDV Dahil)</th>
                    <th>18.99</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Kargo</th>
                    <th>Ücretsiz</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Sipariş Toplamı</th>
                    <th>18.99</th>
                    <th></th>
                </tr>

            </table>
        </div>
    </div>
@endsection


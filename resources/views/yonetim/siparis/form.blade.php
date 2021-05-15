@extends('yonetim.layouts.master')
@section('title', 'Sipariş Düzenle')
@section('content')
    <form method="post" action="{{ route('yonetim.siparis.kaydet', $entry->id) }}">
        {{ csrf_field() }}

        <h3 class="sub-header" style="margin: 15px;">
            Sipariş {{ $entry->id > 0 ? "Düzenle" : "Ekle" }}
            <button type="submit" class="btn btn-primary btn-sm" style="border: none; background-color:#D10024;  height: 40px; width: 100px; border-radius: 30px;">
                {{ $entry->id > 0 ? "Güncelle" : "Kaydet" }}
            </button>
        </h3>
        @include('layouts.partials.error')
        @include('layouts.partials.alert')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card" style="width: 800px; margin-left: 20px;">
                            <div class="card-header">
                                <strong>Sipariş Bilgileri</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="adsoyad">Ad Soyad</label>
                                    <input type="text" class="form-control" id="adsoyad" name="adsoyad" placeholder="Ad Soyad" value="{{ old('adsoyad', $entry->adsoyad) }}">
                                </div>
                                <div class="form-group">
                                    <label for="telefon">Telefon</label>
                                    <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon" value="{{ old('telefon', $entry->telefon) }}">
                                </div>
                                <div class="form-group">
                                    <label for="adres">Adres</label>
                                    <input type="text" class="form-control" id="adres" name="adres" placeholder="Adres" value="{{ old('adres', $entry->adres) }}">
                                </div>
                                <div class="form-group">
                                    <label for="durum">Durum</label>
                                    <select name="durum" class="form-control" id="durum">
                                        <option {{ old('durum', $entry->durum) == 'Siparişiniz alındı' ? 'selected' : '' }}>Siparişiniz alındı</option>
                                        <option {{ old('durum', $entry->durum) == 'Ödeme onaylandı' ? 'selected' : '' }}>Ödeme onaylandı</option>
                                        <option {{ old('durum', $entry->durum) == 'Kargoya verildi' ? 'selected' : '' }}>Kargoya verildi</option>
                                        <option {{ old('durum', $entry->durum) == 'Sipariş tamamlandı' ? 'selected' : '' }}>Sipariş tamamlandı</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </form>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card" style="width: 800px; margin-left: 20px;">
                        <div class="card-header">
                            <strong>Sepet-{{ $entry->id }}</strong>
                        </div>
                        <div class="card-body card-block">
                            <table class="table table-bordererd table-hover">
                                <tr>
                                    <th colspan="2">Ürün</th>
                                    <th>Tutar</th>
                                    <th>Adet</th>
                                    <th>Ara Toplam</th>
                                    <th>Durum</th>
                                </tr>
                                @foreach($entry->sepet->sepet_urunler as $sepet_urun)
                                    <tr>
                                        <td style="width:120px">
                                            <a href="{{ route('urun', $sepet_urun->urun->slug) }}">
                                                <img src="{{ $sepet_urun->urun->detay->urun_resmi!=null ? $sepet_urun->urun->detay->urun_resmi : 'http://via.placeholder.com/120x100?text=UrunResmi' }}" style="height: 120px;">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('urun', $sepet_urun->urun->slug) }}">
                                                {{ $sepet_urun->urun->urun_adi }}
                                            </a>
                                        </td>
                                        <td>{{ $sepet_urun->fiyati }} ₺</td>
                                        <td>{{ $sepet_urun->adet }}</td>
                                        <td>{{ $sepet_urun->fiyati * $sepet_urun->adet }} ₺</td>
                                        <td>{{ $sepet_urun->durum }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th colspan="4" class="text-right">Toplam Tutar</th>
                                    <td colspan="2">{{ $entry->siparis_tutari }} ₺</td>
                                </tr>
                                <tr>
                                    <th colspan="4" class="text-right">Toplam Tutar (KDV'li)</th>
                                    <td colspan="2">{{ $entry->siparis_tutari* ((100+config('cart.tax'))/100) }} ₺</td>
                                </tr>
                                <tr>
                                    <th colspan="4" class="text-right">Sipariş Durumu</th>
                                    <td colspan="2">{{ $entry->durum }}</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
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

    </script>
@endsection

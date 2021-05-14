@extends('yonetim.layouts.master')
@section('title', 'Kullanıcı Yönetimi')
@section('content')

    <form method="post" action="{{ route('yonetim.kullanici.kaydet', $entry->id) }}">
        {{ csrf_field() }}

        <h3 class="sub-header" style="margin: 15px;">
            Kullanıcı {{ $entry->id > 0 ? "Düzenle" : "Ekle" }}
        </h3>
        @include('layouts.partials.error')
        @include('layouts.partials.alert')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="card" style="width: 400px; margin-left: 20px;">
                            <div class="card-header">
                                <strong>Hesap Bilgileri</strong>
                            </div>
                            <div class="card-body card-block">

                                <div class="form-group">
                                    <label for="ad-soyad" class=" form-control-label">Ad Soyad</label>
                                    <input type="text" id="adsoyad" name="adsoyad" placeholder="Ad Soyad"
                                           class="form-control" value="{{ old('adsoyad', $entry->adsoyad) }}">

                                </div>

                                <div class="form-group">
                                    <label ffor="email" class=" form-control-label">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Email"
                                           value="{{ old('email', $entry->email) }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="sifre" class=" form-control-label">Şifre</label>
                                    <input type="password" id="sifre" name="sifre" placeholder="Sifre"
                                           class="form-control">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card" style="width: 400px; margin-left: -20px;">
                            <div class="card-header">
                                <strong>İletişim Bilgileri</strong>
                            </div>
                            <div class="card-body card-block">

                                <div class="form-group">
                                    <label for="adres" class=" form-control-label">Adres</label>
                                    <input type="text" id="adres" name="adres" placeholder="Adres"
                                           value="{{ old('adres', $entry->detay->adres) }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="telefon" class=" form-control-label">Telefon</label>
                                    <input type="text" class="form-control" id="telefon" name="telefon"
                                           placeholder="Telefon" value="{{ old('telefon', $entry->detay->telefon) }}">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="hidden" name="aktif_mi" value="0">
                                            <input type="checkbox" name="aktif_mi"
                                                   value="1" {{ old('aktif_mi', $entry->aktif_mi) ? 'checked' : '' }}>
                                            Aktif Mi
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="hidden" name="yonetici_mi" value="0">
                                            <input type="checkbox" name="yonetici_mi"
                                                   value="1" {{ old('yonetici_mi', $entry->yonetici_mi) ? 'checked' : '' }}>
                                            Yönetici Mi
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary btn-sm"
                                    style="border: none; background-color:#D10024; float: right; height: 40px; width: 100px; border-radius: 30px;">
                                {{ $entry->id > 0 ? "Güncelle" : "Kaydet" }}
                            </button>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
    </form>
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
                url: '{{url('sepet/guncelle')}}/' + id,
                data: {adet: myAdet},
                success: function () {
                    window.location.href = '{{route('sepet')}}';
                }
            });
        });
    </script>
@endsection

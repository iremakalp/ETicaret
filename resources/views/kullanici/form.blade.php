@extends('layouts.master')
@section('title', 'Bilgilerim')
@section('head')
    <style>
        @media only screen and (max-width: 990px) {
            .iletisim{
                margin-left: 40px;
                margin-top: 40px;
            }
        }
        @media only screen and (max-width: 370px) {
            .hesap{
                width: 40%;
                height: 40%;
            }
            .form-group{
                width: 50%;

            }
        }
    </style>
@endsection
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
    <form method="post" action="{{route('kullanici.kaydet', $kullanici->id)}}">
        {{ csrf_field() }}
    <h3 class="sub-header" style="margin-top: 30px; margin-left: 50px; text-transform: uppercase; color: #0d152a;">
        Kullanıcı Bilgileri Düzenleme
    </h3>

        @include('layouts.partials.error')
        @include('layouts.partials.alert')
        <div class="content mt-3"  style="margin: 30px;">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-4 hesap" style="margin-right: 15px;">
                            <div class="card" style="width: 400px; margin-left: 20px;">
                                <div class="card-header" style="margin-bottom: 20px; text-transform: uppercase;">
                                    <strong>Hesap Bilgileri</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="ad-soyad" class=" form-control-label">Ad Soyad</label>
                                        <input type="text" id="adsoyad" name="adsoyad" placeholder="Ad Soyad" class="form-control" value="{{ old('adsoyad', $kullanici->adsoyad) }}">
                                    </div>
                                    <div class="form-group">
                                        <label ffor="email" class=" form-control-label">Email</label>
                                        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email', $kullanici->email) }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="sifre" class=" form-control-label">Şifre</label>
                                        <input type="password" id="sifre" name="sifre" placeholder="Sifre" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 iletisim">
                            <div class="card " style="width: 400px; margin-left: -20px;">
                                <div class="card-header" style="margin-bottom: 20px; text-transform: uppercase;">
                                    <strong>İletişim Bilgileri</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="adres" class=" form-control-label">Adres</label>
                                        <input type="text" id="adres" name="adres" placeholder="Adres" value="{{ old('adres', $kullanici->detay->adres) }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefon" class=" form-control-label">Telefon</label>
                                        <input  type="text" class="form-control telefon" id="telefon" name="telefon" placeholder="Telefon" value="{{ old('telefon', $kullanici->detay->telefon) }}">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary btn-sm " style="border: none; background-color:#D10024; float: right; height: 40px; width: 100px; border-radius: 30px;">
                                    Kaydet
                                </button>
                            </div>
                            <div>
                                <a href="{{ route('kullanici.sil', $kullanici->id) }}"
                                   class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top"
                                   title="Sil" onclick="return confirm('Hesabı silmek istediğinize emin misiniz?')"
                                   style="background-color:#D10024;border: none; width: 50px; height: 40px; margin-left: 250px; ">
                                    <span class="fa fa-trash fa-3x"></span>
                                </a>
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
        $('.telefon').mask('(000) 000-00-00', {placeholder: "(___) ___-__-__"});
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
@endsection

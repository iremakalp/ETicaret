@extends('layouts.master')
@section('title','Oturum Aç') {{-- degistirilebilir alanı degistirmek icin--}}
@section('content')
    <style>
        @media only screen and (max-width: 370px) {
            .row{
                width: 300px;
            }
            .oturum{
                width: 200px;
            }
        }
    </style>
    <div class="container" style="padding: 30px; width: 800px;">
        @include('layouts.partials.alert')

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #1b1e21; color: whitesmoke;">Oturum Aç</div>
                    <div class="panel-body oturum">
                        @include('layouts.partials.error')

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('kullanici.oturumac') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sifre" class="col-md-4 control-label">Şifre</label>
                                <div class="col-md-6">
                                    <input id="sifre" type="password" class="form-control" name="sifre" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="benihatirla" checked> Beni hatırla
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary"  style="background-color: #D10024; border-radius: 30px; border: none; color: whitesmoke;">
                                        Giriş yap
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="links">
                            <a href="{{ route('yonetim.oturumac') }}" style="color:#D10024; ">Yönetici Girişi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@extends('layouts.master')
@section('title','Kaydol') {{-- degistirilebilir alanı degistirmek icin--}}
@section('head')
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
@endsection
@section('content')
    <div class="container" style="padding: 30px; width: 900px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #1b1e21; color: whitesmoke;">Kaydol</div>
                    <div class="panel-body oturum">
                        @include('layouts.partials.error')
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('kullanici.kaydol') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="adsoyad" class="col-md-4 control-label">Ad Soyad</label>
                                <div class="col-md-6">
                                    <input id="adsoyad" type="text" class="form-control" name="adsoyad" value="{{ old('adsoyad') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sifre" class="col-md-4 control-label">Şifre</label>
                                <div class="col-md-6">
                                    <input id="sifre" type="password" class="form-control" name="sifre" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sifre-tekrari" class="col-md-4 control-label">Şifre (Tekrar)</label>
                                <div class="col-md-6">
                                    <input id="sifre-tekrari" type="password" class="form-control" name="sifre_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary"  style="background-color: #D10024; float: right; border-radius: 30px; border: none; color: whitesmoke;">
                                        Kaydol
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


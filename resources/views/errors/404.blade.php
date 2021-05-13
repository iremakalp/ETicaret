@extends('layouts.master')
@section('content')
    <div class="container" style="padding-top: 30px">
        <div class="jumbotron text-center">
         <h1>404</h1>
            <h2>Aradığınız sayfa bulunamadı!</h2>
            <a href="{{route('anasayfa')}}" class="primary-btn order-submit">Anasayfa</a>

        </div>

    </div>
@endsection

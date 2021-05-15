<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eticaret Projesi - Yönetim</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container">
    <form class="form-signin" style="background-color: #1E1F29; color: whitesmoke"
          action="{{ route('yonetim.oturumac') }}" method="post">
        {{ csrf_field() }}
        <img src="/img/logo.png" class="logo">
        <strong style="text-align: center; margin: 100px;">Admin Giriş</strong>
        <br><br>
        @include('layouts.partials.error')

        <label for="email" class="sr-only">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus
               style="margin-bottom: 15px;">
        <label for="sifre" class="sr-only">Şifre</label>
        <input type="password" id="sifre" name="sifre" class="form-control" placeholder="Şifre" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="benihatirla" value="1" checked> Beni hatırla
            </label>
        </div>
        <button class="primary-btn cta-btn" style="width:300px; text-transform: capitalize;" type="submit">Giriş Yap
        </button>
        <div class="links">
            <a href="{{ route('anasayfa') }}" style="color: whitesmoke">&larr; Siteye dön</a>
        </div>
    </form>
</div>

<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>
</html>

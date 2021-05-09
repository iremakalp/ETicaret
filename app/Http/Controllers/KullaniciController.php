<?php

namespace App\Http\Controllers;
use App\Models\Kullanici;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class KullaniciController extends Controller
{
    public function giris_form()
    {
        return view('kullanici.oturumac');
    }
    public function kaydol_form()
    {
        return view('kullanici.kaydol');
    }

    public function kaydol()
    {
        $this->validate(request(), [ //dogrulama islemleri
            'adsoyad' => 'required|min:5|max:60',
            'email'   => 'required|email|unique:kullanici',
            'sifre'   => 'required|confirmed|min:5|max:15'
        ]);
        $kullanici = Kullanici::create([
            'adsoyad'             => request('adsoyad'), //request formdan gelen degeri alir
            'email'               => request('email'),//formdan gelen degeri alir
            'sifre'               => Hash::make(request('sifre')),//sifre hashlenerek saklanir
            'aktivasyon_anahtari' => Str::random(60), //rastgele metin olusturur
            'aktif_mi'            => 0
        ]);

        auth()->login($kullanici); //veritabanina eklendikten sonra sisteme giris otomatiklesir

        return redirect()->route('anasayfa');
    }

}

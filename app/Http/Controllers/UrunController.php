<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Urun;
use App\Models\UrunYorum;
use Cron\DayOfMonthField;
use Illuminate\Http\Request;

class UrunController extends Controller
{
   public function index($slug_urunadi)
   {
       $urun=Urun::whereSlug($slug_urunadi)->firstOrFail();

       $id=$urun->id;
       $yorumlar = UrunYorum::select('urun_yorum.*')
           ->join('urun', 'urun.id', 'urun_yorum.urun_id')
           ->where('urun_yorum.urun_id', $id)
           ->orderBy('guncelleme_tarihi', 'desc')
           ->simplePaginate(3);

       $kategoriler=Kategori::whereRaw('ust_id is null')->get();
       return view('urun',compact('urun','yorumlar','kategoriler'));
   }
    public function ara()
    {
        $aranan=request()->input('aranan');
        $urunler=Urun::where('urun_adi','like', "%$aranan%")
            ->orWhere('aciklama','like', "%$aranan%")
            ->orWhere('slug','like', "%$aranan%")
            ->simplePaginate(3);
        request()->flash();

        $kategoriler=Kategori::whereRaw('ust_id is null')->get();

        return view('arama',compact('urunler','kategoriler'));

    }
    public function  yorumYap($slug_urunadi)
    {
        $urun=Urun::whereSlug($slug_urunadi)->firstOrFail();

        $id=$urun->id;
        UrunYorum::create([
            'adsoyad' => request('adsoyad'), //request formdan gelen degeri alir
            'email' => request('email'),//formdan gelen degeri alir
            'yorum' => request('yorum'),
            'urun_id' =>$id
        ]);
        $kategoriler=Kategori::whereRaw('ust_id is null')->get();

        return redirect()->route('urun',compact('slug_urunadi','kategoriler'));

    }
}

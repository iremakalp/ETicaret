<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index($slug_kategoriadi)
    {
        $kategori=Kategori:: where('slug',$slug_kategoriadi)->firstOrFail();
        $alt_kategoriler=Kategori::where('ust_id',$kategori->id)->get();
        $ust_kategori = Kategori::find($kategori->ust_id);
        $order=request('order');

        if($order=='coksatanlar') {
            $urunler = $kategori->urunler()
                ->join('urun_detay', 'urun_detay.urun_id', 'urun.id') //urun_detay tablosundaki urun_id ile urun tablosundaki id birbirine baglanir
                ->orderBy('urun_detay.goster_cok_satan', 'desc')
                ->simplePaginate(3);
        }
        else if($order=='yeni') {
            $urunler = $kategori->urunler()
                ->orderByDesc('guncelleme_tarihi')
                ->simplePaginate(3);
        }
        else{
            $urunler = $kategori->urunler()
                ->orderByDesc('guncelleme_tarihi')
                ->simplePaginate(3);
        }
        $kategoriler=Kategori::whereRaw('ust_id is null')->get();

        return view('kategori',compact('kategori','alt_kategoriler','urunler','ust_kategori','kategoriler'));
    }
}

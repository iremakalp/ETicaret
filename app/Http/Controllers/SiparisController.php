<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Siparis;
use Illuminate\Http\Request;

class SiparisController extends Controller
{
    public function index()
    {
        $siparisler = Siparis::with('sepet')
            ->whereHas('sepet', function($query) {
                $query->where('kullanici_id', auth()->id());
            })
            ->orderByDesc('olusturma_tarihi')
            ->get();

        $kategoriler=Kategori::whereRaw('ust_id is null')->get();

        return view('siparisler', compact('siparisler','kategoriler'));
    }
    public function detay($id)
    {
        $siparis = Siparis::with('sepet.sepet_urunler.urun')
            ->whereHas('sepet', function($query) {
                $query->where('kullanici_id', auth()->id());
            })
            ->where('siparis.id', $id)
            ->firstOrFail();

        $kategoriler=Kategori::whereRaw('ust_id is null')->get();

        return view('siparis', compact('siparis','kategoriler'));
    }
}

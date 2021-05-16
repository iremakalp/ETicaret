<?php

namespace App\Http\Controllers\Yonetim;

use App\Models\Kategori;
use App\Models\Urun;
use App\Models\UrunYorum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YorumController extends Controller
{
    public function index()
    {
        $yorumlar = UrunYorum::paginate(8);

        $kategoriler = Kategori::whereRaw('ust_id is null')->get();

        return view('yonetim.UrunYorum.index', compact('yorumlar', 'kategoriler'));
    }
    public function sil($id)
    {
        $yorum = UrunYorum::find($id);

        $yorum->delete();

        return redirect()
            ->route('yonetim.yorum')
            ->with('mesaj', 'Kayıt silindi')
            ->with('mesaj_tur', 'success');
    }
}

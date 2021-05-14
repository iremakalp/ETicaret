<?php

namespace App\Http\Controllers\Yonetim;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnasayfaController extends Controller
{
    public function index()
    {
         
        $kategoriler=Kategori::whereRaw('ust_id is null')->get();

        return view('yonetim.anasayfa',compact('kategoriler'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class AnasayfaController extends Controller
{
    public function index()
    {
        $kategoriler=Kategori::whereRaw('ust_id is null')->get();
        return view('anasayfa', compact('kategoriler'));
    }
}

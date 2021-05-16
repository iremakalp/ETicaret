<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Siparis;

class SiparisController extends Controller
{
    public function index()
    {
        if (request()->filled('aranan')) {
            request()->flash();
            $aranan = request('aranan');
            $list = Siparis::with('sepet.kullanici') //siparisle beraber sepet ve kullanici bilgisinide ceker
                ->where('adsoyad', 'like', "%$aranan%")
                ->orWhere('id', $aranan)
                ->orWhere('durum','like', "%$aranan%")
                ->paginate(8)
                ->appends('aranan', $aranan);
        } else {
            $list = Siparis::with('sepet.kullanici')
                ->paginate(8);
        }

        $kategoriler=Kategori::whereRaw('ust_id is null')->get();

        return view('yonetim.siparis.index', compact('list','kategoriler'));
    }

    public function form($id = 0) //id duzenlenecek siparisi ifade eder
    {
        if ($id > 0) {

            //siparis sepetinde bulunan urunleri cekmek icin
            $entry = Siparis::with('sepet.sepet_urunler.urun')->find($id);
        }
        $kategoriler=Kategori::whereRaw('ust_id is null')->get();

        return view('yonetim.siparis.form', compact('entry','kategoriler'));
    }

        public function kaydet($id = 0)
        {
            $this->validate(request(), [
                'adsoyad' => 'required',
                'adres'   => 'required',
                'telefon' => 'required',
                'durum'   => 'required'
            ]);

            $data = request()->only('adsoyad', 'adres', 'telefon', 'durum');

            if ($id > 0) {
                $entry = Siparis::where('id', $id)->firstOrFail();
                $entry->update($data);
            }

            return redirect()
                ->route('yonetim.siparis.duzenle', $entry->id)
                ->with('mesaj', 'Güncellendi')
                ->with('mesaj_tur', 'success');
        }

        public function sil($id)
        {
            Siparis::destroy($id); //siparisi siler

            return redirect()
                ->route('yonetim.siparis')
                ->with('mesaj', 'Kayıt silindi')
                ->with('mesaj_tur', 'success');
        }
}

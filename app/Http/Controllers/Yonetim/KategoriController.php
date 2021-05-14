<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        if (request()->filled('aranan') || request()->filled('ust_id')) {
            request()->flash();
            $aranan = request('aranan');
            $ust_id = request('ust_id');
            $list = Kategori::with('ust_kategori')
                ->where('kategori_adi', 'like', "%$aranan%")
                ->where('ust_id', $ust_id)
                ->paginate(2)
                ->appends(['aranan' => $aranan, 'ust_id' => $ust_id]);
        } else {
            request()->flush();
            $list = Kategori::with('ust_kategori')->paginate(8);


        }
        $anakategoriler = Kategori::whereRaw('ust_id is null')->get();
        $kategoriler=Kategori::whereRaw('ust_id is null')->get();
        return view('yonetim.kategori.index', compact('list', 'anakategoriler','kategoriler'));
    }
    public function form($id = 0)
    {
        $kategori = new Kategori;
        if ($id > 0) {
            $kategori = Kategori::find($id);
        }

        $seckategoriler = Kategori::all();
        $kategoriler=Kategori::whereRaw('ust_id is null')->get();
        return view('yonetim.kategori.form', compact('kategori', 'seckategoriler','kategoriler'));
    }
    public function kaydet($id = 0)
    {
        $this->validate(request(), [
            'kategori_adi' => 'required',
            'slug'         => (request('original_slug') != request('slug') ? 'unique:kategori,slug' : '')
        ]);

        $data = request()->only('kategori_adi', 'slug', 'ust_id');
        if (!request()->filled('slug')) {
            $data['slug'] = str_slug(request('kategori_adi'));
            request()->merge(['slug' => $data['slug']]);
        }
        if ($id > 0) {
            $kategori = Kategori::where('id', $id)->firstOrFail();
            $kategori->update($data);
        } else {
            $kategori = Kategori::create($data);
        }

        return redirect()
            ->route('yonetim.kategori.duzenle', $kategori->id)
            ->with('mesaj', ($id > 0 ? 'Güncellendi' : 'Kaydedildi'))
            ->with('mesaj_tur', 'success');
    }
    public function sil($id)
    {
        $kategori = Kategori::find($id);
        $kategori_urun_adet = $kategori->urunler()->count();
        if ($kategori_urun_adet>0)
        {
            return redirect()
                ->route('yonetim.kategori')
                ->with('mesaj', "Bu kategoride $kategori_urun_adet adet ürün var. Bu yüzden silme işlemi yapılmamıştır.")
                ->with('mesaj_tur', 'warning');
        }
        $kategori->urunler()->detach();
        $kategori->delete();

        return redirect()
            ->route('yonetim.kategori')
            ->with('mesaj', 'Kayıt silindi')
            ->with('mesaj_tur', 'success');
    }
}

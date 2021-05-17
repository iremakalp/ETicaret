<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Siparis;
use Cart;

class OdemeController extends Controller
{
    public function index()
    {
        $currentYear =date('Y');
        if (!auth()->check()) { //hesap acik mi diye kontrol eder
            return redirect()->route('kullanici.oturumac')
                ->with('mesaj_tur', 'info')
                ->with('mesaj', 'Ödeme işlemi için oturum açmanız veye kullanıcı kaydı yapmanız gerekmektedir.');
        } else if (count(Cart::content()) == 0) {
            return redirect()->route('anasayfa')
                ->with('mesaj_tur', 'info')
                ->with('mesaj', 'Ödeme işlemi için sepetinizde bir ürün bulunmalıdır.');
        }

        $kullanici_detay = auth()->user()->detay;
        $kategoriler = Kategori::whereRaw('ust_id is null')->get();

        return view('odeme', compact('kullanici_detay', 'kategoriler','currentYear'));
    }

    public function odemeyap()
    {
        $siparis = request()->all();
        $siparis['sepet_id'] = session('aktif_sepet_id');
        $siparis['banka'] = "Garanti";
        $siparis['taksit_sayisi'] = 1;
        $siparis['durum'] = "Siparişiniz alındı";
        $siparis['siparis_tutari'] = Cart::subtotal();

        Siparis::create($siparis);
        Cart::destroy();
        session()->forget('aktif_sepet_id');

        return redirect()->route('siparisler')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ödemeniz başarılı bir şekilde gerçekleştirildi.');
    }
}

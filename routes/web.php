<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Admin Root*/
Route::group(['prefix' => 'yonetim', 'namespace' => 'Yonetim'], function () {
    Route::redirect('/', '/yonetim/oturumac');
    Route::match(['get', 'post'], '/oturumac', 'KullaniciController@oturumac')->name('yonetim.oturumac');
    Route::get('/oturumukapat', 'KullaniciController@oturumukapat')->name('yonetim.oturumukapat');

    Route::group(['middleware' => 'yonetim'], function () {
        Route::get('/anasayfa', 'AnasayfaController@index')->name('yonetim.anasayfa');
        Route::group(['prefix' => 'kullanici'], function () {
            Route::match(['get', 'post'], '/', 'KullaniciController@index')->name('yonetim.kullanici');
            Route::get('/yeni', 'KullaniciController@form')->name('yonetim.kullanici.yeni');
            Route::get('/duzenle/{id}', 'KullaniciController@form')->name('yonetim.kullanici.duzenle');
            Route::post('/kaydet/{id?}', 'KullaniciController@kaydet')->name('yonetim.kullanici.kaydet');
            Route::get('/sil/{id}', 'KullaniciController@sil')->name('yonetim.kullanici.sil');
        });
        Route::group(['prefix' => 'kategori'], function () {
            Route::match(['get', 'post'], '/tumu/', 'KategoriController@index')->name('yonetim.kategori');
            Route::match(['get', 'post'], '/tumu/{id}', 'UrunController@listele')->name('yonetim.kategori.urun');

            Route::get('/yeni', 'KategoriController@form')->name('yonetim.kategori.yeni');
            Route::get('/duzenle/{id}', 'KategoriController@form')->name('yonetim.kategori.duzenle');
            Route::post('/kaydet/{id?}', 'KategoriController@kaydet')->name('yonetim.kategori.kaydet');
            Route::get('/sil/{id}', 'KategoriController@sil')->name('yonetim.kategori.sil');
        });
     Route::group(['prefix' => 'urun'], function () {
            Route::match(['get', 'post'], '/', 'UrunController@index')->name('yonetim.urun');
            Route::get('/yeni', 'UrunController@form')->name('yonetim.urun.yeni');
            Route::get('/duzenle/{id}', 'UrunController@form')->name('yonetim.urun.duzenle');
            Route::post('/kaydet/{id?}', 'UrunController@kaydet')->name('yonetim.urun.kaydet');
            Route::get('/sil/{id}', 'UrunController@sil')->name('yonetim.urun.sil');
        });
        Route::group(['prefix' => 'yorum'], function () {
            Route::match(['get', 'post'], '/', 'YorumController@index')->name('yonetim.yorum');
            Route::get('/sil/{id}', 'YorumController@sil')->name('yonetim.yorum.sil');
        });
        Route::group(['prefix' => 'siparis'], function () {
            Route::match(['get', 'post'], '/', 'SiparisController@index')->name('yonetim.siparis');
            Route::get('/yeni', 'SiparisController@form')->name('yonetim.siparis.yeni');
            Route::get('/duzenle/{id}', 'SiparisController@form')->name('yonetim.siparis.duzenle');
            Route::post('/kaydet/{id?}', 'SiparisController@kaydet')->name('yonetim.siparis.kaydet');
            Route::get('/sil/{id}', 'SiparisController@sil')->name('yonetim.siparis.sil');
        });
    });

});


/* User Root*/
Route::get('/','AnasayfaController@index')->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}','KategoriController@index')->name('kategori');

Route::get('/urun/{slug_urunadi}','UrunController@index')->name('urun');
Route::post('/urun/{slug_urunadi}', 'UrunController@yorumYap')->name('urun.yorumyap');

Route::post('/ara','UrunController@ara')->name('urun_ara');
Route::get('/ara','UrunController@ara')->name('urun_ara');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/siparisler', 'SiparisController@index')->name('siparisler');
    Route::get('/siparisler/{id}', 'SiparisController@detay')->name('siparis');
    Route::get('/duzenle/{id}', 'KullaniciController@form')->name('kullanici.duzenle');
    Route::post('/kaydet/{id?}', 'KullaniciController@kaydet')->name('kullanici.kaydet');
    Route::get('/sil/{id}', 'KullaniciController@sil')->name('kullanici.sil');
    Route::get('/odeme', 'OdemeController@index')->name('odeme');
    Route::post('/odeme', 'OdemeController@odemeyap')->name('odemeyap');
    Route::group(['prefix' => 'sepet'], function () {
        Route::get('/', 'SepetController@index')->name('sepet');
        Route::post('/ekle', 'SepetController@ekle')->name('sepet.ekle');
        Route::delete('/kaldir/{rowid}', 'SepetController@kaldir')->name('sepet.kaldir');
        Route::delete('/bosalt', 'SepetController@bosalt')->name('sepet.bosalt');
        Route::patch('/guncelle/{rowid}', 'SepetController@guncelle')->name('sepet.guncelle');
    });
});

Route::group(['prefix' => 'kullanici'], function () {

    Route::get('/oturumac', 'KullaniciController@giris_form')->name('kullanici.oturumac');
    Route::post('/oturumac', 'KullaniciController@giris');
    Route::get('/kaydol', 'KullaniciController@kaydol_form')->name('kullanici.kaydol');

    Route::post('/kaydol', 'KullaniciController@kaydol');
    Route::get('/aktiflestir/{anahtar}', 'KullaniciController@aktiflestir')->name('aktiflestir');
    Route::post('/oturumukapat', 'KullaniciController@oturumukapat')->name('kullanici.oturumukapat');
});

Route::get('/test/mail', function (){

    $kullanici = App\Models\Kullanici::find(2);

    return new App\Mail\KullaniciKayitMail($kullanici);
});


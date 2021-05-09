<?php

use Illuminate\Database\Seeder;
use App\Models\Urun;
use App\Models\UrunDetay;
class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
       Urun::truncate();
       UrunDetay::truncate();
        /* kulaklik kategorisi */
        $urun=Urun::create([
            'urun_adi'=>'Huawei Freebuds 3',
            'slug'=>'huawei-freebuds-kulaklik',
            'aciklama'=>'Kulak içi Kablosuz Kulaklık,Siyah',
            'fiyati'=>'999.00',
            'url'=>'/img/kulaklık1.png',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
       $urun=Urun::create([
               'urun_adi'=>'Jbl T500BT Kulaklık',
               'slug'=>'jblT500BT-kulaklik',
               'aciklama'=>'Kulak Üstü Mikrofonlu Kablosuz Kulaklık,Mavi',
               'fiyati'=>'327.00',
           'url'=>'/img/kulaklık2.png',
           ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun=Urun::create([
            'urun_adi'=>'JBL Reflect Flow',
            'slug'=>'jblrefect-flow-kulaklik',
            'aciklama'=>'True Wireless Kulaklık, Siyah',
            'fiyati'=>'1.299',
            'url'=>'/img/kulaklık3.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        /* telefon kategorisi */
        $urun=Urun::create([
            'urun_adi'=>'Huawei P40 Lite ',
            'slug'=>'huawei-p40-lite-telefon',
            'aciklama'=>'28 GB Pembe Akıllı Telefon',
            'fiyati'=>'3.499',
            'url'=>'/img/telefon2.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun=Urun::create([
            'urun_adi'=>'Samsung Galaxy Note10 Lite Glow',
            'slug'=>'samsung-note10-glow-telefon',
            'aciklama'=>'Akıllı Telefon',
            'fiyati'=>'4.999',
            'url'=>'/img/telefon3.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun=Urun::create([
            'urun_adi'=>'Xiaomi Redmi Note 8',
            'slug'=>'xiaomi-redmiN8-telefon',
            'aciklama'=>'4GB/128GB Siyah Akıllı Telefon',
            'fiyati'=>'3.099',
            'url'=>'/img/telefon4.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        /* kilif kategorisi */
        $urun=Urun::create([
            'urun_adi'=>'Apple MX0H2ZM/A',
            'slug'=>'appleiphone-11-kilif',
            'aciklama'=>'iPhone 11 Pro Max Şeffaf Kılıf',
            'fiyati'=>'377.00',
            'url'=>'/img/kılıf1.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun= Urun::create([
            'urun_adi'=>'Huawei Y6',
            'slug'=>'huawei-y6-kilif',
            'aciklama'=>'2019 Şeffaf Telefon Kılıfı',
            'fiyati'=>'49.90',
            'url'=>'/img/kılıf2.png',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun=Urun::create([
            'urun_adi'=>'APPLE MWYY2ZM/A',
            'slug'=>'apple-11-kilif',
            'aciklama'=>'iPhone 11 Pro Max Silikon Kılıf - Kum Pembesih',
            'fiyati'=>'377.00',
            'url'=>'/img/kılıf3.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        /* laptop kategorisi */
        $urun= Urun::create([
            'urun_adi'=>'Lenovo Yoga C740 81TC000VTX',
            'slug'=>'lenova-yoga-laptop',
            'aciklama'=>'Intel i7-10510U',
            'fiyati'=>'10.999',
            'url'=>'/img/laptop2.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun= Urun::create([
            'urun_adi'=>'Apple 13-inch MacBook Pro',
            'slug'=>'apple-macPro-laptop',
            'aciklama'=>'2.0GHz quad-core 10th-generation Intel Core i5 processor, 512GB - Silver MWP72TU/A  ',
            'fiyati'=>'15.999',
            'url'=>'/img/laptop4.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun=Urun::create([
            'urun_adi'=>'Asus Gamebook FX506LU-HN053T',
            'slug'=>'asus-gamebookFX-laptop',
            'aciklama'=>'Intel i5-10300H 8GB Ram 1TB ve 256GB SSD GTX1660Ti 6GB 15.6" FHD W10 Gaming Notebook',
            'fiyati'=>'10.099',
            'url'=>'/img/laptop7.png',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        /* webcam kategorisi */
        $urun= Urun::create([
            'urun_adi'=>'Logitech C270 ',
            'slug'=>'logitechc270-webcam',
            'aciklama'=>'HD Webcam',
            'fiyati'=>'329.00',
            'url'=>'/img/webcam1.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);

        $urun=Urun::create([
            'urun_adi'=>'Logitech C310',
            'slug'=>'logitechc310-webcam',
            'aciklama'=>'Siyah HD Webcam',
            'fiyati'=>'379.00',
            'url'=>'/img/webcam2.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun=Urun::create([
            'urun_adi'=>'Logitech Brio',
            'slug'=>'logitech-brio-webcam',
            'aciklama'=>'4K Yayıncı Webcam -Siyah',
            'fiyati'=>'2.499',
            'url'=>'/img/webcam3.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        /* mouse kategorisi */
        $urun=Urun::create([
            'urun_adi'=>'Logitech M171',
            'slug'=>'logitechm171-mouse',
            'aciklama'=>'Kablosuz Mouse (Siyah)',
            'fiyati'=>'94.90',
            'url'=>'/img/mouse1.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun=Urun::create([
            'urun_adi'=>'HP V0L79AA',
            'slug'=>'hpv0l7-mouse',
            'aciklama'=>'Kablosuz Mouse (Siyah',
            'fiyati'=>'159.90',
            'url'=>'/img/mouse4.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun=Urun::create([
            'urun_adi'=>'Logitech M105',
            'slug'=>'logitechm105-mouse',
            'aciklama'=>'Kablolu Mouse (Mavi)',
            'fiyati'=>'69.00',
            'url'=>'/img/mouse3.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        /* kamera*/
        $urun=Urun::create([
            'urun_adi'=>'Canon Legria HF R806',
            'slug'=>'canon-legriahf-kamera',
            'aciklama'=>'Siyah Video Kamera',
            'fiyati'=>'1.999',
            'url'=>'/img/kamera1.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun= Urun::create([
            'urun_adi'=>'Sony A6000 16-50 mm',
            'slug'=>'sony-a60dijital-kamera',
            'aciklama'=>' Dijital Fotoğraf Makinesi',
            'fiyati'=>'5.999',
            'url'=>'/img/kamera2.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);
        $urun= Urun::create([
            'urun_adi'=>'Canon EOS 250D 18-55MM DC III ',
            'slug'=>'canon-eos-kamera',
            'aciklama'=>'Siyah Dijital Fotoğraf Makinesi',
            'fiyati'=>'5.299',
            'url'=>'/img/kamera3.jpg',
        ]);
        $detay=$urun->detay()->create([
            'goster_one_cikan'=>rand(0,1),
            'goster_cok_satan'=>rand(0,1),
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }
}

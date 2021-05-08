<?php

use Illuminate\Database\Seeder;
use App\Models\Urun;
class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
       Urun::truncate();
        /* kulaklik kategorisi */
        Urun::create([
            'urun_adi'=>'Huawei Freebuds 3',
            'slug'=>'huawei-freebuds-kulaklik',
            'aciklama'=>'Kulak içi Kablosuz Kulaklık,Siyah',
            'fiyati'=>'999.00',
        ]);
       Urun::create([
               'urun_adi'=>'Jbl T500BT Kulaklık',
               'slug'=>'jblT500BT-kulaklik',
               'aciklama'=>'Kulak Üstü Mikrofonlu Kablosuz Kulaklık,Mavi',
               'fiyati'=>'327.00',
           ]);
        Urun::create([
            'urun_adi'=>'JBL Reflect Flow',
            'slug'=>'jblrefect-flow-kulaklik',
            'aciklama'=>'True Wireless Kulaklık, Siyah',
            'fiyati'=>'1.299',
        ]);
        /* telefon kategorisi */
        Urun::create([
            'urun_adi'=>'Apple iPhone 12',
            'slug'=>'apple-iphone12-telefon',
            'aciklama'=>'64GB Blue Akıllı Telefon',
            'fiyati'=>'1.299',
        ]);
        Urun::create([
            'urun_adi'=>'Huawei P40 Lite ',
            'slug'=>'huawei-p40-lite-telefon',
            'aciklama'=>'28 GB Pembe Akıllı Telefon',
            'fiyati'=>'3.499',
        ]);
        Urun::create([
            'urun_adi'=>'Samsung Galaxy Note10 Lite Glow',
            'slug'=>'samsung-note10-glow-telefon',
            'aciklama'=>'Akıllı Telefon',
            'fiyati'=>'4.999',
        ]);
        Urun::create([
            'urun_adi'=>'Xiaomi Redmi Note 8',
            'slug'=>'xiaomi-redmiN8-telefon',
            'aciklama'=>'4GB/128GB Siyah Akıllı Telefon',
            'fiyati'=>'3.099',
        ]);
        Urun::create([
            'urun_adi'=>'SSamsung Galaxy Note10 Lite',
            'slug'=>'samsung-note10-lite-telefon',
            'aciklama'=>'Siyah Akıllı Telefon',
            'fiyati'=>'4.999',
        ]);
        /* kilif kategorisi */
        Urun::create([
            'urun_adi'=>'Apple MX0H2ZM/A',
            'slug'=>'appleiphone-11-kilif',
            'aciklama'=>'iPhone 11 Pro Max Şeffaf Kılıf',
            'fiyati'=>'377.00',
        ]);
        Urun::create([
            'urun_adi'=>'Huawei Y6',
            'slug'=>'huawei-y6-kilif',
            'aciklama'=>'2019 Şeffaf Telefon Kılıfı',
            'fiyati'=>'49.90',
        ]);
        Urun::create([
            'urun_adi'=>'APPLE MWYY2ZM/A',
            'slug'=>'apple-11-kilif',
            'aciklama'=>'iPhone 11 Pro Max Silikon Kılıf - Kum Pembesih',
            'fiyati'=>'377.00',
        ]);
        /* laptop kategorisi */
        Urun::create([
            'urun_adi'=>'Asus X543NA-GQ303T Celeron N3350',
            'slug'=>'asus-celeron-laptop',
            'aciklama'=>'Gri Notebook ',
            'fiyati'=>'2.799',
        ]);
        Urun::create([
            'urun_adi'=>'Lenovo Yoga C740 81TC000VTX',
            'slug'=>'lenova-yoga-laptop',
            'aciklama'=>'Intel i7-10510U',
            'fiyati'=>'10.999',
        ]);
        Urun::create([
            'urun_adi'=>'Monster Abra A7 V12.4.2',
            'slug'=>'monster-abra-laptop',
            'aciklama'=>'Intel Core I5 10200H ',
            'fiyati'=>'10.499',
        ]);
        Urun::create([
            'urun_adi'=>'Apple 13-inch MacBook Pro',
            'slug'=>'apple-macPro-laptop',
            'aciklama'=>'2.0GHz quad-core 10th-generation Intel Core i5 processor, 512GB - Silver MWP72TU/A  ',
            'fiyati'=>'15.999',
        ]);
        Urun::create([
            'urun_adi'=>'Casper Nirvana X400',
            'slug'=>'casper-nirvanaX4-laptop',
            'aciklama'=>'Intel Core i7-1065G7 12 GB RAM 500 NVME SSD Intel IRIS 14"Win 10 Pro Notebook,Siyah',
            'fiyati'=>'9.029',
        ]);
        Urun::create([
            'urun_adi'=>'HP 15S-FQ2038NT 2N2N6EA',
            'slug'=>'hp15s-laptop',
            'aciklama'=>'i3-1115G4 4GB Ram 256GB SSD 15.6" W10H Notebook ',
            'fiyati'=>'10.499',
        ]);
        Urun::create([
            'urun_adi'=>'Asus Gamebook FX506LU-HN053T',
            'slug'=>'asus-gamebookFX-laptop',
            'aciklama'=>'Intel i5-10300H 8GB Ram 1TB ve 256GB SSD GTX1660Ti 6GB 15.6" FHD W10 Gaming Notebook',
            'fiyati'=>'10.099',
        ]);
        /* webcam kategorisi */
        Urun::create([
            'urun_adi'=>'Logitech C270 ',
            'slug'=>'logitechc270-webcam',
            'aciklama'=>'HD Webcam',
            'fiyati'=>'329.00',
        ]);
        Urun::create([
            'urun_adi'=>'Logitech C310',
            'slug'=>'logitechc310-webcam',
            'aciklama'=>'Siyah HD Webcam',
            'fiyati'=>'379.00',
        ]);
        Urun::create([
            'urun_adi'=>'Logitech Brio',
            'slug'=>'logitech-brio-webcam',
            'aciklama'=>'4K Yayıncı Webcam -Siyah',
            'fiyati'=>'2.499',
        ]);
        /* mouse kategorisi */
        Urun::create([
            'urun_adi'=>'Logitech M171',
            'slug'=>'logitechm171-mouse',
            'aciklama'=>'Kablosuz Mouse (Siyah)',
            'fiyati'=>'94.90',
        ]);
        Urun::create([
            'urun_adi'=>'HP V0L79AA',
            'slug'=>'hpv0l7-mouse',
            'aciklama'=>'Kablosuz Mouse (Siyah',
            'fiyati'=>'159.90',
        ]);
        Urun::create([
            'urun_adi'=>'Logitech M105',
            'slug'=>'logitechm105-mouse',
            'aciklama'=>'Kablolu Mouse (Mavi)',
            'fiyati'=>'69.90',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->truncate();
        $id= DB::table('kategori')->insertGetId(['kategori_adi'=>'Aksesuar','slug'=>'aksesuar']);
        DB::table('kategori')->insert(['kategori_adi'=>'Kulaklık','slug'=>'kulaklik','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Mouse','slug'=>'mouse','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Telefon Kılıfı','slug'=>'telefon-kilifi','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Webcam','slug'=>'webcam','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Laptop','slug'=>'laptop']);
        DB::table('kategori')->insert(['kategori_adi'=>'Akıllı Telefon','slug'=>'akilli-telefon']);
        DB::table('kategori')->insert(['kategori_adi'=>'Fotoğraf Makinesi ve Kamera','slug'=>'kamera']);
    }
}

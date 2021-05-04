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
        DB::table('kategori')->insert(['kategori_adi'=>'Aksesuar','slug'=>'aksesuar']);
        DB::table('kategori')->insert(['kategori_adi'=>'Laptop','slug'=>'laptop']);
        DB::table('kategori')->insert(['kategori_adi'=>'Kamera','slug'=>'kamera']);
        DB::table('kategori')->insert(['kategori_adi'=>'Akıllı Telefon','slug'=>'akilli-telefon']);

    }
}

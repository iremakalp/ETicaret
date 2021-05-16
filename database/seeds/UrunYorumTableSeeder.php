<?php

use App\Models\UrunYorum;
use Illuminate\Database\Seeder;

class UrunYorumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $faker = Faker\Factory::create('tr_TR');

        for ($i = 0; $i < 30; $i++) {
            $yorum = UrunYorum::create([
                'urun_id'=>rand(1,20),
                'adsoyad'     => $faker->name,
                'yorum' => $faker->paragraph(2),
                'email'       => $faker->unique()->safeEmail,
                'olusturma_tarihi'=>$faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}

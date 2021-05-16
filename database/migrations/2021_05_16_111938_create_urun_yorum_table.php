<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrunYorumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun_yorum', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('urun_id')->unsigned();
            $table->string('adsoyad');
            $table->string('email', 150);
            $table->text('yorum');
            $table->timestamp( 'olusturma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp( 'guncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on
            UPDATE CURRENT_TIMESTAMP '));
            // $table->softDeletes();//deleted_at kolonu ekler
            $table->timestamp('silinme_tarihi')->nullable();

            $table->foreign('urun_id')->references('id')->on('urun')->onDeelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urun_yorum');
    }
}

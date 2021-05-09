<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrunDetay extends Model
{
    protected $table='urun_detay';
    public $timestamps=false; //tarih kullanmamak icin


    public function urun()
    {
        return $this->belongsTo('App\Models\UrunDetay');
    }
}

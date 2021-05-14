<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriUrun extends Model
{
    protected $table = "kategori_urun";
    public $timestamps = false;
    protected $guarded = [];

    public function Kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }
    public function Urun()
    {
        return $this->belongsTo('App\Models\Urun');
    }
}

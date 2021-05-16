<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Urun extends Model
{
    use SoftDeletes;//veritabanında silinme_tarihi guncellenir

    protected $table="urun";

    protected $guarded=[]; //tum kolonlar eklenebilir hale gelir

    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT='silinme_tarihi';

    public function kategoriler()
    {
        return $this->belongsToMany('App\Models\Kategori','kategori_urun');

    }
    public function yorumlar()
    {
        return $this->belongsToMany('App\Models\UrunYorum', 'urun_yorum');
    }
    public function detay()
    {
        return $this->hasOne('App\Models\UrunDetay')->withDefault();
    }

}

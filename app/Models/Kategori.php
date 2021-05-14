<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;//veritabanında silinme_tarihi guncellenir

    protected $table="kategori";
// protected $fillable=['kategori_adi','slug']; //eklenebilir hale getirme
    protected $guarded=[]; //tum kolonlar eklenebilir hale gelir
   const CREATED_AT = 'olusturma_tarihi';
   const UPDATED_AT = 'guncelleme_tarihi';
   const DELETED_AT='silinme_tarihi';

   public function urunler()
   {
       return $this->belongsToMany('App\Models\Urun','kategori_urun');

   }
    public function alt_kategoriler()
    {
        return $this->hasMany('App\Models\Kategori', 'ust_id', 'id');
    }

    public function ust_kategori() {
        return $this->belongsTo('App\Models\Kategori', 'ust_id')->withDefault([
            'kategori_adi' => 'Ana Kategori'
        ]);
    }
    public function KategoriUrun()
    {
        return $this->hasOne('App\Models\KategoriUrun')->withDefault();
    }
}

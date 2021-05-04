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
}

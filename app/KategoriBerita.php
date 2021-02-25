<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $table = 'kategori_berita';

    protected $fillable = [
        'nama','users_id'
    ];
    public function berita(){
        return $this->hasMany( \App\Artikel::class, 'kategori_berita_id', 'id');
    }
    public function User()
    {
        return $this->belongsTo( \App\User::class, 'users_id', 'id');
    }
}

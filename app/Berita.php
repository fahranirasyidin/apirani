<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'judul','isi','users_id','kategori_artikel_id'
    ];
    public function kategoriBerita()
    {
        return $this->belongsTo( \App\KategoriArtikel::class, 'kategori_berita_id', 'id');
    }
    public function User()
    {
        return $this->belongsTo( \App\User::class, 'users_id', 'id');
    }
}

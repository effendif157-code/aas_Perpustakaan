<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori_buku';
protected $fillable = ['nama_kategori'];


public function buku()
{
return $this->hasMany(Buku::class, 'kategori_id');
} 
}

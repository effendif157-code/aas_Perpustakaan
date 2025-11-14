<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peminjamanDetail extends Model
{
    protected $fillable = ['peminjaman_id','buku_id','jumlah'];


public function peminjaman()
{
return $this->belongsTo(Peminjaman::class, 'peminjaman_id');
}


public function buku()
{
return $this->belongsTo(Buku::class, 'buku_id');
}
}

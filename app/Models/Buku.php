<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table    = 'buku';
    protected $fillable = ['judul', 'stok', 'tahun', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class, 'kategori_id');
    }

    public function pengarang()
    {
        return $this->belongsToMany(Pengarang::class, 'buku_pengarang', 'buku_id', 'pengarang_id');
    }

    public function peminjaman()
    {
        return $this->belongsToMany(Peminjaman::class, 'peminjaman_detail', 'buku_id', 'peminjaman_id')->withPivot('jumlah');
    }
}

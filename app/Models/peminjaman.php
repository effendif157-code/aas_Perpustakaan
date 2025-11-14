<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = 'peminjaman';
protected $fillable = ['kode_pinjam','nama_peminjam','tanggal_pinjam','tanggal_kembali'];


public function detail()
{
return $this->hasMany(PeminjamanDetail::class, 'peminjaman_id');
}


public function buku()
{
return $this->belongsToMany(Buku::class, 'peminjaman_detail')
->withPivot(['jumlah']);
}
}

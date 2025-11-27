@extends('layouts.dahsboard')

@section('content')
<style>
/* 🎨 Tema UI Modern */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

body {
    background: linear-gradient(135deg, #eef3f9 0%, #f9fbfd 100%);
    font-family: 'Inter', sans-serif;
}
.card {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    padding: 30px;
    margin-top: 30px;
}
.card h3 {
    color: #0066ff;
    font-weight: 700;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
}
.card h3::before {
    content: "📖";
    margin-right: 10px;
}
.label {
    font-weight: 600;
    color: #333;
}
.value {
    background: #f8fafc;
    padding: 10px 15px;
    border-radius: 8px;
    margin-bottom: 15px;
    border: 1px solid #e3e7ef;
}
.btn-secondary {
    background: #f3f5f9;
    color: #333;
    border: none;
    border-radius: 8px;
    padding: 10px 20px;
    font-weight: 600;
    transition: .3s;
}
.btn-secondary:hover {
    background: #e1e5ec;
}
</style>

<div class="container">
    <div class="card">
        <h3>Detail Buku</h3>

        <div class="mb-3">
            <div class="label">Judul Buku</div>
            <div class="value">{{ $buku->judul }}</div>
        </div>

        <div class="mb-3">
            <div class="label">Kategori</div>
            <div class="value">{{ $buku->kategori->nama_kategori ?? '-' }}</div>
        </div>

        <div class="mb-3">
            <div class="label">Tahun</div>
            <div class="value">{{ $buku->tahun }}</div>
        </div>

        <div class="mb-3">
            <div class="label">Stok</div>
            <div class="value">{{ $buku->stok }}</div>
        </div>

        <div class="mb-3">
            <div class="label">Pengarang</div>
            <div class="value">
                @foreach ($buku->pengarangs as $p)
                    <span style="background:#e8f0ff;color:#004ecc;padding:6px 10px;border-radius:6px;margin-right:5px;">
                        {{ $p->nama_pengarang }}
                    </span>
                @endforeach
            </div>
        </div>

        <a href="{{ route('buku.index') }}" class="btn-secondary">⬅ Kembali</a>
    </div>
</div>

@endsection
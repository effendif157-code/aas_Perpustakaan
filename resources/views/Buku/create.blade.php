@extends('layouts.dahsboard')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Tambah Buku Baru</h3>

    {{-- Notifikasi Error --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan:</strong>
        <ul class="mb-0">
            @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow-sm">
       <div class="col-md-12">
                  <div class="card-body">
            <form action="{{ route('buku.store') }}" method="POST">
                @csrf

                {{-- Pilih Pelanggan --}}
                <div class="mb-3">
                    <label for="kategori_id" class="form-label">Kategori</label>
                    <select name="kategori_id" class="form-select">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($kategoris as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                        @endforeach
                    </select>


                </div>

                <hr>

                <h5>Daftar Buku</h5>

                {{-- Wrapper Produk --}}
                  <div class="mb-3">
                      <label for="">Judul Buku</label>
                      <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror">
                      @error('judul')
                      <span class="invalid-feedback" role="alert">
                          <strong> {{ $message }} </strong>
                      </span>
                      @enderror
                  </div>



                <div id="produk-wrapper">
                    <div class="row produk-item mb-3">
                        <div class="col-md-12">
                            <label for="pengarang_id" class="form-label">Pengarang </label>
                                <select name="pengarang_id[]" id="pengarang_id" class="form-select" jsmultiple multiple>
                                <option value="">-- Pilih Pengarang --</option>
                                @foreach ($pengarangs as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama_pengarang  }}</option>
                                @endforeach
                            </select>

                        </div>

                         <div class="mb-3">
                             <label for="">Stok</label>
                             <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror">
                             @error('stok')
                             <span class="invalid-feedback" role="alert">
                                 <strong> {{ $message }} </strong>
                             </span>
                             @enderror
                         </div>

                          <div class="mb-3">
                              <label for="">Tahun Terbit</label>
                              <input type="year" name="tahun" class="form-control @error('tahun') is-invalid @enderror">
                              @error('tahun')
                              <span class="invalid-feedback" role="alert">
                                  <strong> {{ $message }} </strong>
                              </span>
                              @enderror
                          </div>


                <div class="text-end">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan Transaksi</button>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

<script>
document.addEventListener("DOMContentLoaded", function () {
    const selects = document.querySelectorAll("select[jsmultiple]");

    selects.forEach(sel => {
        new Choices(sel, {
            removeItemButton: true,
            searchPlaceholderValue: "Cari pengarang...",
            placeholder: true,
        });
    });
});
</script>
@endpush
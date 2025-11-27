@extends('layouts.dahsboard')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm border-0">
        <div class="card-header  d-flex justify-content-between align-items-center" style="background: #1e3a8a">
            <div class="float-start">
                     Pengarang
                    </div>
            <a href="{{ route('pengarang.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>

        <div class="card-body">
          <div class="table-responsive text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama pengarang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pengarangs as $index => $pengarang)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{$pengarang->nama_pengarang }}</td>
                        <td class="text-center">
                            <form action="{{ route('pengarang.destroy', $pengarang->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('pengarang.show', $pengarang->id) }}"
                                                class="btn btn-sm btn-primary">Show</a> |
                                            <a href="{{ route('pengarang.edit', $pengarang->id) }}"
                                                class="btn btn-sm btn-success">Edit</a> |
                                            <button type="submit" onsubmit="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">Belum ada data pengarang.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
@endsection
<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    public function index()
    {
        $buku = Buku::latest()->paginate(5);
        return view('buku.index', compact('buku'));
    }


    public function create()
    {
        return view('buku.create');
    }


    public function store(Request $request)
    {
        //validate form
        $validated = $request->validate([
            'nama_kategori' => 'required|min:5',
        ]);

        $buku              = new Buku();
        $buku->nama_kategori = $request->nama_kategori;

        $buku->save();
        return redirect()->route('buku.index');
    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|min:5',
        ]);

        $buku              = Buku::findOrFail($id);
        $buku->nama_kategori = $request->nama_kategori;
       
        $buku->save();
        return redirect()->route('buku.index');

    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index');

    }
}

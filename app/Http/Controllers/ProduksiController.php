<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function index()
    {
        $produksis = produksi::latest()->paginate(5);
        return view('produksis.index', compact('produksis'));

    }

    public function create()
    {
        return view('produksis.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' =>  'required',
            'komoditas_kode' =>'required',
            'produksi' => 'required'
        ]);

        produksi::create($request->all());

        return redirect()->route('produksis.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(produksi $produksi)
    {
        return view('produksis.show',compact('produksi'));    }

    public function edit(produksi $produksi)
    {
        return view('produksis.edit', compact('produksi'));
    }

    public function update(Request $request, produksi $produksi)
    {
        //validate form
        $request->validate([
            'tanggal' =>  'required',
            'produksis_kode' =>'required',
            'produksi' => 'required'
        ]);

        $produksi->update($request->all());

        //redirect to index
        return redirect()->route('produksis.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(produksi $produksis)
    {
        //delete produksis
        $produksis->delete();

        //redirect to index
        return redirect()->route('produksis.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

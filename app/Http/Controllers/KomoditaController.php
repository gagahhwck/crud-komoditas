<?php

namespace App\Http\Controllers;

use App\Models\Komodita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class KomoditaController extends Controller
{
    public function index()
    {
        $komoditas = Komodita::latest()->paginate(5);
        return view('komoditas.index', compact('komoditas'));
    }

    public function create()
    {
        return view('komoditas.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'komoditas_kode' => 'required',
            'komoditas_nama' => 'required'
        ]);

        Komodita::create($request->all());

        return redirect()->route('komoditas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(Komodita $komodita)
    {
        // dd($komodita);
        return view('komoditas.show', compact('komodita'));
    }

    public function edit(Komodita $komodita)
    {
        return view('komoditas.edit', compact('komodita'));
    }

    public function update(Request $request, Komodita $komoditas)
    {
        //validate form
        $validate = $request->validate([
            'komoditas_kode' => 'required',
            'komoditas_nama' => 'required'
        ]);

        $komoditas->update($validate);
        //redirect to index
        return redirect()->route('komoditas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Komodita $komoditas)
    {
        //delete komoditas
        $komoditas->delete();

        //redirect to index
        return redirect()->route('komoditas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

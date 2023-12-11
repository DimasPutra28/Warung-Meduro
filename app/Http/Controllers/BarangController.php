<?php

namespace App\Http\Controllers;


use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function indexbrg()
    {
        $barang = Barang::all();
        return view('admin.barang', compact('barang'));
    }



    // public function create()
    // {
    //     return view('admin.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function storebrg(Request $request)
    {


        $validatedData = $request->validate([
            'gambar' => 'image|file',
            'nama' => 'required',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'stok' => 'required|integer',
            'berat' => 'required',
            'produksi' => 'required|date',
            'expired' => 'required|date',
            'status' => 'required',
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('gambar');
        }

        Barang::create($validatedData);
        return redirect('/adminbarang')->with('success', 'Barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $barang = Barang::find($id);
        // // dd($kategori);
        // return view('admin.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatebrg($id, Request $request)
    {
        $barang = Barang::where('id', $request->id)->first();

        $rules = [
            'gambar' => 'image|file',
            'nama' => 'required',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'stok' => 'required|integer',
            'berat' => 'required',
            'produksi' => 'required|date',
            'expired' => 'required|date',
            'status' => 'required',
        ];

    $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete([$request->oldImage]);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('gambar');
        }

        $barang->update($validatedData);
        return redirect('/adminbarang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hpsbrg(string $id)
    {
        $barang = Barang::find($id);

        if ($barang->gambar) {
            Storage::delete($barang->gambar);
        }

        Barang::destroy($barang->id);
        $barang->delete();
        return redirect('/adminbarang');
    }
}

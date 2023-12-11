<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori',compact(['kategori']));
    }
    // public function idx()
    // {
    //     $categori = Kategori::all();
    //     dd($categori);
    //     return view('home.shop', [
    //         'kategori' => $categori
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori' => 'required',
            'status' => 'required',
        ]);


        Kategori::create($validatedData);
        return redirect('/kategori')->with('success', 'Barang berhasil ditambahkan');
    }



    /**
     * Show the form for editing the specified resource.
     */



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = Kategori::find($id);
        $kategori->update($request->except(['_token','submit']));
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('/admin');

    }
}

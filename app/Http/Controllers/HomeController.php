<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detailtransaksi;

class HomeController extends Controller
{
    //dashboard admin
    public function index(){
        return view('admin.dashboard');
    }


    //riwayat admin
    public function history(){

        $barang = Barang::all();
        $kategori = Kategori::all();
        return view('admin.riwayat', compact('barang','kategori'));
    }

    //dashboardhome
    public function home(){
        $kategori = Kategori::all();
        return view('home.index',compact('kategori'));
    }

    //shop
    public function shop(){
        $kategori = Kategori::all();
        $barang = Barang::all();
        return view('home.shop',compact('kategori','barang'));
    }

    public function createTransaksi(Request $request)
    {
        // Validasi input dari form atau request
        $request->validate([
            // Sesuaikan dengan field yang dibutuhkan untuk transaksi
            'id_pelanggan' => 'required|exists:datadiri,id',
            'tgl_pesan' => 'required|date',
            'catatan' => 'nullable|string',
            // ...tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Buat transaksi baru
        $transaksi = new Transaksi();
        $transaksi->no_pesan = 'Pesan-' . time(); // Nomor pesanan bisa di-generate sesuai kebutuhan
        $transaksi->id_pelanggan = $request->id_pelanggan;
        $transaksi->tgl_pesan = $request->tgl_pesan;
        $transaksi->catatan = $request->catatan;
        // ...tambahkan field lainnya
        $transaksi->save();

        // Proses detail transaksi
        foreach ($request->barang as $barangId => $qty) {
            // Validasi barang
            $barang = Barang::find($barangId);
            if (!$barang) {
                // Barang tidak ditemukan
                return response()->json(['message' => 'Barang tidak valid'], 404);
            }

            // Buat detail transaksi
            $detailTransaksi = new Detailtransaksi();
            $detailTransaksi->no_transaksi = $transaksi->no_pesan; // Sesuaikan dengan field yang sesuai
            $detailTransaksi->id_snack = $barangId;
            $detailTransaksi->qty = $qty;
            $detailTransaksi->save();
        }

        return response()->json(['message' => 'Transaksi berhasil'], 200);
    }

    public function showTransaksi($id)
    {
        // Ambil data transaksi berdasarkan ID
        $transaksi = Transaksi::find($id);
        if (!$transaksi) {
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        // Ambil detail transaksi
        $detailTransaksi = Detailtransaksi::where('no_transaksi', $transaksi->no_pesan)->get();

        // Tampilkan view dengan data transaksi dan detail transaksi
        return view('transaksi.show', compact('transaksi', 'detailTransaksi'));
    }




}

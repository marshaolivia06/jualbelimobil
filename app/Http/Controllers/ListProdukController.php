<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    // Tampilkan Produk
    public function show()
    {
    $data = Produk::all(); // ambil semua produk
    return view('list_produk', compact('data')); // kirim langsung semua data produk
    }
    // Simpan Produk
    public function simpan(Request $request)
    {
        $produk = new Produk;
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    // Delete
    public function delete($id){

        $produk = Produk::where('id', $id)->first();
        if ($produk) {
            $produk->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus. ');
        }else{
            return redirect()->back()->with('error', 'Produk tidak ditemukan. ');
        }
    }
    // Tampilkan form edit
    public function edit($id)
    {
    $produk = Produk::find($id);

    if (!$produk) {
        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }

    return view('edit_produk', compact('produk'));
    }

    // Simpan hasil update
    public function update(Request $request, $id)
    {
    $produk = Produk::find($id);

    if (!$produk) {
        return redirect()->back()->with('error', 'Produk tidak ditemukan.');
    }

    $produk->nama = $request->input('nama');
    $produk->deskripsi = $request->input('deskripsi');
    $produk->harga = $request->input('harga');
    $produk->save();

    return redirect('/listproduk')->with('success', 'Produk berhasil diperbarui.');
    }
}

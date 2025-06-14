<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;

});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';

    });

    Route::get('/users', function () {
        return 'Admin Users';

    });
});

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//   return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemListController;
use App\Http\controllers\ContactUsController;
use App\Http\controllers\ProductController;
use App\Http\controllers\AboutController;
use App\Http\Controllers\ListProdukController;

Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/items', [ItemListController::class, 'index']);
Route::get('/contact_us', [ContactUsController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/produk', [ProductController::class, 'index']);

Route::get('/home', function () {
    return view('pages/home');

});

Route::get('/listproduk', [ListProdukController::class, 'show'] );
// Simpan Produk
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
// Delete
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');
// Form edit
Route::get('/listproduk/{id}/edit', [ListProdukController::class, 'edit'])->name('produk.edit');

// Simpan hasil edit
Route::put('/listproduk/{id}', [ListProdukController::class, 'update'])->name('produk.update');

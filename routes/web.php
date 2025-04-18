<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
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

Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/items', [ItemListController::class, 'index']);
Route::get('/contact_us', [ContactUsController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/produk', [ProductController::class, 'index']);

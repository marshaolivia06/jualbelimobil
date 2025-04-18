<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function index()
    {
        // Data dummy
        $data = [
            ['id' => 1, 'produk' => 'Mobil HR-V'],
            ['id' => 2, 'produk' => 'Mobil Civic Type-R'],
            ['id' => 3, 'produk' => 'Honda Mobilio']
        ];

        // Kirim data ke view list_product
        return view('list_product', ['data' => $data]);
    }
}



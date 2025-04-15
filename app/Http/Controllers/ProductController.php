<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'Kaos Laravel', 'price' => 150000, 'jenis'=> 'barang','merek' => 'olegan', 'material' => 'kalum'],
        2 => ['name' => 'Stiker Coding', 'price' => 250000, 'jenis' => 'barang', 'merek' => 'olegan', 'material' => 'katuban'],
        3 => ['name' => 'NoteBook Dev', 'price' => 50000,'jenis' => 'barang', 'merek' => 'olegan', 'material' => 'kerastul'], 
    ];

    // menampilkan daftar produk
    public function index()
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $products = $this->products[$id];
        return view('products.detail', compact('products'));
    }

}

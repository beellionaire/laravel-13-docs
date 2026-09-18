<?php

namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function index()
    {
        $name = "Iphone Duo";
        $price = "30.000.000";

        // menggunakan compact
        // return view('products.index', compact('name', 'price')); 

        // menggunakan with
        // return view('products.index')->with('name', $name)->with('price', $price); 

        // menggunakan array
        return view('products.index', [
            'name' => 'iphone duo 1tb',
            'price' => '123.000.000'
        ]);
    }
}

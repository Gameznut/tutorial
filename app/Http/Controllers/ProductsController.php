<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        // $title = 'Welcome to my page';
        // $descript = 3;
        
        // $data = [
        //     'productOne' => 'iphone',
        //     'productTwo' => 'samsung'
        // ];
        
        // compact method
        // return view('products.products', compact('title', 'descript'));

        // with method
        // return view('products.products')->with(['title' =>  $title]);
        // return view('products.products')->with('title', $title);
        // return view('products.products')->with('title', $title);
        // return view('products.products')->with('data', $data);

    }

    public function show($id)
    {
        # code...dd
        dd($id);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('index');
    }

    public function about()
    {
        # code...
        $name = 'jon';
        $data = [
            'productOne' => 'iphone',
            'productTwo' => 'samsung'
        ];
        return view('about')->with('data', $data);
    }
}

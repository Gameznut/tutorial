<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $id = 7;

        $post = DB::table('posts')->where('created_at', '<', now())->get();
        dd($post);
    }
}

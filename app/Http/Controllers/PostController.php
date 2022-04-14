<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            "blog" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Isi dari semua post",
            "post" => Post::find($slug)
        ]);
    }
}

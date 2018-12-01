<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function mail(){
        $title='mail';
        return view('posts.index', compact('title'));
    }
}

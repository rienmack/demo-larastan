<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id, $foo)
    {
        Post::class;
        dd(foo);
        if ($id == 1) {
            return 'Post 1';
        } else {
            return 'Post 2';
        }
    }
}

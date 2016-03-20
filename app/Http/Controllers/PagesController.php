<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::all()->reverse()->take(2); // Take 3 most recent posts
        return view('pages.index', compact('posts'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
    
    public function pictures()
    {
        return view('pages.pictures');
    }

    public function reserve()
    {
        return view('pages.reserve');
    }

    public function rooms()
    {
        return view('pages.rooms');
    }
}

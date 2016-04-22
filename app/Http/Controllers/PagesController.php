<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function ajaxNewsRequest() {
        return Post::all()->reverse()->take(2); // Take 2 most recent posts
    }

    public function back(){
        return back();
    }
    
    public function home()
    {
        $posts = $this->ajaxNewsRequest();
        return view('pages.index', compact('posts'));
    }


    // Get all posts for the post page
    public function posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->simplePaginate(4);
        return view('pages.news', compact('posts'));
    }

    // Get post by the id
    public function post($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.singlePost', compact('post'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function pictures()
    {
        return view('pages.pictures');
    }

    public function pastime()
    {
        return view('pages.pastime');
    }

    public function bar()
    {
        return view('pages.bar');
    }

    public function beach()
    {
        return view('pages.beach');
    }

    public function rooms()
    {
        return view('pages.rooms');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        if (Auth::guest()) {
            return view('auth.login');
        }
        return view('auth.register');
    }

    public function reset()
    {
        return view('auth.passwords.reset');
    }
}

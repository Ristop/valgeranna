<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::guest()){
            return view('auth.login');
        }
        return view('admin-pages.register');
    }

    public function reset()
    {
        return view('auth.passwords.reset');
    }

}

<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::all()->reverse()->take(3);
        return view('pages.index', compact('posts'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function posts()
    {
        $posts = Post::all();
        return view('pages.news', compact('posts'));
    }

    public function post($id)
    {
        $post = Post::all()->get($id-1);
        return view('pages.singlePost', compact('post'));
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

    public function adminNewPost()
    {
        $posts = Post::all();
        return view('admin-pages.admin-new-post', compact('posts'));
    }

    public function addNewPost(Request $request){
        $added_notification = true;
        Post::create(['content' => $request->content, 'title'=>$request->title]);
        return back();
    }

    public function deletePost(Request $request){
        Post::destroy($request->id);
        return back();
    }
}

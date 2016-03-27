<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    // Get all posts for the post page
    public function posts()
    {
        //$posts = Post::all();
        $posts = DB::select(DB::raw("SELECT * FROM posts"));
        return view('pages.news', compact('posts'));
    }

    // Get post by the id
    public function post($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.singlePost', compact('post'));
    }

    // Get all posts for the admin page
    public function adminNewPost()
    {
        if (Auth::guest()){
            return view('auth.login');
        }
        $posts = Post::with('user')->get();

        return view('admin-pages.admin-new-post', compact('posts'));
    }

    // Add new post on the admin page
    public function addNewPost(Request $request){
        if (Auth::guest()){
            return view('auth.login');
        }
        $this->validate($request, [
            'title' => 'required|min:10',
            'content' => 'required|min:10'
        ]);


/*      SQL:
        DB::table('posts') -> insert(
            array('user_id' => Auth::id(),
                'title' => $request-> title,
                'content' => $request -> content)
        );*/

        $post = new Post($request->all());
        $post->by(Auth::user());
        $post->save();


        //Post::create(['content' => $request->content, 'title'=>$request->title]);
        return back();
    }

    public function editPost(Request $request, $id) {
        if (Auth::guest()){
            return view('auth.login');
        }
        $post = Post::find($id);
        $post->content = $request->content;
        $post->save();
        return back();
    }

    // Delete post
    public function deletePost(Request $request){
        if (Auth::guest()){
            return view('auth.login');
        }

        Post::destroy($request->id);
        return back();
    }

}

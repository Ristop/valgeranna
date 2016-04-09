<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/*
 * Controller for the administrator panel, all pages that are related to admin panel go through this controller, that
 * includes all POST and GET requests for deleting, adding and modifying the page data.
 * */
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); // User needs to be authenticated in order to see admin panel
    }

    // Get all posts for the admin page
    public function adminPosts(){
        $posts = Post::with('user')->get();
        return view('admin.posts', compact('posts'));
    }

    // Add new post on the admin page
    public function adminAddPost(Request $request){
        $this->validate($request, [
            'title' => 'required|min:10',
            'content' => 'required|min:10'
        ]);

        $user = Auth::id();
        $title = $request->title;
        $content = $request->content;
        $current_time = Carbon::now();
        $current = $current_time -> toDateTimeString();
        DB::insert('insert into `posts` (user_id, title, content, created_at, updated_at) values (?,?,?,?,?)',[$user, $title, $content, $current, $current]);

        // Replace previous with this after the course is over
        /*$post = new Post($request->all());
        $post->by(Auth::user());
        $post->save();*/
        //Post::create(['content' => $request->content, 'title'=>$request->title]);
        return back();
    }
    //Edit post
    public function adminEditPost(Request $request) {
        $post = Post::find($request->id);
        $post->content = $request->content;
        $post->save();
        return back();
    }

    // Delete post
    public function adminDeletePost(Request $request){
        Post::destroy($request->id);
        return back();
    }

}

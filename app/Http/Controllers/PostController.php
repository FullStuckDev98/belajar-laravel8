<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "All Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post){
        // $new_post = [];
    // foreach($blog_post as $post){
    //     ($post['slug'] === $slug) ? $new_post = $post : [];
    // }
        return view('post',[
            "title"=> "Blog",
            "post" =>$post
        ]);
    }
}

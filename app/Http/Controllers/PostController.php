<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('blog', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function show($slug){
        // $new_post = [];
    // foreach($blog_post as $post){
    //     ($post['slug'] === $slug) ? $new_post = $post : [];
    // }
        return view('post',[
            "title"=> "<Postingan> </Postingan>",
            "post" =>Post::find($slug)
        ]);
    }
}

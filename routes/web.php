<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Coba Laravel",
        "bio" => "Nothing"
    ]);
});



Route::get('/blog', function () {
    $blog_post = [
    ["title" => "Judul Postingan",
    "slug" => "judul-post-pertama",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem debitis ipsam hic ipsa eligendi doloremque est reiciendis provident, rerum facere sint labore magni veritatis sed repellat? Sint dolorem vel eligendi ipsam architecto eos. Nulla sapiente laborum ratione placeat expedita voluptas deleniti cumque labore, delectus aspernatur reprehenderit modi eligendi provident beatae voluptatem et aliquid vel praesentium, consectetur, officia ipsa ab. Aliquid aliquam perferendis eius ea in expedita delectus. Eaque architecto commodi fugiat distinctio nulla alias, earum, possimus vero eum unde veniam."],
    ["title" => "Judul Postingan 2",
    "slug" => "judul-post-kedua",
    "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor doloremque est blanditiis deleniti maiores aperiam repellat pariatur, voluptates eius earum fugiat omnis quis quidem qui molestias placeat esse! Quaerat, unde dolore quis aliquam repellat, vero quae laborum debitis temporibus beatae accusamus animi cupiditate illo culpa, ea quisquam asperiores qui modi iure eos nihil expedita cumque? Odio voluptate qui ratione ea quo quisquam amet incidunt excepturi! Facere explicabo perspiciatis at earum maiores libero reiciendis ab sequi accusantium. Aspernatur quos, beatae qui doloremque dolor excepturi laboriosam eos esse quis aliquam at obcaecati iure repellat reprehenderit minus inventore quibusdam odit harum distinctio soluta."]
];
    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_post
    ]);
}); 

// halaman single post

Route::get('posts/{slug}', function($slug){
    $blog_post = [
        ["title" => "Judul Postingan",
        "slug" => "judul-post-pertama",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem debitis ipsam hic ipsa eligendi doloremque est reiciendis provident, rerum facere sint labore magni veritatis sed repellat? Sint dolorem vel eligendi ipsam architecto eos. Nulla sapiente laborum ratione placeat expedita voluptas deleniti cumque labore, delectus aspernatur reprehenderit modi eligendi provident beatae voluptatem et aliquid vel praesentium, consectetur, officia ipsa ab. Aliquid aliquam perferendis eius ea in expedita delectus. Eaque architecto commodi fugiat distinctio nulla alias, earum, possimus vero eum unde veniam."],
        ["title" => "Judul Postingan 2",
        "slug" => "judul-post-kedua",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor doloremque est blanditiis deleniti maiores aperiam repellat pariatur, voluptates eius earum fugiat omnis quis quidem qui molestias placeat esse! Quaerat, unde dolore quis aliquam repellat, vero quae laborum debitis temporibus beatae accusamus animi cupiditate illo culpa, ea quisquam asperiores qui modi iure eos nihil expedita cumque? Odio voluptate qui ratione ea quo quisquam amet incidunt excepturi! Facere explicabo perspiciatis at earum maiores libero reiciendis ab sequi accusantium. Aspernatur quos, beatae qui doloremque dolor excepturi laboriosam eos esse quis aliquam at obcaecati iure repellat reprehenderit minus inventore quibusdam odit harum distinctio soluta."]
    ];
    $new_post = [];
    foreach($blog_post as $post){
        ($post['slug'] === $slug) ? $new_post = $post : [];
    }
    return view('post',[
        "title"=> "<Postingan> </Postingan>",
        "post" =>$new_post
    ]);
});
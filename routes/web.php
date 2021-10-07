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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Riksa Kusumah Nagara",
        "email" => "193040078.mail.unpas.ac.id",
        "image" => "profile.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Petama",
            "slug" => "judul-post-pertama",
            "author" => "Riksa Kusumah Nagara",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, veritatis explicabo? Sed nostrum cum beatae sunt porro? Illum nobis beatae exercitationem inventore dicta, modi cumque incidunt quibusdam nam! Excepturi quidem culpa quia quibusdam, reiciendis officiis animi non totam delectus asperiores placeat quasi facilis minima tenetur dolor provident cum! Odit debitis aliquam corrupti voluptatem veniam enim placeat at reprehenderit a? Cum facere quas itaque, nam nisi qui nemo sit deserunt odio repellendus accusantium deleniti incidunt corrupti exercitationem perferendis modi vitae distinctio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ardan Herdiansyah",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit facilis excepturi accusantium tempore. Vero corporis dignissimos incidunt sed deserunt, fugit ratione facere, doloremque quasi aut eveniet saepe dolor voluptas vel maxime, iusto ipsam temporibus voluptatem quisquam ipsa deleniti. Provident maxime dolore, quo optio recusandae doloribus quam fuga sit dicta, voluptatum consequuntur qui voluptatem iusto tempore excepturi officiis dolorum explicabo distinctio, id veniam voluptatibus nobis sequi animi soluta. Hic molestiae, optio nobis tempora provident minima? Sint molestias, ipsa libero perferendis commodi, pariatur dolor maiores vitae ab quae velit, nisi tempore omnis placeat dicta similique? Placeat aliquid optio non asperiores, fugit voluptate."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Petama",
            "slug" => "judul-post-pertama",
            "author" => "Riksa Kusumah Nagara",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, veritatis explicabo? Sed nostrum cum beatae sunt porro? Illum nobis beatae exercitationem inventore dicta, modi cumque incidunt quibusdam nam! Excepturi quidem culpa quia quibusdam, reiciendis officiis animi non totam delectus asperiores placeat quasi facilis minima tenetur dolor provident cum! Odit debitis aliquam corrupti voluptatem veniam enim placeat at reprehenderit a? Cum facere quas itaque, nam nisi qui nemo sit deserunt odio repellendus accusantium deleniti incidunt corrupti exercitationem perferendis modi vitae distinctio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ardan Herdiansyah",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit facilis excepturi accusantium tempore. Vero corporis dignissimos incidunt sed deserunt, fugit ratione facere, doloremque quasi aut eveniet saepe dolor voluptas vel maxime, iusto ipsam temporibus voluptatem quisquam ipsa deleniti. Provident maxime dolore, quo optio recusandae doloribus quam fuga sit dicta, voluptatum consequuntur qui voluptatem iusto tempore excepturi officiis dolorum explicabo distinctio, id veniam voluptatibus nobis sequi animi soluta. Hic molestiae, optio nobis tempora provident minima? Sint molestias, ipsa libero perferendis commodi, pariatur dolor maiores vitae ab quae velit, nisi tempore omnis placeat dicta similique? Placeat aliquid optio non asperiores, fugit voluptate."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] == $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
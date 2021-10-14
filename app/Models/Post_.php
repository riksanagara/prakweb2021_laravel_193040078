<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] == $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }

    
}

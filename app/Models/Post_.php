<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class Post
{
    private static $blog_blog = [
        [
            "title" => "Judul Post",
            "slug" => "judul-post",
            "author" => "Kiki",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti minima vero dolores maiores unde temporibus mollitia autem. Facilis nemo illum neque enim doloribus quis sunt quos alias accusamus at cum, cupiditate commodi officia optio ad! Qui, dolor. Tenetur voluptatem, quam, odio magni magnam nisi error nobis aspernatur debitis repellat dolore veniam eum ipsa quae incidunt aliquid facere temporibus laboriosam odit nihil? Aliquam vel voluptatibus sit enim. Libero ut alias, iure expedita veritatis qui nam accusamus, omnis consequuntur nostrum, at deleniti."

        ],
        [

            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kiki dua",
            "body" => "Lorem ipsum, dolor sit amet asetn aksna sakawbb asbdab asbsdhabs asda sda sadadasdad consectetur adipisicing elit. Corrupti minima vero dolores maiores unde temporibus mollitia autem. Facilis nemo illum neque enim doloribus quis sunt quos alias accusamus at cum, cupiditate commodi officia optio ad! Qui, dolor. Tenetur voluptatem, quam, odio magni magnam nisi error nobis aspernatur debitis repellat dolore veniam eum ipsa quae incidunt aliquid facere temporibus laboriosam odit nihil? Aliquam vel voluptatibus sit enim. Libero ut alias, iure expedita veritatis qui nam accusamus, omnis consequuntur nostrum, at deleniti."

        ]
    ];

    public static function all()
    {
        return collect(self::$blog_blog);
    }

    public static function find($slug)
    {
        $blog = static::all();
        //$post = [];
        //foreach($blog as $p) {
        //    if($p["slug"] === $slug){
        //        $post = $p;
        //    }
        //}

        return $blog->firstWhere('slug', $slug);
    }
}

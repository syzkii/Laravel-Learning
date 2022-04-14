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
        "name" => "Rifki Ardian",
        "email" => "rifkiardianakbar.raa@gmail.com",
        "image" => "syzkii.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_blog = [
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

    return view('blog', [
        "title" => "Blog",
        "blog" => $blog_blog
    ]);
});


// halaman blog
Route::get('blog/{slug}', function($slug) {
    $blog_blog = [
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

    $new_post = [];
    foreach($blog_blog as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Judul-post-kedua",
        "post" => $new_post
    ]);
});

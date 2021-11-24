<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tags = Tag::latest()->get();
        $posts = Post::latest()->get();

        foreach ($tags as $key => $tag) {
            $popular_tags[$key] = $tag->posts->count();
        }

        $moy = round(collect($popular_tags)->avg());

        $popular_tags = $tags->filter(function ($tag, $moy) {
            return $tag->posts->count() >= $moy;
        });
        if (count($popular_tags) != 9) {
            $moy = $moy - $moy / 2;
            $popular_tags = $tags->filter(function ($tag, $moy) {
                return $tag->posts->count() >= $moy;
            });
        }

        $moy = round($posts->avg("view_count"));

        $popular_posts = $posts->where("view_count", ">=", $moy)->take(6);

        if (count($popular_posts) != 6) {
            $moy = $moy - $moy / 2;
            $popular_posts = $posts->where("view_count", ">=", $moy)->take(6);
        }

        return view('index')->with([
            "categories" => Category::latest()->get(),
            "popular_tags" => $popular_tags->take(9),
            "tags" => $tags->take(5),
            "popular_posts" => $popular_posts,
            "new_posts" => Post::latest()->paginate(6),
            "posts" => Post::latest()->paginate(4),
        ]);
    }

    public function show()
    {
        return view('layouts.view.blog.all-posts')->with('posts', Post::latest()->paginate(6));
    }

    public function show_single_post($url)
    {
        /* $post = Str::after($url, '?id');
        /* dd($post);
        return view('layouts.view.blog.single-page')->with('post', Post::findOrfail($post)); */
    }

    public function allPosts()
    {
        return view('layouts.view.blog.all-posts')->with('posts', Post::latest()->paginate(6));
    }

    public function show_category_posts()
    {
        return view('layouts.view.blog.category-posts');
    }
}
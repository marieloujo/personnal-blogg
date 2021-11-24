<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class App extends Controller
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
        $categories = Category::latest()->get();

        ///categories
        foreach ($categories as $key => $category) {
            $popular_categories[$key] = $category->posts->count();
        }

        $max = collect($popular_categories)->max();

        $moy = round(collect($popular_categories)->avg());

        $popular_category = $categories->filter(function ($category, $max) {
            return $category->posts->count() >= $max;
        });

        $popular_categories = $categories->filter(function ($category, $moy) {
            return $category->posts->count() >= $moy;
        });

        if (count($popular_categories) < 4) {
            $moy = $moy - $moy / 2;
            $popular_categories = $categories->filter(function ($category, $moy) {

                return $category->posts->count() >= $moy;
            });
        }

    /*
        $average = collect([collect(['foo' => 10]), ['foo' => 10], ['foo' => 20], ['foo' => 40]]);

        foreach ($popular_categories as $key => $category) {
            if (count($category->posts) >= 5) {
            }
        }

        $filterCat=  $popular_categories->filter(function ($category) {
                        return $category->posts->count() >= 3;
                    });
        $cat3First=$filterCat->first();
        $cat3Second=$filterCat->last();
        $arr=array($cat3First,$cat3Second);


        $filterCat=  $popular_categories->filter(function ($arr) {
            dd($cat3First);
           return $category->id!=$arr[0]->id && $category->id!=$arr[1]->id;
            //return $category $category->posts->count() >= 4;
        }); dd($filterCat);
                dd($filterCat->last()); 
                
                
    */

        ///tags
        foreach ($tags as $key => $tag) {
            $popular_tags[$key] = $tag->posts->count();
        }

        $moy = round(collect($popular_tags)->avg());

        $popular_tags = $tags->filter(function ($tag, $moy) {
            return $tag->posts->count() >= $moy;
        });
        if (count($popular_tags) < 10) {
            $moy = $moy - $moy / 2;
            $popular_tags = $tags->filter(function ($tag, $moy) {
                return $tag->posts->count() >= $moy;
            });
        }

        ///posts

        $moy = round($posts->avg("view_count"));

        $popular_posts = $posts->where("view_count", ">=", $moy)->take(4);
        if (count($popular_posts)  < 4) {
            $moy = $moy - $moy / 2;
            $popular_posts = $posts->where("view_count", ">=", $moy)->take(4);
        }


        return view('home')->with([
            "categories" => $categories,
            "popular_tags" => $popular_tags->take(10),
            "popular_categories" => $popular_categories,
            "best_category" => $popular_category->first(),
            "tags" => $tags,
            "popular_posts" => $popular_posts,
            "new_posts" => Post::latest()->paginate(4),
            "posts" => Post::latest()->paginate(4),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_all_posts()
    {
        $tags = Tag::latest()->get();
        $posts = Post::latest()->get();
        $categories = Category::latest()->get();

        foreach ($categories as $key => $category) {
            $popular_categories[$key] = $category->posts->count();
        }

        $max = collect($popular_categories)->max();

        $popular_category = $categories->filter(function ($category, $max) {
            return $category->posts->count() >= $max;
        });

        foreach ($tags as $key => $tag) {
            $popular_tags[$key] = $tag->posts->count();
        }

        $moy = round(collect($popular_tags)->avg());

        $popular_tags = $tags->filter(function ($tag, $moy) {
            return $tag->posts->count() >= $moy;
        });
        if (count($popular_tags)  < 10) {
            $moy = $moy - $moy / 2;
            $popular_tags = $tags->filter(function ($tag, $moy) {
                return $tag->posts->count() >= $moy;
            });
        }

        $moy = round($posts->avg("view_count"));

        $popular_posts = $posts->where("view_count", ">=", $moy)->take(4);

        if (count($popular_posts)  < 4) {
            $moy = $moy - $moy / 2;
            $popular_posts = $posts->where("view_count", ">=", $moy)->take(4);
        }


        return view('layouts.view.blog.all-posts')->with([
            "categories" => $categories,
            "popular_tags" => $popular_tags->take(10),
            "best_category" => $popular_category->first(),
            "tags" => $tags,
            "popular_posts" => $popular_posts,
            "new_posts" => Post::latest()->paginate(4),
            "posts" => Post::latest()->paginate(4),
        ]);
    }

    public function show_category_posts($url)
    {
        $tags = Tag::latest()->get();
        $posts = Post::latest()->get();
        $categories = Category::latest()->get();

        foreach ($categories as $key => $category) {
            $popular_categories[$key] = $category->posts->count();
        }

        $max = collect($popular_categories)->max();

        $popular_category = $categories->filter(function ($category, $max) {
            return $category->posts->count() >= $max;
        });

        foreach ($tags as $key => $tag) {
            $popular_tags[$key] = $tag->posts->count();
        }

        $moy = round(collect($popular_tags)->avg());

        $popular_tags = $tags->filter(function ($tag, $moy) {
            return $tag->posts->count() >= $moy;
        });
        if (count($popular_tags)  < 10) {
            $moy = $moy - $moy / 2;
            $popular_tags = $tags->filter(function ($tag, $moy) {
                return $tag->posts->count() >= $moy;
            });
        }

        $moy = round($posts->avg("view_count"));

        $popular_posts = $posts->where("view_count", ">=", $moy)->take(4);

        if (count($popular_posts)  < 4) {
            $moy = $moy - $moy / 2;
            $popular_posts = $posts->where("view_count", ">=", $moy)->take(4);
        }

        $category = Category::findOrfail(Str::after($url, '&id='));

        return view('layouts.view.blog.category-posts')->with([

            "categories" => $categories,
            "popular_tags" => $popular_tags->take(10),
            "best_category" => $popular_category->first(),
            "tags" => $tags,
            "popular_posts" => $popular_posts,
            "new_posts" => Post::latest()->paginate(4),
            "posts" => $category->posts()->orderByDesc('created_at')->paginate(4),
            "category" => $category
        ]);
    }

    public function show_single_post($url)
    {
        $tags = Tag::latest()->get();
        $posts = Post::latest()->get();
        $categories = Category::latest()->get();

        foreach ($categories as $key => $category) {
            $popular_categories[$key] = $category->posts->count();
        }

        $max = collect($popular_categories)->max();

        $popular_category = $categories->filter(function ($category, $max) {
            return $category->posts->count() >= $max;
        });

        foreach ($tags as $key => $tag) {
            $popular_tags[$key] = $tag->posts->count();
        }

        $moy = round(collect($popular_tags)->avg());

        $popular_tags = $tags->filter(function ($tag, $moy) {
            return $tag->posts->count() >= $moy;
        });
        if (count($popular_tags)  < 10) {
            $moy = $moy - $moy / 2;
            $popular_tags = $tags->filter(function ($tag, $moy) {
                return $tag->posts->count() >= $moy;
            });
        }

        $moy = round($posts->avg("view_count"));

        $popular_posts = $posts->where("view_count", ">=", $moy)->take(4);

        if (count($popular_posts)  < 4) {
            $moy = $moy - $moy / 2;
            $popular_posts = $posts->where("view_count", ">=", $moy)->take(4);
        }

        return view('layouts.view.blog.single-page')->with([
            "categories" => $categories,
            "popular_tags" => $popular_tags->take(10),
            "best_category" => $popular_category->first(),
            "tags" => $tags,
            "popular_posts" => $popular_posts,
            "new_posts" => Post::latest()->paginate(4),
            "post" => Post::findOrfail(Str::after($url, '&id='))
        ]);

        //return view('layouts.view.blog.single-page')->with('post', Post::findOrfail($post));
    }
}
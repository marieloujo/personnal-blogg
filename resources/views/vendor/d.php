

    \f017
    \f007
    \f133
    \f10d
    \f10e
    \f10c
    \f1c5
    \f06e
    \f019
    \f09d
    \f14c
    \f105
    \f17d
    \f0d2
    \f16d
    \f16a
    \f09e
    \f0d5
    \f099
    \f09a
    <a class="g-profile" rel="author" title=" MD.Blogger " style="color:#333;" href="{{route('loggIn')}}" onclick="\Toastr::info('Vous devez vous connecter.')">


    {{-- @foreach ( $like_post->categories->slice(0, 1) as $key=>$category)
                                                <a class="icon Beauty" href="{{route('show.category.posts',"search&index=".$category->id."&query=".$category->name)}}">{{ucfirst($category->name)}}</a>
                                            @endforeach --}}

                                            <li>
                                        <div class="related-thumb">
                                            <div class="yard-label">
                                                {{-- @foreach ( $like_post->categories->slice(0, 1) as $key=>$category)
                                                    <a class="icon Beauty" href="{{route('show.category.posts',"search&index=".$category->id."&query=".$category->name)}}">{{ucfirst($category->name)}}</a>
                                                @endforeach --}}
                                            </div>
                                            @foreach ( $like_post->images->slice(0, 1) as $key=>$image)
                                            <?php $img = $image ?>
                                            @endforeach
                                            <a class="related-img" href="{{route('show.post',"search&index=".$like_post->id."&query=".$like_post->slug)}}" style="background:url({{asset($img->url)}}) no-repeat center center;background-size: cover"></a>
                                        </div>
                                        <h3 class="related-title"><a href="{{route('show.post',"search&index=".$like_post->id."&query=".$like_post->slug)}}" style="padding: 10px 0 0px 0px;">{{ucfirst($like_post->title)}} </a></h3>

                                        <div class="post-meta" style="border-bottom: 0px;">
                                            <span class="post-author"> {{$like_post->author->name}} </span>
                                            <span class="post-date published" datetime="2016-03-17T00:34:00-07:00"> {{$like_post->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                        </div>
                                    </li>




















Route::get('/coco', function () {
    return view('layouts.view.blog.all-posts')->with('posts', Post::latest()->paginate(6));
});

Route::get('/blogger', 'App@index')->name('blogger');
Route::get('/all', 'App@show_all_posts')->name('all.posts');
Route::get('/posts/{url}', 'App@show_single_post')->name('single.post');
Route::get('/category/posts/{url}', 'App@show_category_posts')->name('category.posts');



Route::get('/gmail', 'HomeController@index')->name('gmail');
Route::get('/coco', function () {
    return view('layouts.view.blog.all-posts')->with('posts', Post::latest()->paginate(6));
});

Route::get('/blogger', 'App@index')->name('blogger');
Route::get('/all', 'App@show_all_posts')->name('all.posts');
Route::get('/posts/{url}', 'App@show_single_post')->name('single.post');
Route::get('/category/posts/{url}', 'App@show_category_posts')->name('category.posts');

        <!-- <script type="text/javascript">
            /* @if($errors->any())
                @foreach ($errors->any() as $error )
                    toastr.error('{{$error}}','Error',{
                        closeButton:true,
                        progressBar:true,
                    })
                @endforeach
            @endif */
        </script> -->















Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'App', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('tags', 'TagController');
        Route::resource('categories', 'CategoryController');
        Route::resource('posts', 'PostController');
        Route::get('posts/{post}/authorized', 'PostController@authorized')->name('posts.authorized');
        Route::get('pending/posts', 'PostController@pending')->name('posts.pending');
        Route::resource('abonnements', 'SubscriberController');
        Route::get('blogueurs', 'DashboardController@list_bloggeurs')->name('show.blogueurs');
        Route::delete('blogueurs/{blogueur}', 'DashboardController@destroyBlogueur')->name('delete.blogueur');
    });

    Route::group(['namespace' => 'Frontend'], function () {

        Route::get('messages', 'MessageController@index')->name('messages.index');
        Route::delete('messages/{message}', 'MessageController@destroy')->name('messages.delete');
    });
});


Route::group(['as' => 'blogger.', 'prefix' => 'blogger', 'namespace' => 'App', 'middleware' => ['auth', 'blogger']], function () {
    Route::group(['namespace' => 'Blogger'], function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('posts', 'PostController');
        Route::get('pending/posts', 'PostController@pending')->name('posts.pending');
        Route::get('posts/{post}/authorized', 'PostController@authorized')->name('posts.authorized');
    });
    Route::group(['namespace' => 'Frontend'], function () {

        Route::get('messages', 'MessageController@index')->name('messages.index');
        Route::delete('messages/{message}', 'MessageController@destroy')->name('messages.delete');
    });
}); 


                        <!-- <li class="{{Request::is('blogger/messages*')?'active':''}}">
                            <a href="{{ route('blogger.messages.index') }}">
                                <i class="material-icons">message</i>
                                <span>MESSAGES</span>
                            </a>
                        </li> -->





Route::group([/* 'as' => 'layouts.',  'prefix' => 'layouts', */'namespace' => 'App\Common'], function () {
    Route::group([/* 'as' => 'backend.', 'prefix' => 'backend', */'namespace' => 'Auth', 'middleware' => ['auth']], function () {

        Route::resource('parametre', 'SettingsController');
        Route::put('update-password', 'SettingsController@updatePassword')->name('update.password');
        Route::post('favorite/{post}/add', 'FavoriteController@add')->name('post.favorite');
    });
    Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Auth', 'middleware' => ['auth', 'admin']], function () {
        Route::resource('favorite', 'FavoriteController');
    });
    Route::group(['as' => 'blogger.', 'prefix' => 'blogger', 'namespace' => 'Auth', 'middleware' => ['auth', 'blogger']], function () {
        Route::resource('favorite', 'FavoriteController');
    });
});


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'App\Admin', 'middleware' => ['auth', 'admin']], function () {
    
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('tags', 'TagController');
        Route::resource('categories', 'CategoryController');
        Route::resource('posts', 'PostController');
        Route::get('posts/{post}/authorized', 'PostController@authorized')->name('posts.authorized');
        Route::get('pending/posts', 'PostController@pending')->name('posts.pending');
        Route::resource('abonnements', 'SubscriberController');
        Route::get('blogueurs', 'DashboardController@list_bloggeurs')->name('show.blogueurs');
        Route::delete('blogueurs/{blogueur}', 'DashboardController@destroyBlogueur')->name('delete.blogueur');
    

    /* Route::group(['namespace' => 'Frontend'], function () {

        Route::get('messages', 'MessageController@index')->name('messages.index');
        Route::delete('messages/{message}', 'MessageController@destroy')->name('messages.delete');
    }); */
});


Route::group(['as' => 'blogger.', 'prefix' => 'blogger', 'namespace' => 'App\Blogger', 'middleware' => ['auth', 'blogger']], function () {
    //Route::group(['namespace' => 'Blogger'], function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('posts', 'PostController');
        Route::get('pending/posts', 'PostController@pending')->name('posts.pending');
        Route::get('posts/{post}/authorized', 'PostController@authorized')->name('posts.authorized');
    //});
    /* Route::group(['namespace' => 'Frontend'], function () {

        Route::get('messages', 'MessageController@index')->name('messages.index');
        Route::delete('messages/{message}', 'MessageController@destroy')->name('messages.delete');
    }); */
}); 

@media screen and (max-width: 700px) {
            .demo3 ul li {
                list-style: none;
                padding: 10px 0;
                margin-left:11% !important;
            }
        }

        @media screen and (max-width: 600px) {
            .demo3 ul li {
                list-style: none;
                padding: 10px 0;
                margin-left:13% !important;
            }
        }

        @media screen and (max-width: 560px) {
            .demo3 ul li {
                list-style: none;
                padding: 10px 0;
                margin-left:14% !important;
            }
        }

        @media screen and (max-width: 520px) {
            .demo3 ul li {
                list-style: none;
                padding: 10px 0;
                margin-left:16% !important;
            }
        }

        @media screen and (max-width: 460px) {
            .demo3 ul li {
                list-style: none;
                padding-top:18%;
                margin-left:-33% !important;
            }
            .demo3:before {
                width:100%;
            }
        }


        @media screen and (max-width: 396px) {
            .demo3 ul li {
                margin-left:-25% !important;
            }
            .demo3:before {
                width:100%;
            }
        }
@extends('layouts.view.app')

@section('title','Home')

@push('css')

@endpush

@section('header')

    <div class="row" id="hot-wrapper">
        <!-- --------------------------- Favorite post ---------------------------------------- -->
            @include('layouts.view.partial.favorite-post.favorite-post')
        <!-- -------------x------------- Favorite post --------------------x------------------- -->
    </div>

    <div class="clearfix"></div>

    <div class="row" id="hot-wrapper" style=" padding-top: 10px; padding-bottom: 1px; position: static;transform: none;">
        <!-- --------------------------- Last post ---------------------------------------- -->
           @include('layouts.view.partial.last-post.last-post')
        <!-- -------------x------------- Last post --------------------x------------------- -->

    </div>
@endsection

@section('content')
    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; ">
        <div class="main section" id="main" name="Main Posts">
            <div class="widget Blog" data-version="2" id="Blog1">
                <div class="home-posts-headline title-wrap Label">
                    <h3 class="title">Posts</h3>
                    <a class="view-all" href="">Voir tout</a>
                </div>
                <div class="clearfix"></div>
                <div class="blog-posts hfeed container index-post-wrap">
                    @foreach ( $posts as $post)
                        <div class="blog-post hentry index-post">
                            <div class="post-image-wrap">
                                <a class="post-image-link" href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $post->title)).'&id='.$post->id)}}">
                                    @foreach ( $post->images->slice(0, 1) as $image)
                                        <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb"  title="{{$image->name}}">
                                    @endforeach
                                </a>
                            </div>
                            <div class="post-info">
                                <h2 class="post-title">
                                    <a href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $post->title)).'&id='.$post->id)}}">{{$post->title}}</a>
                                </h2>
                                <p class="post-snippet">
                                    {{$post->sub_title}} …
                                </p>
                                <div class="post-footer">
                                    <div class="post-meta">
                                        <span class="post-author">
                                            <a href="" target="_blank" title="{{$post->author->role->name}}">{{$post->author->username}}</a>
                                        </span>
                                        <span class="separator">-</span>
                                        <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">{{$post->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                        <a class="read-more" href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $post->title)).'&id='.$post->id)}}">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="blog-pager container" id="blog-pager">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="featured-posts section" id="featured-posts-2" name="Featured Posts 02">
            <?php $popular=0 ?>
            @foreach ($popular_categories as $popular_category)

                <?php $first=0;?>
                @if (count($popular_category->posts)>=5 && $first==0 && $popular=0)
                    <div class="widget HTML show-widget" data-version="2" id="HTML5">
                        <div class="widget-title">
                            <h3 class="title"> {{$popular_category->name}} </h3>
                            <a class="view-all" href="{{route('category.posts',"search§all&name=".strtolower(str_replace(" ", "%", $popular_category->name)).'&id='.$popular_category->id)}}">Voir tout</a>
                        </div>
                        <div class="widget-content">
                            <ul class="feat-big">
                                <?php $ok=0 ?>
                                @foreach ( $popular_category->posts->slice(0,5) as $category_posts)
                                    @if ($ok==0)
                                        <li class="feat-item item-big item-{{$ok}}">
                                            <div class="feat-inner">
                                                <a class="post-image-link" href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">
                                                    @foreach ( $category_posts->images->slice(0, 1) as $image)
                                                        <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb"  title="{{$image->name}}">
                                                    @endforeach
                                                </a>
                                                <div class="post-info">
                                                    <h2 class="post-title">
                                                        <a href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">{{$category_posts->title}}</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <span class="post-author">
                                                            <a href="" title="{{$category_posts->author->role->name}}">{{$category_posts->author->username}}</a>
                                                        </span>
                                                        <span class="separator">-</span>
                                                        <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">{{$category_posts->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                                    </div>
                                                    <p class="post-snippet">
                                                        Lorem Ipsu {{$category_posts->sub_title}} …
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li class="feat-item item-small item-{{$ok}}">
                                            <a class="post-image-link" href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">
                                                @foreach ( $category_posts->images->slice(0, 1) as $image)
                                                    <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb"  title="{{$image->name}}">
                                                @endforeach
                                            </a>
                                            <div class="post-info">
                                                <h2 class="post-title">
                                                    <a href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">{{$category_posts->title}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-author">
                                                        <a href="" title="{{$category_posts->author->role->name}}">{{$category_posts->author->username}}</a>
                                                    </span>
                                                    <span class="separator">- </span>
                                                    <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">{{$category_posts->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    <?php $ok++ ?>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <?php $first=1;?>
                @endif

                <?php $second=0 ?>
                @if (count($popular_category->posts)>=3 && $second==0 && $popular=1)
                    <div class="widget HTML col-width show-widget" data-version="2" id="HTML8">
                        <div class="widget-title">
                            <h3 class="title"> {{$popular_category->name}} </h3>
                            <a class="view-all" href="{{route('category.posts',"search§all&name=".strtolower(str_replace(" ", "%", $popular_category->name)).'&id='.$popular_category->id)}}">Voir tout</a>
                        </div>
                        <div class="widget-content">
                            <ul class="feat-col">
                                <?php $ok=0 ?>
                                @foreach ( $popular_category->posts->slice(0,3) as $category_posts)
                                    @if ($ok==0)
                                        <li class="feat-item item-big item-{{$ok}}">
                                            <div class="feat-inner">
                                                <a class="post-image-link" href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">
                                                    @foreach ( $category_posts->images->slice(0, 1) as $image)
                                                        <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb"  title="{{$image->name}}">
                                                    @endforeach
                                                </a>
                                                <div class="post-info">
                                                    <h2 class="post-title">
                                                        <a href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">{{$category_posts->title}}</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <span class="post-author">
                                                            <a href="" title="{{$category_posts->author->role->name}}">{{$category_posts->author->username}}</a>
                                                        </span>
                                                        <span class="separator">-</span>
                                                        <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">{{$category_posts->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                                    </div>
                                                    <p class="post-snippet">
                                                        Lorem Ipsu {{$category_posts->sub_title}} …
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li class="feat-item item-small item-{{$ok}}">
                                            <a class="post-image-link" href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">
                                                @foreach ( $category_posts->images->slice(0, 1) as $image)
                                                    <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb"  title="{{$image->name}}">
                                                @endforeach
                                            </a>
                                            <div class="post-info">
                                                <h2 class="post-title">
                                                    <a href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">{{$category_posts->title}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-author">
                                                        <a href="" title="{{$category_posts->author->role->name}}">{{$category_posts->author->username}}</a>
                                                    </span>
                                                    <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">{{$category_posts->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    <?php $ok++ ?>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <?php $second=1 ;$oldFirst=$popular_category->id;?>
                @endif

                <?php $third=0 ?>
                @if (count($popular_category->posts)>=3 && $third==0 && $oldFirst!=$popular_category->id && $popular=2)
                    <div class="widget HTML col-width show-widget" data-version="2" id="HTML9">
                        <div class="widget-title">
                            <h3 class="title"> {{$popular_category->name}} </h3>
                            <a class="view-all" href="{{route('category.posts',"search§all&name=".strtolower(str_replace(" ", "%", $popular_category->name)).'&id='.$popular_category->id)}}">Voir tout</a>
                        </div>
                        <div class="widget-content">
                            <ul class="feat-col">
                                <?php $ok=0 ?>
                                @foreach ( $popular_category->posts->slice(0,3) as $category_posts)
                                    @if ($ok==0)
                                        <li class="feat-item item-big item-{{$ok}}">
                                            <div class="feat-inner">
                                                <a class="post-image-link" href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">
                                                    @foreach ( $category_posts->images->slice(0, 1) as $image)
                                                        <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb"  title="{{$image->name}}">
                                                    @endforeach
                                                </a>
                                                <div class="post-info">
                                                    <h2 class="post-title">
                                                        <a href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">{{$category_posts->title}}</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <span class="post-author">
                                                            <a href="" title="{{$category_posts->author->role->name}}">{{$category_posts->author->username}}</a>
                                                        </span>
                                                        <span class="separator">-</span>
                                                        <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">{{$category_posts->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                                    </div>
                                                    <p class="post-snippet">
                                                        Lorem Ipsu {{$category_posts->sub_title}} …
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li class="feat-item item-small item-{{$ok}}">
                                            <a class="post-image-link" href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">
                                                @foreach ( $category_posts->images->slice(0, 1) as $image)
                                                    <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb"  title="{{$image->name}}">
                                                @endforeach
                                            </a>
                                            <div class="post-info">
                                                <h2 class="post-title">
                                                    <a href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $category_posts->title)).'&id='.$category_posts->id)}}">{{$category_posts->title}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-author">
                                                        <a href="" title="{{$category_posts->author->role->name}}">{{$category_posts->author->username}}</a>
                                                    </span>
                                                    <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">{{$category_posts->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    <?php $ok++ ?>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <?php $third=1 ;$oldSecond=$popular_category->id;?>
                @endif

                <?php $popular++ ?>
            @endforeach


        <!-- 
            <div class="widget HTML col-width show-widget" data-version="2" id="HTML8">
                <div class="widget-title">
                    <h3 class="title"> Sports </h3>
                    <a class="view-all" href="">Voir tout</a>
                </div>
                <div class="widget-content">
                    <ul class="feat-col">
                        <li class="feat-item item-big item-0">
                            <div class="feat-inner">
                                <a class="post-image-link" href="">
                                    <img class="post-thumb" alt="Girl looking at the mountains in her green kayak" src="https://1.bp.blogspot.com/-JimZDFhdozw/VupVELDw14I/AAAAAAAADWI/CqDCQKZbTAseFWJg_UgsScbdSGH7QjEcg/w640/kayaking-918464_960_720.jpg" />
                                </a>
                                <div class="post-info">
                                    <h2 class="post-title">
                                        <a href="">Girl looking at the mountains in her green kayak</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-author">Sora Blogging Tips </span>
                                        <span class="separator">-</span>
                                        <span class="post-date">March 17, 2016</span>
                                    </div>
                                    <p class="post-snippet">
                                        Forem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu…
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="feat-item item-small item-1">
                            <a class="post-image-link" href="">
                                <img class="post-thumb" alt="Man climbing sloping mountain" src="https://4.bp.blogspot.com/-GpvEjj-56Jk/VupW1hQ9COI/AAAAAAAADWc/Z6ULsbZRkDU9Xyd20-pwX1rPzbxaOut4g/w100/climber-984380_960_720.jpg" />
                            </a>
                            <div class="post-info">
                                <h2 class="post-title">
                                    <a href="">Man climbing sloping mountain</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="post-date">March 17, 2016</span>
                                </div>
                            </div>
                        </li>
                        <li class="feat-item item-small item-2">
                            <a class="post-image-link" href="">
                                <img class="post-thumb" alt="Baseball player running the game field" src="https://1.bp.blogspot.com/-O35ksn594-g/VupVD9H1jvI/AAAAAAAADWE/9OrQ_aiJ3EUp3bWfpbiSHgomAEnWyeRdA/w100/baseball-1149955_960_720.jpg" />
                            </a>
                            <div class="post-info">
                                <h2 class="post-title">
                                    <a href="">Baseball player running the game field</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="post-date">March 17, 2016</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="widget HTML col-right col-width show-widget" data-version="2" id="HTML9">
                <div class="widget-title">
                    <h3 class="title"> Technology </h3>
                    <a class="view-all" href="">Voir tout</a>
                </div>
                <div class="widget-content">
                    <ul class="feat-col">
                        <li class="feat-item item-big item-0">
                            <div class="feat-inner">
                                <a class="post-image-link" href="">
                                    <img class="post-thumb" alt="Business man analyzing graphs on a tablet" src="https://4.bp.blogspot.com/-BlBi18JGkEA/Vupbk40a0UI/AAAAAAAADXk/rydm_x2vsJURxIq763HgLebaYXvmhrnQA/w640/person-731479_960_720.jpg" />
                                </a>
                                <div class="post-info">
                                    <h2 class="post-title">
                                        <a href="">Business man analyzing graphs on a tablet</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-author">Sora Blogging Tips </span>
                                        <span class="separator">-</span>
                                        <span class="post-date">March 17, 2016</span>
                                    </div>
                                    <p class="post-snippet">
                                        Zorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu…
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="feat-item item-small item-1">
                            <a class="post-image-link" href="">
                                <img class="post-thumb" alt="Cars waiting pedestrians cross the street" src="https://2.bp.blogspot.com/-C2ZNH3JwldA/Vupbf-HopaI/AAAAAAAADXU/xq1cJrP0LJMEylkyCr76kPNm-bxo0-7og/w100/city-1150026_960_720.jpg" />
                            </a>

                            <div class="post-info">
                                <h2 class="post-title">
                                    <a href="">Cars waiting pedestrians cross the street</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="post-date">March 17, 2016</span>
                                </div>
                            </div>
                        </li>

                        <li class="feat-item item-small item-2">
                            <a class="post-image-link" href="">
                                <img class="post-thumb" alt="Tablet on a table showing calendar" src="https://1.bp.blogspot.com/-keqVlJeDxRA/Vupbj8ebLMI/AAAAAAAADXg/jEq7fAGhLyEO13ayr69hPg_c-m5yK1-Mw/w100/imac-605421_960_720.jpg" />
                            </a>

                            <div class="post-info">
                                <h2 class="post-title">
                                    <a href="">Tablet on a table showing calendar</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="post-date">March 17, 2016</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        
             <div class="featured-posts section" id="featured-posts-1" name="Featured Posts 01">
                <div class="widget HTML show-widget" data-version="2" id="HTML10">
                    <div class="widget-title">
                        <h3 class="title"> Music </h3>
                        <a class="view-all" href="">Voir tout</a>
                    </div>
                    <div class="widget-content">
                        <ul class="grid-big">
                            <li class="feat-item item-big item-0">
                                <div class="feat-inner">
                                    <a class="post-image-link" href="">
                                        <img class="post-thumb" alt="Writing lyrics with pen on a stylish thick paper" src="https://4.bp.blogspot.com/-dtSH0tcgqqM/Vupi6ek8JTI/AAAAAAAADY0/juCg2KTOg-UnkU6066GA50dYTHUN4Ifww/w640/notepad-926046_960_720.jpg" />
                                    </a>
                                    <div class="post-info">
                                        <h2 class="post-title">
                                            <a href="">Writing lyrics with pen on a stylish thick paper</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author">Sora Blogging Tips </span>
                                            <span class="separator">-</span>
                                            <span class="post-date">March 17, 2016</span>
                                        </div>
                                        <p class="post-snippet">
                                            Worem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book  Lorem Ipsum has been the industr…
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="feat-item item-big item-1">
                                <div class="feat-inner">
                                    <a class="post-image-link" href="">
                                        <img class="post-thumb" alt="Beautiful girl sitting and playing acoustic guitar " src="https://2.bp.blogspot.com/-vlEsQFjiSKk/VupYFIU67qI/AAAAAAAADWs/AJbQSsLgu0cAGn1mbyFzTrXnExTodbCAQ/w640/guitar-1139397_960_720.jpg" />
                                    </a>

                                    <div class="post-info">
                                        <h2 class="post-title">
                                            <a href="">Beautiful girl sitting and playing acoustic guitar </a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author">Sora Blogging Tips </span>
                                            <span class="separator">-</span><span class="post-date">March 17, 2016</span>
                                        </div>
                                        <p class="post-snippet">
                                            Morem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum has been the industr…
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="feat-item item-big item-2">
                                <div class="feat-inner">
                                    <a class="post-image-link" href="">
                                        <img class="post-thumb" alt="Cool smartphone with open music application" src="https://4.bp.blogspot.com/-dbwt9XYkbGE/VupYCl4Nw4I/AAAAAAAADWo/X8uDXgRC7SMSlYPD3vH12zbQawes3ZWFQ/w640/ipad-605439_960_720.jpg" />
                                    </a>

                                    <div class="post-info">
                                        <h2 class="post-title">
                                            <a href="">Cool smartphone with open music application</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author">Sora Blogging Tips </span>
                                            <span class="separator">-</span><span class="post-date">March 17, 2016</span>
                                        </div>
                                        <p class="post-snippet">
                                            Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum has been the industr…
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="feat-item item-big item-3">
                                <div class="feat-inner">
                                    <a class="post-image-link" href="">
                                        <img class="post-thumb" alt="Elegant man playing the guitar in a black suit" src="https://2.bp.blogspot.com/-sqrwp6jBxRI/VupYJhEG2jI/AAAAAAAADWw/1zVduOOZXmU4shfXniHjyrepDFTsV6Z-g/w640/guitarist-768532_960_720.jpg.png" />
                                    </a>
                                    <div class="post-info">
                                        <h2 class="post-title">
                                            <a href="">Elegant man playing the guitar in a black suit</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author">Sora Blogging Tips </span>
                                            <span class="separator">-</span>
                                            <span class="post-date">March 17, 2016</span>
                                        </div>
                                        <p class="post-snippet">
                                            Eorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum has been the industr…
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        -->
        </div>
    </div>
@endsection

@push('js')


@endpush

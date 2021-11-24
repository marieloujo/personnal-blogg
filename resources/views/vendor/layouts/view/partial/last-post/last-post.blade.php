<div class="featured-posts section"id="featured-posts-1"name="Featured Posts 01">
    <div class="widget HTML show-widget"data-version="2"id="HTML11">
        <div class="widget-title">
            <h3 class="title">Récent post </h3>
            <a class="view-all"href="">Voir tout</a>
        </div>
        <div class="widget-content">
            <ul class="grid-big-2">
                @foreach ( $new_posts->slice(0, 4) as $new_post )
                    <li class="feat-item item-big item-0">
                        <div class="feat-inner">
                            <a class="post-image-link" href="">
                                @foreach ( $new_post->images->slice(0, 1) as $image)
                                    <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb"  title="{{$image->name}}">
                                @endforeach
                            </a>
                            <span class="post-tag">
                                @foreach ( $new_post->categories->slice(0, 1) as $category)
                                    {{$category->name}}
                                @endforeach
                            </span>
                            <div class="post-info">
                                <h2 class="post-title">
                                    <a href="">{{$new_post->title}}</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="post-author"><a href="" target="_blank" title="{{$new_post->author->role->name}}">{{$new_post->author->username}}</a></span>
                                    <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">&nbsp;&nbsp; {{$new_post->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

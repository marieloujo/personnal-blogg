<div class="section" id="hot-section" name="Hot Posts">
    <div class="widget HTML show-hot" data-version="2" id="HTML2">
        <div class="widget-title">
            <h3 class="title">Best Seller Books </h3>
        </div>
        <div class="widget-content">
            <ul class="hot-posts">
                <?php $i=0 ?>
                @foreach ( $popular_posts as $cle=>$popular_post)
                    <li class="hot-item item-{{$i}}">
                        <div class="hot-item-inner">
                            <a class="post-image-link" href="">
                                @foreach ( $popular_post->images->slice(0, 1) as $key=>$image)
                                    <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb"  title="{{$image->name}}">
                                @endforeach
                            </a>
                            <div class="post-info">
                                <h2 class="post-title">
                                    <a href="">{{$popular_post->title}}</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="post-author"><a href="" target="_blank" title="{{$popular_post->author->role->name}}">{{$popular_post->author->username}}</a></span>
                                    <span class="separator">-</span>
                                    <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">&nbsp;&nbsp; {{$popular_post->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php $i++ ?>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@extends('layouts.view.app')

@section('title','Category list')

@push('css')
@endpush

@section('content')
            <div class="featured-posts section" id="featured-posts-1" name="Featured Posts 01">
                <div class="widget HTML show-widget" data-version="2" id="HTML10">
                    <div class="widget-title">
                        <h3 class="title"> {{$category->name}} </h3>
                    </div>
                    <div class="widget-content">
                        <ul class="grid-big">
                            <?php $i=0 ?>
                            @foreach ($posts as $post)
                                <li class="feat-item item-big item-{{$i}}">
                                    <div class="feat-inner">
                                        <a class="post-image-link" href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $post->title)).'&id='.$post->id)}}">
                                            @foreach ( $post->images->slice(0, 1) as $image)
                                                <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb"  title="{{$image->name}}">
                                            @endforeach
                                        </a>
                                        <div class="post-info">
                                            <h2 class="post-title">
                                                <a href="{{route('single.post',"search§name=".strtolower(str_replace(" ", "%", $post->title)).'&id='.$post->id)}}">{{$post->title}}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author">
                                                    <a href="" title="{{$post->author->role->name}}">{{$post->author->username}}</a>
                                                </span>
                                                <span class="separator">-</span>
                                                <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">{{$post->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                            </div>
                                            <p class="post-snippet">
                                                {{$post->sub_title}} …
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <?php $i++ ?>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <br/><br/><br/>
                <div class="blog-pager container" id="blog-pager" style="text-align:center;">
                    {{ $posts->links() }}
                </div>
            </div>
@endsection

@push('js')
@endpush

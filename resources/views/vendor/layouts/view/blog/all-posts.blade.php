@extends('layouts.view.app')

@section('title','All posts')

@push('css')
@endpush

@section('content')
<div class="main section" id="main" name="Main Posts">
            <div class="widget Blog" data-version="2" id="Blog1">
                <div class="home-posts-headline title-wrap Label">
                    <h3 class="title">All posts</h3>
                </div>
                <div class="clearfix"></div>
                <div class="blog-posts hfeed container index-post-wrap">
                    @foreach ( $posts as $post)
                        <div class="blog-post hentry index-post">
                            <div class="post-image-wrap">
                                <a class="post-image-link" href="">
                                    @foreach ( $post->images as $key=>$image)
                                        @if ($key == 0)
                                            <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img">
                                        @endif
                                    @endforeach
                                </a>
                            </div>
                            <div class="post-info">
                                <h2 class="post-title">
                                    <a href="{{route('single.post','name='.strtolower(str_replace(" ", "%", $post->title)).'&id='.$post->id)}}">{{$post->title}}</a>
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
                                        <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">&nbsp;&nbsp; {{$post->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                        <a class="read-more" href="{{route('single.post','name='.strtolower(str_replace(" ", "%", $post->title)).'&id='.$post->id)}}">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="blog-pager container" id="blog-pager">
                    {{ $posts->links() }}
                    {{--  <span class="page-of">Page 1 of 6</span>
                    <span class="page-num page-active">1</span>
                    <a class="page-num" href="" onclick="getPage(2);return false">2</a>
                    <a class="page-num" href="" onclick="getPage(3);return false">3</a>
                    <span class="page-num page-dots">...</span>
                    <a class="page-num" href="" onclick="getPage(6);return false">6</a>
                    <a class="page-num page-next" href="" onclick="getPage(2);return false"></a>  --}}
                </div>
            </div>
        </div>
@endsection

@push('js')
@endpush

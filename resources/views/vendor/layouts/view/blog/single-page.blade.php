@extends('layouts.view.app')

@section('title','Home')

@push('css')

  <style type="text/css">
    #related-wrap
    .related-ready
    .cloud-label li a {
        display: block;
        height: 26px;
        background-color: #fff;
        color: #353535;
        font-size: 12px;
        line-height: 26px;
        font-weight: 400;
        padding: 0 10px;
        border: 1px solid #eaeaea;
        border-radius: 3px;
        transition: all .17s ease
    }

    #related-wrap
    .related-ready
    .cloud-label li a:hover {
        color: #0b0e13
    }

    @media screen and (min-width: 981px) {
        #sidebar-wrapper{
            padding-top: 75px
        }
    }

    @media screen and (max-width: 370px) {
        .post-share{
            padding-top:10px;
        }
    }

    .post-snippet {
        position: relative;
        display: block;
        overflow: hidden;
        font-size: 13.3px;
        line-height: 1.6em;
        font-weight: 400;
        margin: 10px 0 0;
        text-align: justify;
    }

    .post-snippet::first-letter {
        float: left;
        font-size: 63px;
        line-height: 63px;
        font-family: "Playfair Display";
        margin: -5px 10px 0 0;
        padding: 0 6px;
        color: #000;
        font-weight: bold;
        background-image: url('/sora/images/firstletter-bg.png');
        background-repeat: no-repeat;
        background-position: center;
    }

    .share-box
    .widget-content
    .cloud-label li a {
        display: block;
        height: 26px;
        background-color: #fff;
        color: #353535;
        font-size: 12px;
        line-height: 26px;
        font-weight: 400;
        padding: 0 10px;
        border: 1px solid #eaeaea;
        border-radius: 3px;
        transition: all .17s ease
    }

    .share-box
    .widget-content
    .cloud-label li a:hover {
        color: #0b0e13
    }

    .share-box
    .widget-content
    .cloud-label li a{
        float:right;
    }

    


    .share-links li a{
        border-radius: 50px;
    }

    .share-box{position:relative;padding:20px 0}
    .share-title{border-bottom:2px solid #777;color:#010101;display:inline-block;padding-bottom:7px;font-size:15px;font-weight:500;position:relative;top:2px}
    .share-art{float:right;padding:0;padding-top:0;font-size:13px;font-weight:400;text-transform:capitalize}
    .share-art a{color:#fff;padding:3px 8px;margin-left:4px;border-radius:2px;display:inline-block;margin-right:0;background:#010101}
    .share-art a:hover{color:#fff}

  </style>
@endpush

@section('content')
<div class="main section" id="main" name="Main Posts">
    <div class="widget Blog" data-version="2" id="Blog1">
        <div class="blog-posts hfeed container item-post-wrap">
            <div class="blog-post hentry item-post">
                    
                <nav id="breadcrumb">
                    <a href="">Home</a><em class="delimiter"></em><a
                      class="b-label" href="search/label/photography.html">Photography</a><em
                      class="delimiter"></em><span class="current">Girl with camera style vintage</span>
                </nav>
                  
                <h1 class="post-title"> {{$post->title}} </h1>
                <div class="post-meta">
                    <span class="post-author"><a href="" target="_blank" title="{{$post->author->role->name}}">{{$post->author->username}}</a></span>
                    <span class="separator">-</span>
                    <span class="post-date published" datetime="2016-08-23T15:00:00-07:00"> {{$post->created_at->isoFormat('MMMM d, YYYY')}}</span>
                </div>
                <div class="post-body post-content">
                    <div dir="ltr" style="text-align: left;" trbidi="on">
                        @foreach ( $post->images->slice(0,1)  as $image)
                            <img src="{{ asset($image->url) }}" alt="{{$image->name}}" title="{{$image->name}}" class="img">
                        @endforeach
                        <br />
                        <div><br /></div>
                        <div>
                            <p class="post-snippet">
                              Orem uyfhvgjcju  {{ $post->title }}
                              <br/><br/><br/><br/>
                                <blockquote class="tr_bq">
                                    {{$post->sub_title}}
                                </blockquote>
                                <br/><p class="post-snippet">{!!$post->description!!}</p>
                            </p><br /><br />
                            
                        </div>
                    </div>
                </div>
                        
                <div class="post-footer">
                    @if ($post->images->count() > 1)
                        <div id="related-wrap">
                            <div class="title-wrap">
                                <h3>Featured posts</h3>
                            </div>
                            <div class="related-ready">
                                <ul class="related-posts">
                                    @foreach ( $post->images->slice(1,$post->images->count()) as $image)
                                            <li class="related-item item-0" style="padding-bottom:3%;">
                                                <div class="post-image-wrap">
                                                    <a class="post-image-link" href="">
                                                        <img src="{{ asset($image->url) }}" alt="{{$image->name}}" title="{{$image->name}}" class="img post-thumb">
                                                    </a>
                                                </div>
                                            </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                        <div class="clearfix"></div>
                        <div id="related-wrap">
                            <div class="title-wrap">
                                <h3>Categories</h3>
                            </div>
                            <div class="related-ready">
                                <div class="widget-content cloud-label">
                                    <ul>
                                        @foreach ( $post->categories as $category)
                                            <li>
                                                <a class="label-name" href="{{route('category.posts',"search§all&name=".strtolower(str_replace(" ", "%", $category->name)).'&id='.$category->id)}}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div id="related-wrap">
                            <div class="title-wrap">
                                <h3>Tags</h3>
                            </div>
                            <div class="related-ready">
                                <div class="widget-content cloud-label">
                                    <ul>
                                        @foreach ( $post->tags as $tag)
                                            <li>
                                                <a class="label-name" href=" ">
                                                    {{ $tag->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="share-box">
                                <h8 class="share-title">Share This : </h8>
                                <div class="post-share">
                                    <ul class="share-links social social-color">
                                        <li class="facebook">
                                            <a class="facebook" href="" click="#" rel="nofollow"></a>
                                        </li>
                                        <li class="twitter">
                                            <a class="twitter" href="" onclick="" rel="nofollow"></a>
                                        </li>
                                        <li class="instagram">
                                            <a class="instagram" href="" onclick="" rel="nofollow"></a>
                                        </li>
                                        <li class="pinterest">
                                            <a class="pinterest" href="" onclick="" rel="nofollow"></a>
                                        </li>
                                        <li class="linkedin">
                                            <a class="linkedin" href="" onclick="" rel="nofollow"></a>
                                        </li>
                                        <li class="whatsapp">
                                            <a class="whatsapp" href="" rel="nofollow" target="_blank"></a>
                                        </li>
                                        <li class="email">
                                            <a class="email" href="" onclick="" rel="nofollow"></a>
                                        </li>
                                    </ul>
                                </div> 
                        </div>

                        <div class="clearfix"></div>
                        <ul class="post-nav">
                            <li class="post-next">
                                <a class="next-post-link" href="" id="Blog1_blog-pager-newer-link" rel="next">
                                    <div class="post-nav-inner">
                                        <span>Newer</span>
                                        <p> Elegant woman in front of a waterfall </p>
                                    </div>
                                </a>
                            </li>
                            <li class="post-prev">
                                <a class="prev-post-link" href="" id="Blog1_blog-pager-older-link" rel="previous">
                                    <div class="post-nav-inner">
                                        <span>Older</span>
                                        <p> Elegant Business man having a cup of coffee </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="about-author">
                            <div class="avatar-container">
                                <img src="{{ asset($post->author->image) }}" alt="{{$post->author->username}}" title="{{$post->author->username}}" class="img">     
                            </div>
                            <h3 class="author-name">
                                <span>Posted by : </span>
                                <a alt="{{  $post->author->username }}" href="" target="_blank">{{  $post->author->username }}</a>
                            </h3>
                            <span class="author-description">
                                {{ $post->author->about }}
                            </span>
                            <hr/>
                            <span class="post-author"><a href="" target="_blank" title="{{$post->author->role->name}}">{{$post->author->role->name}}</a></span>
                            <span class="separator">-</span>
                            <span class="post-date published" datetime="2016-08-23T15:00:00-07:00">{{$post->created_at->isoFormat('MMMM d, YYYY')}}</span>
                            
                        </div>
                        <div id="related-wrap">
                            <div class="title-wrap">
                                <h3>You may like these posts</h3>
                            </div>
                            <div class="related-ready">
                                <ul class="related-posts">
                                    <li class="related-item item-0">
                                        <div class="post-image-wrap">
                                            <a class="post-image-link" href="">
                                                <img class="post-thumb" alt="Writing lyrics with pen on a stylish thick paper"
                                                src="https://4.bp.blogspot.com/-dtSH0tcgqqM/Vupi6ek8JTI/AAAAAAAADY0/juCg2KTOg-UnkU6066GA50dYTHUN4Ifww/w280/notepad-926046_960_720.jpg" />
                                            </a>
                                        </div>
                                        <h2 class="post-title">
                                            <a href="">Writing lyrics with pen on a stylish thick paper</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-date">March 17, 2016</span>
                                        </div>
                                    </li>
                                    <li class="related-item item-1">
                                        <div class="post-image-wrap">
                                            <a class="post-image-link" href="">
                                                <img class="post-thumb" alt="Old books stacked on top of a ladder"
                                                src="https://1.bp.blogspot.com/-v0QptPDrcVs/VupeaXsiCOI/AAAAAAAADXw/mXxQ3zVItm0UWkJqINGNkzqwVFL4pA6DQ/w280/books-1185628_960_720.jpg" />
                                            </a>
                                        </div>
                                        <h2 class="post-title">
                                            <a href="">Old books stacked on top of a ladder</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-date">March 17, 2016</span>
                                        </div>
                                    </li>
                                    <li class="related-item item-2">
                                        <div class="post-image-wrap">
                                            <a class="post-image-link" href=""><img class="post-thumb" alt="Business man reading newspaper"
                                            src="https://4.bp.blogspot.com/-hRZbMTprGYM/VupbiPgYX-I/AAAAAAAADXc/ghlbMrG6NxgLTqZOyGb3FDmqvuu584_ZQ/w280/business-man-1031755_960_720.jpg" /></a>
                                        </div>
                                        <h2 class="post-title">
                                            <a href="">Business man reading newspaper</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-date">March 17, 2016</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>

            <div class="blog-post-comments comments-system-blogger" style="display: block;">
                  <div class="title-wrap comments-title">
                    <h3>Post a Comment</h3>
                  </div>
                <section class="comments threaded" data-embed="true" data-num-comments="3" id="comments">
                    <a name="comments"></a>
                    <h3 class="title">3 Comments</h3>
                    <div class="comments-content">
                        <div id="comment-holder">
                            <div class="comment-thread toplevel-thread">
                                <ol id="top-ra">
                                    <li class="comment" id="c1425956904725705057">
                                        <div class="avatar-image-container">
                                            <img src="//4.bp.blogspot.com/-OgI8F1gufwo/XRmwEigyp0I/AAAAAAAAANQ/5NDD1EKRBKQFZGRhlFn8qn9bKENnU1_5ACK4BGAYYCw/s35/Sora%25252BBlogging%25252BTips.jpg" alt="" />
                                        </div>
                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <cite class="user">
                                                    <a href="https://www.blogger.com/profile/02522381661312673710" rel="nofollow">Sora Blogging Tips</a>
                                                </cite>
                                                <span class="icon user blog-author"></span>
                                                <span class="datetime secondary-text">
                                                    <a rel="nofollow" href="">February 3, 2020 at 7:36 AM</a>
                                                </span>
                                            </div>
                                            <p class="comment-content">
                                                This is Testing Comment
                                            </p>
                                            <span class="comment-actions secondary-text">
                                                <a class="comment-reply" target="_self" data-comment-id="1425956904725705057" href="javascript:;">Reply</a>
                                                <span class="item-control blog-admin blog-admin pid-1216273153">
                                                    <a target="_self" href="">Delete</a>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="comment-replies">
                                            <div id="c1425956904725705057-rt" class="comment-thread inline-thread hidden">
                                            <span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span
                                                class="thread-count"><a target="_self"
                                                    href="javascript:;">Replies</a></span></span>
                                            <ol id="c1425956904725705057-ra" class="thread-chrome thread-expanded">
                                                <div></div>
                                                <div id="c1425956904725705057-continue" class="continue">
                                                <a class="comment-reply" target="_self" data-comment-id="1425956904725705057"
                                                    href="javascript:;">Reply</a>
                                                </div>
                                            </ol>
                                            </div>
                                        </div>
                                        <div class="comment-replybox-single" id="c1425956904725705057-ce"></div>
                                    </li>
                                    <li class="comment" id="c1425956904725705057">
                                        <div class="avatar-image-container">
                                            <img src="//4.bp.blogspot.com/-OgI8F1gufwo/XRmwEigyp0I/AAAAAAAAANQ/5NDD1EKRBKQFZGRhlFn8qn9bKENnU1_5ACK4BGAYYCw/s35/Sora%25252BBlogging%25252BTips.jpg" alt="" />
                                        </div>
                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <cite class="user">
                                                    <a href="https://www.blogger.com/profile/02522381661312673710" rel="nofollow">Sora Blogging Tips</a>
                                                </cite>
                                                <span class="icon user blog-author"></span>
                                                <span class="datetime secondary-text">
                                                    <a rel="nofollow" href="">February 3, 2020 at 7:36 AM</a>
                                                </span>
                                            </div>
                                            <p class="comment-content">
                                                This is Testing Comment
                                            </p>
                                            <span class="comment-actions secondary-text">
                                                <a class="comment-reply" target="_self" data-comment-id="1425956904725705057" href="javascript:;">Reply</a>
                                                <span class="item-control blog-admin blog-admin pid-1216273153">
                                                    <a target="_self" href="">Delete</a>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="comment-replies">
                                            <div id="c1425956904725705057-rt" class="comment-thread inline-thread hidden">
                                            <span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span
                                                class="thread-count"><a target="_self"
                                                    href="javascript:;">Replies</a></span></span>
                                            <ol id="c1425956904725705057-ra" class="thread-chrome thread-expanded">
                                                <div></div>
                                                <div id="c1425956904725705057-continue" class="continue">
                                                <a class="comment-reply" target="_self" data-comment-id="1425956904725705057"
                                                    href="javascript:;">Reply</a>
                                                </div>
                                            </ol>
                                            </div>
                                        </div>
                                        <div class="comment-replybox-single" id="c1425956904725705057-ce"></div>
                                    </li>
                                    <li class="comment" id="c1425956904725705057">
                                        <div class="avatar-image-container">
                                            <img src="//4.bp.blogspot.com/-OgI8F1gufwo/XRmwEigyp0I/AAAAAAAAANQ/5NDD1EKRBKQFZGRhlFn8qn9bKENnU1_5ACK4BGAYYCw/s35/Sora%25252BBlogging%25252BTips.jpg" alt="" />
                                        </div>
                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <cite class="user">
                                                    <a href="https://www.blogger.com/profile/02522381661312673710" rel="nofollow">Sora Blogging Tips</a>
                                                </cite>
                                                <span class="icon user blog-author"></span>
                                                <span class="datetime secondary-text">
                                                    <a rel="nofollow" href="">February 3, 2020 at 7:36 AM</a>
                                                </span>
                                            </div>
                                            <p class="comment-content">
                                                This is Testing Comment
                                            </p>
                                            <span class="comment-actions secondary-text">
                                                <a class="comment-reply" target="_self" data-comment-id="1425956904725705057" href="javascript:;">Reply</a>
                                                <span class="item-control blog-admin blog-admin pid-1216273153">
                                                    <a target="_self" href="">Delete</a>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="comment-replies">
                                            <div id="c1425956904725705057-rt" class="comment-thread inline-thread hidden">
                                            <span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span
                                                class="thread-count"><a target="_self"
                                                    href="javascript:;">Replies</a></span></span>
                                            <ol id="c1425956904725705057-ra" class="thread-chrome thread-expanded">
                                                <div></div>
                                                <div id="c1425956904725705057-continue" class="continue">
                                                <a class="comment-reply" target="_self" data-comment-id="1425956904725705057"
                                                    href="javascript:;">Reply</a>
                                                </div>
                                            </ol>
                                            </div>
                                        </div>
                                        <div class="comment-replybox-single" id="c1425956904725705057-ce"></div>
                                    </li>
                                    {{--  
                                        <li class="comment" id="c2097117909260934223">
                                            <div class="avatar-image-container">
                                                <img
                                                src="//4.bp.blogspot.com/-OgI8F1gufwo/XRmwEigyp0I/AAAAAAAAANQ/5NDD1EKRBKQFZGRhlFn8qn9bKENnU1_5ACK4BGAYYCw/s35/Sora%25252BBlogging%25252BTips.jpg"
                                                alt="" />
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-header">
                                                <cite class="user"><a href="https://www.blogger.com/profile/02522381661312673710"
                                                    rel="nofollow">Sora Blogging Tips</a></cite><span
                                                    class="icon user blog-author"></span><span class="datetime secondary-text"><a
                                                    rel="nofollow"
                                                    href="#?showComment=1580744223779#c2097117909260934223">February
                                                    3, 2020 at 7:37 AM</a></span>
                                                </div>
                                                <p class="comment-content">
                                                This is Second Testing Comment
                                                </p>
                                                <span class="comment-actions secondary-text"><a class="comment-reply" target="_self"
                                                    data-comment-id="2097117909260934223" href="javascript:;">Reply</a><span
                                                    class="item-control blog-admin blog-admin pid-1216273153"><a target="_self"
                                                    href="https://www.blogger.com/delete-comment.g?blogID=170975474984791640&amp;postID=2097117909260934223">Delete</a></span></span>
                                            </div>
                                            <div class="comment-replies">
                                                <div id="c2097117909260934223-rt" class="comment-thread inline-thread hidden">
                                                <span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span
                                                    class="thread-count"><a target="_self"
                                                        href="javascript:;">Replies</a></span></span>
                                                <ol id="c2097117909260934223-ra" class="thread-chrome thread-expanded">
                                                    <div></div>
                                                    <div id="c2097117909260934223-continue" class="continue">
                                                    <a class="comment-reply" target="_self" data-comment-id="2097117909260934223"
                                                        href="javascript:;">Reply</a>
                                                    </div>
                                                </ol>
                                                </div>
                                            </div>
                                            <div class="comment-replybox-single" id="c2097117909260934223-ce"></div>
                                        </li>
                                        <li class="comment" id="c9038111709212361146">
                                            <div class="avatar-image-container">
                                                <img
                                                src="//4.bp.blogspot.com/-OgI8F1gufwo/XRmwEigyp0I/AAAAAAAAANQ/5NDD1EKRBKQFZGRhlFn8qn9bKENnU1_5ACK4BGAYYCw/s35/Sora%25252BBlogging%25252BTips.jpg"
                                                alt="" />
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-header">
                                                <cite class="user"><a href="https://www.blogger.com/profile/02522381661312673710"
                                                    rel="nofollow">Sora Blogging Tips</a></cite><span
                                                    class="icon user blog-author"></span><span class="datetime secondary-text"><a
                                                    rel="nofollow"
                                                    href="#?showComment=1580744231436#c9038111709212361146">February
                                                    3, 2020 at 7:37 AM</a></span>
                                                </div>
                                                <p class="comment-content">
                                                This is Third Testing Comment
                                                </p>
                                                <span class="comment-actions secondary-text"><a class="comment-reply" target="_self"
                                                    data-comment-id="9038111709212361146" href="javascript:;">Reply</a><span
                                                    class="item-control blog-admin blog-admin pid-1216273153"><a target="_self"
                                                    href="https://www.blogger.com/delete-comment.g?blogID=170975474984791640&amp;postID=9038111709212361146">Delete</a></span></span>
                                            </div>
                                            <div class="comment-replies">
                                                <div id="c9038111709212361146-rt" class="comment-thread inline-thread hidden">
                                                <span class="thread-toggle thread-expanded"><span class="thread-arrow"></span><span
                                                    class="thread-count"><a target="_self"
                                                        href="javascript:;">Replies</a></span></span>
                                                <ol id="c9038111709212361146-ra" class="thread-chrome thread-expanded">
                                                    <div></div>
                                                    <div id="c9038111709212361146-continue" class="continue">
                                                    <a class="comment-reply" target="_self" data-comment-id="9038111709212361146"
                                                        href="javascript:;">Reply</a>
                                                    </div>
                                                </ol>
                                                </div>
                                            </div>
                                            <div class="comment-replybox-single" id="c9038111709212361146-ce"></div>
                                        </li>  
                                    --}}
                                </ol>
                                <div id="top-continue" class="continue hidden">
                                    <a class="comment-reply" target="_self" href="javascript:;">Add comment</a>
                                </div>
                                <div class="comment-replybox-thread" id="top-ce">
                                    <iframe allowtransparency="allowtransparency" class="blogger-iframe-colorize blogger-comment-from-post" id="comment-editor" name="comment-editor"
                                        src="https://www.blogger.com/comment-iframe.g?blogID=170975474984791640&amp;postID=299868132884168390&amp;skin=contempo&amp;blogspotRpcToken=9539177"
                                        style="display: block;" data-resized="true" width="100%" height="90px"
                                        frameborder="0">
                                    </iframe>
                                </div>
                                <div class="loadmore hidden" data-post-id="299868132884168390">
                                    <a target="_self">Load more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="comment-footer"></p>
                    <div class="comment-form">
                        <a name="comment-form"></a>
                        <a href="" id="comment-editor-src"></a>
                    </div>
                    <p></p>
                </section>
            </div>
        </div>
              {{--  <script type="text/javascript">
                var messages = {
                  viewAll: "Voir tout",
                };
              </script>  --}}
    </div>
</div>
@endsection

@push('js')


@endpush

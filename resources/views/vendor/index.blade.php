@extends('layouts.frontend.app')

@section('title','Home')

@push('css')
    <style id="baloo-style-inline-css" type="text/css">
        body{
                color: #454545;
            }
            a{color: #8fb59e;}
            .baloo-button, button, .button, input[type='submit'] {
                background: #8fb59e;
            }
            .chosen-container .chosen-results li.highlighted{
              background-color: #8fb59e;
            }
            .sticky .post-title:before{
                color: #8fb59e;
            }
            .baloo-main-menu li a:hover{
                color: #8fb59e;
            }
            .baloo-pagination .nav-links .page-numbers:hover,
            .baloo-pagination .nav-links .page-numbers.current{
                background: #8fb59e;
            }
            .post-title a:hover{color: #8fb59e}
            .item-post-feature .post-cats a:hover{color: #8fb59e;}
            .widget ul li a:hover{color: #8fb59e;}
            .post-cats a{
                background: #8fb59e;
            }
            .tagcloud a:hover{
                background: #8fb59e;
                border-color: #8fb59e;
            }
            .baloo-social a:hover{
                color: #8fb59e;
            }

            .body_boxed{
                background-image: url(http://baloo.az-theme.net/wp-content/uploads/2019/05/bg-body.jpg);
            }
    </style>
    {{--  <link href="{{ asset('frontend/css/baloo/style.css') }}" rel="stylesheet">  --}}
    <style>
        .favorite_posts{
            color:blue;
        }
    </style>
@endpush

@section('site-title')
    @include('layouts.frontend/partial/title')
@endsection

@section('blog-section')

    <div class="container">
        <div class="owl-carousel owl-theme blog-post">
            @foreach ( $new_posts as $new_post)
                <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                    @foreach ( $new_post->images as $key=>$image)

                        @if ($key == 0)
                            <img src="{{ asset($image->url) }}" alt="{{$image->name}}">
                        @endif

                    @endforeach
                    <div class="blog-title">
                        <h3>{{\Str::limit($new_post->title,70)}}</h3>
                        @foreach ( $new_post->categories as $category)
                            <button class="btn btn-blog">{{strtolower($category->name)}}</button>
                        @endforeach
                        <span>{{$new_post->updated_at->diffForHumans()}}</span>
                    </div>
                </div>
            @endforeach
{{--

            <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                <img src="{{ asset('frontend/assets/Blog-post/post-3.jpg') }}" alt="post-1">
                <div class="blog-title">
                    <h3>London Fashion week's continued the evolution</h3>
                    <button class="btn btn-blog">Fashion</button>
                    <span>2 minutes</span>
                </div>
            </div>



            <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ asset('frontend/assets/Blog-post/post-2.jpg') }}" alt="post-1">
                <div class="blog-title">
                    <h3>London Fashion week's continued the evolution</h3>
                    <button class="btn btn-blog">Fashion</button>
                    <span>2 minutes</span>
                </div>
            </div>

            <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                <img src="{{ asset('frontend/assets/Blog-post/post-5.png') }}" alt="post-1">
                <div class="blog-title">
                    <h3>London Fashion week's continued the evolution</h3>
                    <button class="btn btn-blog">Fashion</button>
                    <span>2 minutes</span>
                </div>
            </div>

 --}}
        </div>
        <div class="owl-navigation">
            <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
            <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
        </div>
    </div>
@endsection

@section('site-content')
    <div class="site-content">
        <div class="posts">

            @foreach ( $posts as $post)
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                    <div class="post-image">
                        <div>
                            @foreach ( $post->images as $key=>$image)
                                @if ($key == 0)
                                    <img style="height: -10%;" src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img">
                                @endif
                            @endforeach
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;{{ $post->author->role->name }}</span>
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; {{$post->created_at->isoFormat('MMMM d, YYYY')}} {{-- January 14, 2019 --}}</span>
                            <span><i class="fas fa-comments"></i> 2 {{--  Comments  --}}</span>
                            <span>
                                @guest
                                    <a href="javascript:void(0);"  onclick="\Toastr::info('Vous devez vous connecter.')"> <i class="fas fa-heart"></i> {{ $post->favorite_to_users()->count() }}</a>
                                @else
                                    <a href="javascript:void(0);"  onclick="document.getElementById('like-form-{{$post->id}}').submit();" class="{{!Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()==0 ? 'favorite_posts' : ''}}"> <i class="fas fa-heart"></i> {{ $post->favorite_to_users()->count() }}</a>
                                    <form id="like-form-{{$post->id}}" style="display: none;" method="POST" action="{{ route('post.favorite',$post->id) }}" style="display:none;">
                                        @csrf
                                        @method('POST')
                                    </form>
                                @endguest
                            </span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">{{ $post->title }} Why should boys have all the fun? it s the women who are making india an
                            alcohol-loving contry</a>
                        <p> {{ $post->sub_title }}Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                            adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                            nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                            illum similique veniam tempore unde?
                        </p>
                        <button class="btn post-btn">Voir plus &nbsp; <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <hr>
            @endforeach
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="post-image">
                    <div>
                        <img src="{{ asset('frontend/assets/Blog-post/blog2.png') }}" class="img" alt="blog1">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 16, 2019</span>
                        <span>7 Commets</span>
                    </div>
                </div>
                <div class="post-title">
                    <a href="#">Why should boys have all the fun? it's the women who are making india an alcohol-loving contry</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                        adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                        nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                        illum similique veniam tempore unde?
                    </p>
                    <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>{{--
            <hr>
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="post-image">
                    <div>
                        <img src="{{ asset('frontend/assets/Blog-post/blog3.png') }}" class="img" alt="blog1">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 19, 2019</span>
                        <span>5 Commets</span>
                    </div>
                </div>
                <div class="post-title">
                    <a href="#">New data recording system to better analyse road accidents</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                        adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                        nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                        illum similique veniam tempore unde?
                    </p>
                    <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            <hr>
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="post-image">
                    <div>
                        <img src="{{ asset('frontend/assets/Blog-post/blog4.png') }}" class="img" alt="blog1">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 21, 2019</span>
                        <span>12 Commets</span>
                    </div>
                </div>
                <div class="post-title">
                    <a href="#">New data recording system to better analyse road accidents</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptas deserunt beatae
                        adipisci iusto totam placeat corrupti ipsum, tempora magnam incidunt aperiam tenetur a
                        nobis, voluptate, numquam architecto fugit. Eligendi quidem ipsam ducimus minus magni
                        illum similique veniam tempore unde?
                    </p>
                    <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                </div>
            </div> --}}
            {{ $posts->links() }}
            <div class="pagination flex-row">


               {{--  {{ $posts->onEachSide(3)->links() }}
                <a href="#"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="pages">1</a>
                <a href="#" class="pages">2</a>
                <a href="#" class="pages">3</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>  --}}
            </div>
        </div>
        <aside class="sidebar">

            <div class="category">
                <h2>Category</h2>
                <ul class="category-list">
                    @foreach ($categories as $category)
                        <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                            <a href="#">{{$category->name}}</a>
                            <span>({{$category->posts->count()}})</span>
                        </li>
                        {{--  <option data-subtext="{{$category->slug}}" value="{{$category->id}}">{{$category->name}}</option>  --}}
                    @endforeach

                </ul>
            </div>
            <div class="category">
                <h2>Tags</h2>
                <ul class="category-list">
                    @foreach ($tags as $tag)
                        <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                            <a href="#">{{$tag->name}}</a>
                            <span>({{$tag->posts->count()}})</span>
                        </li>
                        {{--  <option data-subtext="{{$category->slug}}" value="{{$category->id}}">{{$category->name}}</option>  --}}
                    @endforeach

                </ul>
            </div>
            <div class="popular-post">
                <h2>Popular Post</h2>
                @foreach ($popular_posts as $popular_post)
                    <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                @foreach ( $popular_post->images as $key=>$image)

                                    @if ($key == 0)
                                        <img style="height: 100%;width:100%" src="{{ asset($image->url) }}" alt="{{$image->name}}">
                                    @endif

                                @endforeach
                                {{--<img src="{{ asset('frontend/assets/popular-post/m-blog-1.jpg') }}" class="img" alt="blog1">  --}}
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; January 14,
                                    2019 {{-- {{ $popular_post->created_at->diffForHumans() }}--}}</span>
                                <span>2 Comments</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">{{$popular_post->sub_title}}</a>
                        </div>
                    </div>
                @endforeach
                {{--

                    <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                        <div class="post-image">
                            <div>
                                <img src="{{ asset('frontend/assets/popular-post/m-blog-2.jpg') }}" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                    2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                        <div class="post-image">
                            <div>
                                <img src="{{ asset('frontend/assets/popular-post/m-blog-3.jpg') }}" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                    2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                        <div class="post-image">
                            <div>
                                <img src="{{ asset('frontend/assets/popular-post/m-blog-4.jpg') }}" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                    2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                        <div class="post-image">
                            <div>
                                <img src="{{ asset('frontend/assets/popular-post/m-blog-5.jpg') }}" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                    2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>

                --}}
            </div>
            <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                <h2>Newsletter</h2>

                <div class="form-element">


                    <form method="POST" action="{{ route('newsletter') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-line col-">
                                <input type="email" class="input-element form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="name" autofocus placeholder="Entrez l'email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button class="btn form-btn" type="submit">Subscribe</button>
                    </form>

                </div>
            </div>
            <div class="popular-tags">
                <h2>Popular Tags</h2>
                <div class="tags flex-row">

                    @foreach ($popular_tags as $tag)
                        <span class="tag" data-aos="flip-up" data-aos-delay="100">{{$tag->name}}</span>
                    @endforeach
                    {{--  <span class="tag" data-aos="flip-up" data-aos-delay="100">Software</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="200">technology</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="300">travel</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="500">design</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="600">lifestyle</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="700">love</span>
                    <span class="tag" data-aos="flip-up" data-aos-delay="800">project</span>  --}}
                </div>
            </div>

        </aside>
    </div>
@endsection

@push('js')

    <script type="text/javascript">
        function suscribing(){

            event.preventDefault();
            document.getElementById('suscribing-form').submit();

                {{--  const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Êtes vous sûr?',
                    text: "Voulez-vous vraiment supprimé cette categorie!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Oui, supprimé!',
                    cancelButtonText: 'Non, annulé!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        event.preventDefault();
                        document.getElementById('suscribing-form').submit();

                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                        'Annulation',
                        'Annulé :)',
                        'error'
                        )
                    }
                })  --}}
        }
    </script>

@endpush

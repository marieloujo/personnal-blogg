<div class='container row'>
    <div class='footer-widgets-wrap'>
        <div class='footer common-widget section' id='footer-sec1' name='Section (Left)'>
            <div class='widget HTML' data-version='2' id='HTML4'>
                <div class='widget-title'>
                    <h3 class='title'> Récent Posts </h3>
                </div>
                <div class='widget-content'>
                    <ul class="custom-widget">
                        @foreach ( $new_posts->slice(0, 3)  as $new_post )
                            <li class="item-0">
                                <a class="post-image-link" href="">
                                    @foreach ( $new_post->images->slice(0, 1) as $image)
                                        <img src="{{ asset($image->url) }}" alt="{{$image->name}}" class="img post-thumb lazy-yard"  title="{{$image->name}}">
                                    @endforeach
                                </a>
                                <div class="post-info">
                                    <h2 class="post-title">
                                        <a href="">{{$new_post->title}}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date published" datetime="2016-08-23T15:00:00-07:00"> {{$new_post->created_at->isoFormat('MMMM d, YYYY')}}</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class='footer common-widget section' id='footer-sec2' name='Section (Center)'>
            <div class='widget Label' data-version='2' id='Label1'>
                <div class='widget-title'>
                    <h3 class='title'> Categories </h3>
                </div>
                <div class='widget-content list-label'>
                    <ul>
                    @foreach ( $categories as $category )
                        <li>
                            <a class="label-name" href=""> {{$category->name}} <span class="label-count">{{$category->posts->count()}}</span> </a>
                        </li>
                    @endforeach
                </ul>
                </div>
            </div>
            <div class='widget Label' data-version='2' id='Label2'>
                <div class='widget-title'>
                    <h3 class='title'> Tags </h3>
                </div>
                <div class='widget-content cloud-label'>
                    <ul>
                        @foreach ( $popular_tags as $popular_tag )
                            <li>
                                <a class="label-name" href=""> {{$popular_tag->name}} <span class="label-count">{{$popular_tag->posts->count()}}</span> </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class='footer common-widget section' id='footer-sec3' name='Section (Right)'>
            <div class='widget HTML FollowByEmail' data-version='2' id='HTML3 FollowByEmail2'>
                <div class='widget-title'>
                    <h3 class='title'> Newsletter </h3>
                </div>
                <div class='widget-content' style="background-color:#0b0e13;">
                    <span class="before-text">Abonnez-vous à la newsletter et recevez gratuitement l'info en continu.!</span>
                    <div class="follow-by-email-inner">
                        <form method="POST" action="{{ route('newsletter') }}">
                            @csrf
                            <div class="form-group">
                                <div class="form-line col-">
                                    <input type="email" class="input-element follow-by-email-address form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="name" autofocus placeholder="Entrez votre adresse email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button class="follow-by-email-submit" type="submit">Souscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='clearfix'></div>
<div id='sub-footer-wrapper'>
    <div class='container row'>
        <div class='copyright-area' style="color:#0b0e13">
            Crafted with <i aria-hidden='true' class='fa fa-heart'  style='color: red;margin:0 2px;'></i> by
            <a href='http://www.google.com/' id='mycontent' rel='dofollow' title='Free Blogger Templates'>TemplatesYard</a>
        </div>
    </div>
</div>

@extends('base')

@section('body')
<!-- Main Sllider Two Start -->
@include('template._partials.content.slider')
<!-- Main Sllider Two Start -->

<!--Department Two Start-->
<section class="department-two" style="padding: 10px">
    <div class="department-two__bg-one"
        style="background-image: url(assets/images/backgrounds/department-two-bg-1.png);"></div>
    <div class="department-two__bg-two"
        style="background-image: url(assets/images/backgrounds/department-two-bg-2.png);"></div>
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">ACTUALITÉS</span> <br>
            <strong>
                Découvrez les actualités récentes concernant PCA OUATTARA CLÉMENT
                <br> incluant ses activités et événements marquants.
            </strong>
        </div>
        <div class="row">
            <!--Department Two Single Start-->
            @foreach ($posts as $post)
                <div class="col-xl-3 col-lg-3 h-300">
                    <div class="department-two__single">
                        <div class="department-two__img-box">
                            <div class="department-two__img">
                                @if ($post->image)
                                    <img style="width: 500px; height: 300px;" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                                @endif
                            </div>
                            <div class="department-two__content">
                                <h3 class="department-two__title"><a href="{{ route('posts.show', $post) }}">
                                    {{ Str::limit(strip_tags($post->title), 20) }}
                                </h3>
                                <div class="department-two__icon bg-white">
                                    <img src="{{ asset('assets/images/icon/news-sidebar-bottom-box-icon.png') }}" alt="">
                                </div>
                            </div>
                            <div class="department-two__content-two">
                                <h3 class="department-two__title-two"><a href="{{ route('posts.show', $post) }}">
                                    {{ $post->title }}</a></h3>
                                <p class="department-two__text">{{ Str::limit(strip_tags($post->content), 45) }}</p>
                                <div class="department-two__btn-box">
                                    <a href="{{ route('posts.show', $post) }}" class="department-two__btn">
                                        En savoir plus<i
                                            class="icon-right-arrow"></i></a>
                                </div>
                                <div class="department-two__icon bg-white">
                                    <img src="{{ asset('assets/images/icon/news-sidebar-bottom-box-icon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--Department Two Single End-->
        </div>
    </div>
</section>
<!--Department Two End-->

<!--News One Start-->
<section class="news-one" style="padding: 10px">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">CONFÉRENCES</span> <br>
            <strong>
                Découvrez les conférences récentes animées par PCA OUATTARA CLÉMENT,
                <br>
                abordant divers sujets d'importance et d'actualité.
            </strong>
        </div>
        <div class="row">
            <!--News One Single Start-->
            @foreach ($posts_conf as $post)
                <div class="col-xl-3 col-lg-3 wow fadeInUp h-300" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                @if ($post->image)
                                    <img style="width: 500px; height: 350px;" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                                @endif
                            </div>
                            <div class="news-one__date">
                                <p>{{ $post->created_at->format('d') }} <br> {{ $post->created_at->translatedFormat('F') }}</p>
                            </div>
                        </div>
                        <div class="news-one__content" style="height: 250px;">
                            <div class="news-one__user-and-meta">
                                <div class="news-one__user">
                                    <div class="news-one__user-text">
                                        <p>publié par</p>
                                        <p>{{ $post->user->name }}</p>
                                    </div>
                                </div>
                            </div>
                            <h3 class="news-one__title"><a href="{{ route('posts.show', $post) }}">
                                    {{ Str::limit(strip_tags($post->title), 20) }}
                                </a>
                            </h3>
                            <div class="news-one__btn">
                                <a href="news-details.html">En savoir plus<i class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--News One Single End-->
        </div>
    </div>
</section>
<!--News One End-->v

@endsection

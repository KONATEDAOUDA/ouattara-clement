@extends('base')

@section('body')
 <!--News Two Start-->
<section class="news-two" id="news">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
             <h2 class="section-title__title">ÉDITO</h2>
            <p class="post-filter__sub-title">
                Ma vision sur divers sujets, notamment mon expérience acquise au fil des ans.
            </p>
        </div>
        <div class="row">
            <!--News Two Single Start-->
            @foreach ($posts_edito as $post)
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-two__single">
                        <div  class="news-two__date">
                            <p>{{ $post->created_at->format('d') }} <br> {{ $post->created_at->translatedFormat('F') }}</p>
                        </div>
                        <div class="news-two__img-box">
                            <div class="news-two__img">
                                <img style="width: 400px; height: 200px; object-fit: cover;" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                            </div>
                        </div>
                        <div class="news-two__content">
                            <h3 class="news-two__title"><a href="{{ route('posts.show', $post) }}">{{ Str::limit(strip_tags($post->title), 20) }}</a>
                            </h3>
                            <p class="news-two__text">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                            <div class="news-two__btn">
                                <a href="{{ route('posts.show', $post) }}">En savoir plus<i class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--News Two Single End-->
             <div class="mt-6">
                {{ $posts_edito->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
</section>
<!--News Two End-->

@endsection


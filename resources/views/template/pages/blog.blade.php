@extends('base')

@section('body')

<!--News Page Start-->
  <section class="news-page">
      <div class="container">
          <div class="row">
                <!--News One Single Start-->
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-lg-4">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="">
                                </div>
                                <div class="news-one__date">
                                    <p>30 <br> JAN</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <div class="news-one__user-and-meta">
                                    <div class="news-one__meta">
                                        <div class="icon">
                                            <span class="fas fa-newspaper"></span>
                                        </div>
                                        <div class="text">
                                            <p>: <strong> {{ $post->category->name ?? 'Sans catégorie' }}</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="news-one__title"><a href="news-details.html">Supporting local business to
                                        bounce back</a>
                                </h3>
                                <div class="news-one__btn">
                                    <a href="news-details.html">Read More<i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-lg-3 wow fadeInUp h-300" data-wow-delay="100ms">
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
                </div> -->
               
                
                @endforeach
                
              <!--News One Single End-->
          </div>
          @if ($posts->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $posts->nextPageUrl() }}">&rsaquo;</a></li>
         @endif
      </div>
  </section>
  <!--News Page End-->
@endsection

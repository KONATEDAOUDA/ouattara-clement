@extends('base')

@section('body')
<!--News Page Start-->
<section class="news-page" style="padding-top: 20px">

    <div class="post-filter-wrapper" style="padding-top: 100px; padding-bottom: 5px;">
        <div class="container">
            <div class="post-filter-header text-center" data-aos="fade-up" data-aos-delay="100">
                <h3 class="post-filter__title">Explorez mes actualités</h3>
                <p class="post-filter__sub-title">Découvrez les actualités par catégorie</p>
            </div>

            {{-- Boutons par catégorie --}}
            <ul class="post-filter list-unstyled d-flex justify-content-center flex-wrap" data-aos="fade-up" data-aos-delay="200">
                {{-- Bouton "Tous" --}}
                <li class="post-filter__item {{ request('category') ? '' : 'filter-active' }}" data-filter="*">
                    <a href="{{ route('blog') }}" class="post-filter__btn" onclick="javascript:window.location.href='{{ route('blog') }}'">
                        <span class="post-filter__text">Tous</span>
                    </a>
                </li>

                {{-- Boutons par catégorie --}}
                @foreach ($categories as $category)
                    @if (!in_array($category->name, ['Édito', 'PRIX OUATTARA CLEMENT', 'DISTINCTION OUATTARA CLEMENT']))
                        <li class="post-filter__item {{ request('category') == $category->id ? 'filter-active' : '' }}" data-filter=".category-{{ $category->id }}">
                            <a href="{{ route('blog', ['category' => $category->id]) }}" class="post-filter__btn" onclick="javascript:window.location.href='{{ route('blog', ['category' => $category->id]) }}'">
                                <span class="post-filter__text">{{ $category->name }}</span>
                                <span class="post-filter__count">({{ $category->posts_count ?? $category->posts->count() }})</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-xl-4 col-lg-4">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img style="width: 500px; height: 300px; object-fit: cover;" src="{{ asset('storage/' . $post->image) }}" alt="{{ Str::limit(strip_tags($post->title), 20) }}">
                            </div>
                            <div class="news-one__date">
                                <p>{{ $post->created_at->format('d') }} <br> {{ $post->created_at->translatedFormat('F') }}</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <div class="news-one__user-and-meta">
                                <div class="news-one__meta">
                                    <div class="icon">
                                        <span class="fas fa-newspaper"></span>
                                    </div>
                                    <div class="text">
                                        <p> <strong> {{ $post->category->name ?? 'Sans catégorie' }}</strong></p>
                                    </div>
                                </div>
                            </div>
                            <h3 class="news-one__title"><a href="{{ route('posts.show', $post) }}">
                                    {{ Str::limit(strip_tags($post->title), 20) }}
                                </a>
                            </h3>
                            <div class="news-one__btn">
                                <a href="{{ route('posts.show', $post) }}">En savoir plus<i class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
         <div class="mt-6">
            {{ $posts->appends(['category' => $category_id])->links() }}
        </div>
    </div>
</section>
  <!--News Page End-->
@endsection

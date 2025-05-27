@extends('base')

@section('body')
 <!--News Sidebar Start-->
<div class="news-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-sidebar__left">
                    <div class="news-sidebar__content">
                        <!--News Sidebar Single Start-->
                        <div class="news-sidebar__single">
                            <div class="news-sidebar__img">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                                <div class="news-sidebar__date">
                                    <p>{{ $post->created_at->format('d') }} <br> {{ $post->created_at->translatedFormat('F') }}</p>
                                </div>
                            </div>
                            <div class="news-sidebar__content-box">
                                <ul class="list-unstyled news-sidebar__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-newspaper"></span>
                                        </div>
                                        <div class="text">
                                            <p> <strong> {{ $post->category->name ?? 'Sans catégorie' }}</strong></p>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="news-sidebar__title">
                                   {{ $post->title }}
                                </h3>
                                <div class="quill-content">
                                    <p class="news-sidebar__text">
                                        {!! $post->content !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--News Sidebar Single Start-->
                        <div class="article-footer">
                            <p class="text-muted mb-3 oswald-322 text-end">
                                Publié le {{ $post->created_at->format('d M, Y') }}
                                par <strong>{{ $post->user->name }}</strong>
                            </p>
                            <div class="social-share">
                                <h4 class="oswald-322 text-start mb-1">Partager cette actualité</h4>
                                @include('template._partials.social-share', ['title' => $post->title])
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div style="padding-bottom:2px" class="sidebar__single sidebar__search text-center bg-success">
                       <h3 class="sidebar__title text-white p-3">Dans la même catégorie</h3>
                    </div>
                    <div style="padding-top:2px"  class="sidebar__single sidebar__post">
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach ($post->category->posts()->orderByDesc('created_at')->take(3)->get() as $last_post)
                            <li>
                                <div class="sidebar__post-image">
                                    <img style="width: 100px; height: 70px;" class="img-fluid" src="{{ asset('storage/' . $last_post->image) }}" alt="{{ $last_post->title }}">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="{{ route('posts.show', $last_post) }}"
                                           class="{{ $last_post->id === $post->id ? 'text-success' : '' }}">
                                            {{ Str::limit(strip_tags($last_post->title), 40) }}
                                        </a>
                                        <span class="sidebar__post-content-meta">
                                            <i class="fas fa-calendar"></i>Le {{ $last_post->created_at->format('d M, Y') }}
                                            par <strong>{{ $last_post->user->name }}</strong>
                                        </span>
                                    </h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Toutes les catégories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            @foreach ($categories as $category)
                                @if (!in_array($category->name, ['PRIX OUATTARA CLEMENT', 'DISTINCTION OUATTARA CLEMENT']))
                                    <li class="active">
                                        <a href="{{ route('blog', ['category' => $category->id]) }}">
                                            <p style="{{ $post->category_id == $category->id ? 'color:green; font-weight:bold' : '' }}">
                                                {{ $category->name }}
                                            </p>
                                            <span class="icon-right-arrow"></span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--News Sidebar End-->
@endsection

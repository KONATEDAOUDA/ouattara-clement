@extends('base')

@section('body')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li class="oswald-322"><a href="{{route('home')}}">Accueil</a></li>
            <li class="current oswald-322">Blog d’actualité</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section style="padding-top: 20px" id="portfolio" class="portfolio section">
      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters  bg-dark text-white" data-aos="fade-up" data-aos-delay="100">
                <li class="{{ request('category') ? '' : 'filter-active' }}">
                  <a href="{{ route('blog') }}"> <strong class="oswald-322 text-2xl">Tous</strong></a>
                </li>
                @foreach ($categories as $category)
                  @if (!in_array($category->name, ['Édito', 'PRIX OUATTARA CLEMENT', 'DISTINCTION OUATTARA CLEMENT']))
                    <li class="{{ request('category') == $category->id ? 'filter-active' : '' }}">
                      <a href="{{ route('blog', ['category' => $category->id]) }}"><strong class="oswald-322 text-2xl" >{{ $category->name }}</strong></a>
                    </li>
                  @endif
                @endforeach
              </ul>

            <div class="row gy-4  isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($posts as $post)
                <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-300">
                        @if ($post->image)
                            <div class="img-wrapper" style="height: 200px; width: 300px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;">
                            </div>
                        @endif
                        <div class="portfolio-info">
                            <h4 class="oswald-322">{{ $post->title }}</h4>
                            <p class="oswald-322">{{ $post->category->name ?? 'Sans catégorie' }}</p>
                            @if ($post->image)
                                <a href="{{ asset('storage/' . $post->image) }}" title="{{ $post->title }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                            @endif
                            <a href="{{ route('posts.show', $post) }}" title="Voir plus" class="details-link oswald-322">
                                <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div><!-- End Portfolio Container -->

            <div class="mt-6" style="float: right">
                @if ($posts->hasPages())
                    <ul class="pagination">
                        @if (!$posts->onFirstPage())
                            <li class="page-item"><a class="page-link" href="{{ $posts->previousPageUrl() }}">&lsaquo;</a></li>
                        @endif
                        @foreach ($posts->links()->elements as $element)
                            @foreach ($element as $page => $url)
                                @if ($page == $posts->currentPage())
                                    <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endforeach
                        @if ($posts->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $posts->nextPageUrl() }}">&rsaquo;</a></li>
                        @endif
                    </ul>
                @endif
            </div>
        </div>
      </div>
    </section><!-- /Portfolio Section -->
</main>
@endsection

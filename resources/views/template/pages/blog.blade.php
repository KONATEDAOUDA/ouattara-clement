@extends('base')

@section('body')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav style="margin: 70px;" class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{route('home')}}">Accueil</a></li>
            <li class="current">Blog d’actualité</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li class="{{ request('category') ? '' : 'filter-active' }}">
                  <a href="{{ route('blog') }}">Tous</a>
                </li>
                @foreach ($categories as $category)
                  <li class="{{ request('category') == $category->id ? 'filter-active' : '' }}">
                    <a href="{{ route('blog', ['category' => $category->id]) }}">{{ $category->name }}</a>
                  </li>
                @endforeach
              </ul>              

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">

                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Image" class="img-fluid">
                        @endif

                        <div class="portfolio-info">
                            <h4>{{ $post->title }}</h4>
                            <p>{{ $post->category->name ?? 'Sans catégorie' }}</p>

                            @if ($post->image)
                            <a href="{{ asset('storage/' . $post->image) }}" title="{{ $post->title }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                            @endif

                            <a href="{{ route('posts.show', $post) }}" title="Voir plus" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                        </div>
                    </div>
                @endforeach

            </div><!-- End Portfolio Container -->

            <div class="mt-6">
                {{ $posts->appends(['category' => $category_id])->links() }}
            </div>
            
        </div>

      </div>
      
    </section><!-- /Portfolio Section -->

</main>
@endsection

@extends('base')

@section('body')
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <img src="assets/img/ouattara_clement.png" alt="" data-aos="fade-in">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h2 class="text-white oswald-322">PCA OUATTARA CLEMENT</h2>
        <p class="text-white">
            <span class="typed text-white oswald-322" data-typed-items="EXPERT EN SANTÉ COMMUNAUTAIRE, RESPONSABLE D'ASSOCIATION, ENTREPRENEUR SOCIAL, PERSONNALITÉ POLITIQUE">
            </span>
            <span class="typed-cursor typed-cursor--blink"></span>
        </p>
        </div>
    </section><!-- /Hero Section -->

    <section class="text-center">
        <!-- Page Title -->
        <div class="title" data-aos="fade">
            <nav class="breadcrumbs">
                <div style="margin: 1px; padding: 1px;" id="resume" class="resume section">
                    <div class="row">
                        <div class="container col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100">
                            <div style="float: right" class="text-center">
                                <a href="{{ route('blog') }}" class="btn btn-success oswald-322">Voir toute l'actualité</a>
                            </div>
                            <h3 class="resume-title oswald-322">ACTUALITÉS</h3>
                            <p class="fst-italic py-3 oswald-322 text-xl">Découvrez les actualités récentes concernant PCA OUATTARA CLÉMENT, incluant ses activités et événements marquants.</p>
                        </div>
                    </div>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Section last article -->
        <section style="padding-top: 1px; margin-bottom: 20px;" id="portfolio" class="portfolio section">
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($posts as $post)
                            <div class="col-lg-3 col-md-3 portfolio-item isotope-item filter-app">
                                <div class="portfolio-content h-300">
                                    @if ($post->image)
                                        <div class="img-wrapper" style="height: 200px; width: 300px; overflow: hidden;">
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="Image" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;">
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
                </div>
            </div>
        </section><!-- /Section last articleSection -->

        <!-- Section Conférence -->
        <section style="padding-top: 1px; margin-bottom: 20px;" id="portfolio" class="portfolio section">
            <div class="container">
                <!-- Page Title -->
                <div class="title" data-aos="fade">
                    <nav class="breadcrumbs">
                        <div style="margin: 1px; padding: 1px;" id="resume" class="resume section">
                            <div class="row">
                                <div class="container col-lg-12 text-center" data-aos="fade-up" data-aos-delay="100">
                                    <div style="float: right" class="text-center">
                                        <a href="{{ route('blog', ['category' => $posts_conf_id]) }}"class="btn btn-success oswald-322">Voir toutes les conférences</a>
                                    </div>
                                    <h3 class="resume-title oswald-322">CONFÉRENCES</h3>
                                    <p class="fst-italic py-3 oswald-322 text-xl">Découvrez les conférences récentes animées par PCA OUATTARA CLÉMENT, abordant divers sujets d'importance et d'actualité.</p>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div><!-- End Page Title -->
                <div>
                    <div class="row gy-1">
                        @foreach ($posts_conf as $post)
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                                <div class="card shadow-sm">
                                    @if ($post->image)
                                        <div class="img-wrapper" style="height: 200px; overflow: hidden;">
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded-top" style="height: 100%; width: 100%; object-fit: cover;">
                                        </div>
                                    @endif
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-2  oswald-322" style="font-weight: bold;"><strong>{{ $post->title }}</strong></h5>
                                        <p class="card-text flex-grow-1 oswald-322">
                                            {{ Str::limit(strip_tags($post->content), 30) }}
                                        </p>
                                        <button class="text-center">
                                            <a href="{{ route('posts.show', $post) }}" class="btn btn-primary mt-3 align-self-start oswald-322">Voir plus</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section><!-- /Section Conférence -->

    </section>
</main>
@endsection

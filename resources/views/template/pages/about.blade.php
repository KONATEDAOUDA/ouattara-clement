@extends('base')

@section('body')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li class="oswald-322"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="current oswald-322">À propos</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section bg-dark text-white mt-3">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/img/profile-img.jpg') }}" style="width: 70%;" class="img-fluid" alt="Portrait de OUATTARA Clément">
                </div>
                <div class="col-lg-8 content">
                    <h2 class="oswald-322 text-white">PCA OUATTARA Clément</h2>
                    <p class="fst-italic py-1 oswald-322 text-xl">
                        PCA OUATTARA Clément
                        EXPERT EN SANTÉ COMMUNAUTAIRE, ENTREPRENEUR, RESPONSABLE D'ASSOCIATION ET PERSONNALITÉ POLITIQUE
                        Visionnaire autodidacte au service de la communauté nationale depuis plus de 30 ans. Sous son leadership,
                        la CNA-ESCOM réalise plus de 4,7 millions d'actes médicaux et accompagne plus de 104 000 naissances
                        annuellement à travers 40 établissements de santé. Une révolution sanitaire alliant humanité, innovation et accessibilité pour tous.
                    </p>
                    <p class="py-3">
                        <div class="d-flex flex-wrap justify-content-center gap-2 text-center">
                            <div class="badge-container">
                                <span class="badge rounded-circle bg-success oswald-322 p-5 m-2 text-white fs-5">30</span>
                                <p class="text-center oswald-322"><strong>Ans de leadership <br> au service communautaire</strong></p>
                            </div>
                            <div class="badge-container">
                                <span class="badge rounded-circle bg-success oswald-322 p-5 m-2 text-white fs-5">40</span>
                                <p class="text-center oswald-322"><strong>Établissements de santé <br> en Côte d'Ivoire</strong></p>
                            </div>
                            <div class="badge-container">
                                <span class="badge rounded-circle bg-success oswald-322 p-5 m-2 text-white fs-5">4,7</span>
                                <p class="text-center oswald-322"><strong>Millions actes médicaux <br> par an</strong></p>
                            </div>
                            <div class="badge-container">
                                <span class="badge rounded-circle bg-success oswald-322 p-5 m-2 text-white fs-5">104</span>
                                <p class="text-center oswald-322"><strong>Milles naissances <br> par an</strong></p>
                            </div>
                        </div>
                    </p>

                </div>
            </div>
        </div>
    </section><!-- /About Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">
        <div class="container">
            <div class="row">
                <!-- Colonne Gauche -->
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title oswald-322 text-start text-success">PRIX NATIONAUX ET INTERNATIONAUX</h3>
                    <div class="row h-100 justify-content-center">
                        @foreach ($posts_prix as $article)
                            <div class="d-flex flex-column justify-content-center align-items-start pb-0">
                                <h4 class="oswald-322 text-2xl text-center">{{ strtoupper($article->title) }}</h4>
                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid rounded my-1" style="height: 500px; width: 500px; object-fit: cover;">
                                <div class="quill-content oswald-322">
                                    <p class="text-justify">{!!Str::limit($article->content, 200) !!}</p>
                                </div>
                                <br>
                            </div>
                            <h4 class="oswald-322 text-start">{{ $article->created_at->format('d M, Y') }}</h4>
                            <div class="text-start">
                                <a href="{{ route('posts.show', $article) }}" class="btn btn-sm btn-success oswald-322 my-2">Consulter cet article</a>
                            </div>
                            <hr style="border-width: 1px; width: 80%; margin-bottom: 20px;">
                        @endforeach
                    </div>
                </div>

                <!-- Colonne Droite -->
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title oswald-322 text-start text-success">DISTINCTION</h3>
                    <div class="row h-100 justify-content-center">
                        @foreach ($posts_distc as $article)
                            <div class="d-flex flex-column justify-content-center align-items-start pb-0">
                                <h4 class="oswald-322 text-2xl text-center">{{ strtoupper($article->title) }}</h4>
                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid rounded my-2" style="height: 500px; width: 500px; object-fit: cover;">
                                <div class="quill-content oswald-322">
                                    <p class="text-justify">{!!Str::limit($article->content, 200) !!}</p>
                                </div>
                                <br>
                            </div>
                            <h4 class="oswald-322 text-end">{{ $article->created_at->format('d M, Y') }}</h4>
                            <div class="text-end">
                                <a href="{{ route('posts.show', $article) }}" class="btn btn-sm btn-success oswald-322 my-2">Consulter cet article</a>
                            </div>
                            <hr style="border-width: 1px; width: 80%; margin-bottom: 20px;">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Resume Section -->
</main>
@endsection

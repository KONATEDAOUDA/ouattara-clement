@extends('base')

@section('body')
<main class="main">

<!-- Section Édito -->
<section style="padding-top: 1px; margin-top: 120px;" id="edito" class="edito section">
    <div class="container">
        <!-- Page Title -->
        <div class="title" data-aos="fade" style="margin-bottom: 20px; margin-top: 1px;">
            <nav class="breadcrumbs bg-dark text-white p-2">
                <div class="container justify-content-center text-center">
                    <h3 class="oswald-322 text-2xl text-white"><strong>ÉDITO</strong></h3>
                    <p class="mb-0 oswald-322">
                        Vision de OUATTARA CLEMENT sur divers sujets,
                        notamment sur l'expérience acquise au fil des ans.
                    </p>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <div class="row gy-4">
            @foreach ($posts_edito as $post)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="card shadow-sm">
                        @if ($post->image)
                            <div class="img-wrapper" style="height: 200px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded-top" style="height: 100%; width: 100%; object-fit: cover;">
                            </div>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2"><span style="font-weight: bold;" class="oswald-322">{{ $post->title }}</span></h5>
                            <p class="card-text flex-grow-1 oswald-322">{{ Str::limit(strip_tags($post->content), 100) }}</p>

                            <p class="card-text text-muted mb-1">
                                <small class="text-muted oswald-322">
                                    Publié le {{ $post->created_at->format('d M, Y') }}
                                    par <strong>{{ $post->user->name }}</strong>
                                </small>
                            </p>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-primary mt-3 align-self-start oswald-322">Lire plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- /Section Édito -->


</main>
@endsection


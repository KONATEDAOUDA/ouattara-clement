@extends('base')

@section('body')
<main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a class="oswald-322" href="{{route('home')}}">Accueil</a></li>
                    <li class="current oswald-322"> <a href="{{ route('blog') }}">Actualité</a> / Détails</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="post-title oswald-322">{{ $post->title }}</h3>
                    <div class="article-content-wrapper">
                        <div class="quill-content oswald-322">
                            <p style="font-size: 20px; flex: 1; text-align: justify">
                                @if ($post->image)
                                    <img style="float: left; max-width: 300px;" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid featured-image m-3" width="450" height="300">
                                @endif
                                {!! $post->content !!}
                            </p>
                        </div>
                    </div>
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

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="services-list bg-dark text-white">
                        <h3 class="oswald-322 text-center mb-3 text-white">Dans la même catégorie</h3>
                        @foreach ($post->category->posts()->orderByDesc('created_at')->take(3)->get() as $last_post)
                            <div class="d-flex align-items-center">
                                @if($last_post->image)
                                    <img src="{{ asset('storage/' . $last_post->image) }}" alt="{{ $last_post->title }}" class="img-fluid" style="height: 80px; width: 80px; object-fit: cover; margin: 10px;">
                                @endif
                                <div style="margin: 0;">
                                    <a class="{{ isset($post) && $post->id == $last_post->id ? 'active' : '' }}"
                                    href="{{ route('posts.show', $last_post) }}">
                                        <span class="oswald-322 text-white">
                                            {{ $last_post->title }}
                                            <br>
                                            <em style="font-size: 12px">
                                                Publié le {{ $last_post->created_at->format('d M, Y') }}
                                                par <strong class="text-white">{{ $last_post->user->name }}</strong>
                                            </em>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr style="border-width: 2px; border-color: blue;">
                    <br>
                    <div class="services-list bg-dark text-white">
                        <h3 class="oswald-322 text-center mb-3 text-white">Les derniers titres</h3>
                        @foreach ($posts_refer as $last_post)
                        <div class="d-flex align-items-center">
                            @if($last_post->image)
                                <img src="{{ asset('storage/' . $last_post->image) }}" alt="{{ $last_post->title }}" class="img-fluid" style="height: 80px; width: 80px; object-fit: cover; margin: 10px;">
                            @endif
                            <div style="margin: 0;">
                                <a class="{{ isset($post) && $post->id == $last_post->id ? 'active' : '' }}"
                                href="{{ route('posts.show', $last_post) }}">
                                    <span class="oswald-322 text-white">
                                        {{ $last_post->title }}
                                        <br>
                                        <em style="font-size: 12px">
                                            Publié le {{ $last_post->created_at->format('d M, Y') }}
                                            par <strong class="text-white">{{ $last_post->user->name }}</strong>
                                        </em>
                                    </span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Service Details Section -->
</main>

<style>
    /* Styles pour le contenu de l'article */
    .post-title {
        font-size: 35px;
        margin-bottom: 15px;
        color: #2c5282;
        text-align: justify;
    }
    
    .article-content-wrapper {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: #333;
        overflow: hidden; /* Pour contenir les floats */
    }
    
    .featured-image {
        float: left;
        margin: 0 20px 20px 0;
        max-width: 300px;
        height: auto;
        border-radius: 4px;
    }
    
    .quill-content {
        font-size: 18px;
        text-align: justify;
        overflow: hidden; /* Pour contenir les floats internes */
    }
    
    .quill-content p {
        margin-bottom: 1.5rem;
        line-height: 1.8;
    }
    
    .quill-content img {
        max-width: 100%;
        height: auto;
        margin: 1rem auto;
        display: block;
        border-radius: 4px;
    }
    
    .quill-content strong {
        font-weight: 600;
    }
    
    .quill-content ul, .quill-content ol {
        margin: 1.5rem 0;
        padding-left: 2.5rem;
    }
    
    .quill-content ul li, .quill-content ol li {
        margin-bottom: 0.5rem;
    }
    
    .quill-content blockquote {
        border-left: 4px solid #2c5282;
        padding-left: 1.5rem;
        margin: 1.5rem 0;
        color: #4a5568;
        font-style: italic;
    }
    
    .article-footer {
        clear: both;
        margin-top: 2rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .featured-image {
            float: none;
            display: block;
            margin: 0 auto 20px;
            max-width: 100%;
        }
        
        .quill-content {
            font-size: 16px;
        }
        
        .post-title {
            font-size: 28px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Pour les images du contenu Quill
        document.querySelectorAll('.quill-content img').forEach(img => {
            img.classList.add('shadow-md', 'hover:shadow-lg', 'transition-all', 'duration-300', 'p-3');
            img.loading = 'lazy';
            img.style.maxWidth = '90%';
            img.style.maxHeight = '400px';
            img.style.objectFit = 'cover';
            
            // Ajout d'une légende si alt text existe
            // if (img.alt) {
            //     const figure = document.createElement('figure');
            //     const figcaption = document.createElement('figcaption');
            //     figcaption.className = 'text-left text-sm text-gray-600 mt-2';
            //     const filename = img.alt.split('/').pop().split('.')[0];
            //     figcaption.textContent = filename;
                
            //     img.parentNode.insertBefore(figure, img);
            //     figure.appendChild(img);
            //     figure.appendChild(figcaption);
            // }
        });
        
        // Pour l'image mise en avant
        const featuredImg = document.querySelector('.featured-image');
        if (featuredImg) {
            featuredImg.classList.add('shadow-lg', 'hover:shadow-xl', 'transition-all', 'duration-300');
        }
    });
</script>
@endsection
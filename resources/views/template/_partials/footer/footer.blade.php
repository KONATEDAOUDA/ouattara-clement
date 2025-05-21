<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__img">
        <img src="assets/images/resources/site-footer-img.jpg" alt="">
    </div>
    <div class="container">
        <div class="site-footer__middle">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__Contact">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">PCA OUATTARA CLÉMENT</h3>
                        </div>
                        <p class="footer-widget__Contact-text">
                            Président, Fondateur de la Confédération Nationale des
                            Établissements de Santé Communautaire (CNA-ESCOM)
                        </p>
                        <div class="site-footer__social">
                            <a href="https://www.facebook.com/profile.php?id=61573917903934"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.linkedin.com/in/ouattara-clement-24447a355/"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/@CNA-ESCOM-CI"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__link">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Actualité</h3>
                        </div>
                        <ul class="footer-widget__link-list list-unstyled">
                            @foreach ($posts as $post)
                                <li><a href="{{ route('posts.show', $post) }}">{{ Str::limit(strip_tags($post->title), 15) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__departments">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Conférences</h3>
                        </div>
                        <ul class="footer-widget__link-list list-unstyled">
                             @foreach ($posts_conf as $post)
                                <li><a href="{{ route('posts.show', $post) }}">{{ Str::limit(strip_tags($post->title), 15) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="footer-widget__column footer-widget__gallery">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Prix et distictions</h3>
                        </div>
                        <ul class="footer-widget__gallery-list list-unstyled clearfix">
                            @foreach ($posts_prix as $post)
                                <li>
                                    <div class="footer-widget__gallery-img">
                                        <img style="width: 80px; height: 80px; object-fit: cover;" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                                        <a href="{{ asset('storage/' . $post->image) }}" class="img-popup"><span class="fab fa-instagram"></span></a>
                                    </div>
                                </li>
                            @endforeach

                            @foreach ($posts_distc as $post)
                                <li>
                                    <div class="footer-widget__gallery-img">
                                        <img style="width: 80px; height: 80px object-fit: cover;" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                                        <a href="{{ asset('storage/' . $post->image) }}" class="img-popup"><span class="fab fa-instagram"></span></a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© Copyright 2025 by <a href="">PCA OUATTARA Clément</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->

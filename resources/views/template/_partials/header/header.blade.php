<header class="main-header-two">
    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">
            <div class="container">
                <div class="main-menu-two__wrapper-inner">
                    <div class="main-menu-two__logo">
                        <a href="{{route('home')}}"><img src="{{ asset('assets/images/pca/logo_n.png')}}" alt="PCA OUATTARA CLEMENT">
                        </a>
                        </a>
                    </div>
                    <div class="main-menu-two__right">
                        <div class="main-menu-two__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown megamenu current">
                                    <a href="{{route('home')}}">Accueil </a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('blog') }}">Actualité</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('edito') }}">Éditos</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('about') }}">À propos</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu-two__search-btn-box">
                            <div class="main-menu-two__search-box">
                            </div>
                            <div class="main-menu-two__btn-box">
                                <!-- Login space -->
                                @if (Route::has('login'))
                                    <nav class="flex items-center justify-end gap-4">
                                        @auth
                                            @if (auth()->check() && auth()->user()->role === 'manager_admin_role')
                                                <a href="{{ url('/dashboard') }}" class="thm-btn main-menu-two__btn">Dashboard</a>
                                            @endif
                                        @else

                                        @endauth
                                    </nav>
                                @endif
                                <!-- Login space -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

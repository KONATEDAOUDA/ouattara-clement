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
                    <div class="main-menu-two__right" style="margin:-10px">
                        <div class="main-menu-two__main-menu-box" style="padding-right: 5px">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown megamenu {{ request()->routeIs('home') ? 'current' : '' }}">
                                    <a href="{{route('home')}}">
                                        Accueil
                                    </a>
                                </li>
                                <li class="dropdown {{ request()->routeIs('blog') ? 'current' : '' }}">
                                    <a href="{{ route('blog') }}">
                                        Actualité
                                    </a>
                                </li>
                                <li class="dropdown {{ request()->routeIs('edito') ? 'current' : '' }}">
                                    <a href="{{ route('edito') }}">
                                        Éditos
                                    </a>
                                </li>
                                <li class="dropdown {{ request()->routeIs('about') ? 'current' : '' }}">
                                    <a href="{{ route('about') }}">
                                        À propos
                                    </a>
                                </li>
                                <li class="dropdown {{ request()->routeIs('contact') ? 'current' : '' }}">
                                    <a href="{{ route('contact') }}">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div style="padding: -15px; background-color: #00B050; color: white" class="main-menu-two__search-btn-box">
                            <div class="main-menu-two__search-box">
                            </div>
                            <div>
                                <!-- Login space -->
                                @if (Route::has('login'))
                                    <nav>
                                        @auth
                                            @if (auth()->check() && auth()->user()->role === 'manager_admin_role')
                                                <a href="{{ url('/dashboard') }}" class="main-menu-two__btn">Dashboard</a>
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
<style>
    .main-menu__list .current > a {
        color: #00B050; /* Pure green color */
    }
</style>


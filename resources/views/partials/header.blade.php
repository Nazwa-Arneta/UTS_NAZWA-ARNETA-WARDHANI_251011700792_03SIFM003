<nav class="navbar navbar-expand-lg navbar-dark terrava-navbar sticky-top">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-2"
            href="{{ route('home') }}">

            <img
                src="{{ asset('assets/images/logo.jpeg') }}"
                alt="Logo TERRAVA"
                class="brand-logo">

            <span class="brand-name">TERRAVA<span>.</span></span>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('catalog', 'camp-gears.show') ? 'active' : '' }}"
                        href="{{ route('catalog') }}">
                        Catalog
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
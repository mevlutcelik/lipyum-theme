<header id="#top">

    <nav class="main-navigation navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home-page') }}"><img width="195" height="48" style="width: 12.172rem;height: 3rem;" src="{{ asset('images/lipyum/lipyum-yatay.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a title="Anasayfa" class="nav-link {{ Route::is('home-page') ? 'active' : null }}" href="{{ route('home-page') }}">Anasayfa</a>
{{--                        <a title="Anasayfa" class="nav-link" href="{{ route('login') }}">Giriş Yap</a>--}}
{{--                        <a title="Anasayfa" class="nav-link" href="{{ route('register') }}">Üye Ol</a>--}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

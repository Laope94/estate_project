<head>
    <title>bytvdome.sk | @yield('title') </title>
    <link href="{{asset('/css/public_pages.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @section('includes')
        @show
</head>
<body>
<div>
    <div class="web-logo-container"><img class="web-logo" src="{{asset('/images/web-logo.png')}}"></div>
    <div class="nav-container">
        @section('menu')
            <nav>
                <a class="nav-link" href="/" title="Domov">Domov</a>
                <a class="nav-link" href="/inzeraty" title="Hľadať nehnutelnosť">Hľadať nehnutelnost</a>
                <a class="nav-link" href="/pridat-inzerat" title="Pridať inzerát">Pridať inzerát</a>
                <a class="nav-link" href="/kontakt" title="Kontakt">Kontakt</a>
                @if (Auth::check())
                    @if(Auth::user()->privilege==1)
                    <a class="nav-link" href="/profil" title="Môj profil">Môj profil</a>
                        @elseif(Auth::user()->privilege>1 && Auth::user()->privilege<4)
                        <a class="nav-link" href="/estate-cms" title="Estate CMS">Estate CMS</a>
                        @elseif(Auth::user()->privilege>=4)
                        <a class="nav-link" href="/admin-tools/showUsers" title="Admin">Admin</a>
                    @endif
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           title="Odhlásiť sa"><i class="fas fa-sign-out-alt"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              hidden>{{ csrf_field() }}</form>
                @else
                    <a class="nav-link" href="/login" title="Prihlásenie">Prihlásenie a registrácia</a>
                @endif
            </nav>
    </div>
    <div id="mobile-icon" class="menu-mobile-awesome"><i class="fas fa-bars"></i></div>
    <div id="mobile-menu" class="nav-container-mobile">
        <nav>
            <div id="close-nav"><i class="far fa-times-circle"></i></div>
            <a class="nav-mobile-link" href="/" title="Domov">Domov</a>
            <hr>
            <a class="nav-mobile-link" href="/inzeraty" title="Hľadať nehnutelnosť">Hľadať nehnutelnost</a>
            <hr>
            <a class="nav-mobile-link" href="/pridat-inzerat" title="Pridať inzerát">Pridať inzerát</a>
            <hr>
            <a class="nav-mobile-link" href="" title="Kontakt">Kontakt</a>
            <hr>
            @if (Auth::check())
                @if(Auth::user()->privilege==1)
                    <a class="nav-mobile-link" href="/profil" title="Môj profil">Môj profil</a>
                @elseif(Auth::user()->privilege>1 && Auth::user()->privilege<4)
                    <a class="nav-mobile-link" href="/estate-c" title="Estate CMS">Estate CMS</a>
                @elseif(Auth::user()->privilege>=4)
                    <a class="nav-mobile-link" href="/admin-tools" title="Admin">Admin</a>
                @endif
            <hr>
                <a class="nav-mobile-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   title="Odhlásiť sa">Odhlásiť sa</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      hidden>{{ csrf_field() }}</form>
            @else
                <a class="nav-mobile-link" href="/login" title="Prihlásenie">Prihlásenie a registrácia</a>
            @endif
        </nav>
    </div>
    <div class="intro-page-container"></div>
    @show
</div>
<script src="{{ asset('js/master-queries.js') }}"></script>
@yield('skripty')
<footer>
    <div class="upper-footer">
        <div class="upper-footer-container">
            ©2018 bytvdome.sk<br>
            Všetky práva vyhradené.
        </div>
        <div class="footer-social-container">
            Sledujte nás aj na sociálnych sieťach.<br>
            <div class="round-button-container">
                <a href="">
                    <div class="round-button"><i class="fab fa-facebook-f awesome-social"></i></div>
                </a>
                <a href="">
                    <div class="round-button"><i class="fab fa-instagram awesome-social"></i></div>
                </a>
                <a href="">
                    <div class="round-button"><i class="fab fa-twitter awesome-social"></i></div>
                </a>
                <a href="">
                    <div class="round-button"><i class="fab fa-google-plus-g awesome-social"></i></div>
                </a>
            </div>
        </div>
    </div>

    <div>

    </div>
    <div class="lower-footer">
        <div class="footer-unicorn">
            <span class="unicorn-created">created by</span>
            <img class="unicorn-logo" src="{{ asset('/images/unicorn.png') }}">
            <span class="unicorn-sh">Unicorn Software House</span>
        </div>
    </div>
</footer>
</body>
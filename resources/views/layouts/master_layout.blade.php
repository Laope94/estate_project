<head>
    <title>bytvdome.sk | @yield('title') </title>
    <link href="{{asset('/css/public_pages.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
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
                <a class="nav-link" href="">Vyhľadať nehnuteľnosť</a>
                <a class="nav-link" href="">Realitné kancelárie</a>
                <a class="nav-link" href="">Kontakt</a>
                @if (Auth::check())
                    <a class="nav-link" href="/profil" title="Môj profil">Môj profil</a>
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       title="Odhlásiť sa"><i class="fas fa-sign-out-alt"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">{{ csrf_field() }}</form>
                @else
                    <a class="nav-link" href="/login" title="Prihlásenie">Prihlásenie a registrácia</a>
                @endif
            </nav>
    </div>
    <div class="intro-page-container"></div>
    @show
</div>
</body>

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

@yield('skripty')
<head>
    <title>@if(Auth::user()->privilege>3)
            Admin Tools
        @else
            Estate CMS
        @endif</title>
    <link href="{{asset('/css/dashboard.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @section('includes')
    @show
</head>
<body>

<div class="dash-container">
    <div>
        <div id="dash" class="dash">
            <div class="dash-title-container">
                <h1>
                    @if(Auth::user()->privilege>3)
                        Admin Tools
                    @else
                        Estate CMS
                    @endif
                </h1>
            </div>
            <div class="dash-title-row">
                <a class="dash-to-home" href="/home" title="Návrat na hlavnú stránku">
                    <span>
                         <i class="fas fa-arrow-left"></i> Hlavná stránka
                    </span>
                </a>
                <i id="hide-dash" class="far fa-times-circle dash-awesome" title="Skryť panel"></i>
            </div>
            <div class="dash-user-details">
            Prihlásený: {{Auth::user()->name.' '.Auth::user()->surname}}<br>
            Úroveň oprávnení: @if(Auth::user()->privilege==2)
                zamestnanec kancelárie<br>
                Kancelária: {{Auth::user()->agency_id}} <!--TODO: namiesto ID názov kancelárie -->
            @elseif(Auth::user()->privilege==3)
                administrátor kancelárie<br>
                Kancelária: {{Auth::user()->agency_id}} <!--TODO: namiesto ID názov kancelárie -->
            @elseif(Auth::user()->privilege==4)
                admin
            @elseif(Auth::user()->privilege==5)
                superadmin
            @endif
            </div>
            <nav>
                @if(Auth::user()->privilege==2 || Auth::user()->privilege==3)
                    <a href="/estate-cms/inzeraty">
                        <div class="dash-link-container">Správa inzerátov</div>
                    </a>
                    <hr>
                @endif
                @if(Auth::user()->privilege==3)
                    <a href="/estate-cms/zamestnanci">
                        <div class="dash-link-container">Správa zamestnancov</div>
                    </a>
                    <hr>
                    <a href=""> <!-- TODO: update kancelárie, upraviť view na pridávanie -->
                        <div class="dash-link-container">Správa kancelárie</div>
                    </a>
                    <hr>
                    <a href=""> <!-- TODO: napojiť view s grafmi -->
                        <div class="dash-link-container">Štatistiky</div>
                    </a>
                    <hr>
                @endif
                @if(Auth::user()->privilege==4 || Auth::user()->privilege==5)
                    <a href="/admin-tools/showUsers"> <
                        <div class="dash-link-container">Správa používateľov</div>
                    </a>
                    <hr>
                    <a href="/admin-tools/showEstates">
                        <div class="dash-link-container">Správa inzerátov</div>
                    </a>
                    <hr>
                    <a href="/admin-tools/kancelarie">
                        <div class="dash-link-container">Správa kancelárií</div>
                    </a>
                    <hr>
                @endif
                @if(Auth::user()->privilege==5)
                    <a href="/admin-tools/showUsersOfPrivilege/{{ '4' }}">
                        <div class="dash-link-container">Správa adminov</div>
                    </a>
                    <hr>
                @endif
                <a href="">
                    <a class="dash-link-container" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       title="Odhlásiť sa">Odhlásiť sa</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          hidden>{{ csrf_field() }}</form>
                </a>
                @section('menu')
                @show
            </nav>
        </div>
        <div id="dash-display" class="dash-display">
            <i class="fas fa-arrow-right"></i>
        </div>
    </div>
    <div class="dash-content-container">
        <div class="dash-content">
            <h2 class="dash-content-title">@yield('title')</h2>

            @section('content')
            @show
        </div>
        <footer>
            <div>bytvdome.sk | created by unicorn software house</div>
        </footer>
    </div>

</div>
<script src="{{asset('js/dash.js')}}">
</script>
</body>
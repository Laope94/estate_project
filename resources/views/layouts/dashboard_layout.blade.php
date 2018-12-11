<head>
    <title>Estate CMS</title>
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
                <div class="dash-title-row">
                    <a class="dash-to-home" href="/home" title="Návrat na hlavnú stránku">
                    <span>
                         <i class="fas fa-arrow-left"></i> Hlavná stránka
                    </span>
                    </a>
                    <i id="hide-dash" class="far fa-times-circle dash-awesome" title="Skryť panel"></i>
                </div>
                <h1>
                    @if(Auth::user()->privilege>3)
                        Admin Tools
                    @else
                        Estate CMS
                    @endif
                </h1>
            </div>
            Prihlásený: {{Auth::user()->name.' '.Auth::user()->surname}},
            @if(Auth::user()->privilege==2)
                zamestnanec kancelárie
                @elseif(Auth::user()->privilege==3)
                administrátor kancelárie
                @elseif(Auth::user()->privilege==4)
                admin
                @elseif(Auth::user()->privilege==5)
                superadmin
                @endif
            <nav>
                <a href=""><div class="dash-link-container">Pridať inzerát</div></a>
                <a href=""><div class="dash-link-container">Správa inzerátov</div></a>
                <a href=""><div class="dash-link-container">Správa zamestnancov</div></a>
                <a href=""><div class="dash-link-container">Správa kancelárie</div></a>
                <a href=""><div class="dash-link-container">Štatistiky</div></a>
                <a href=""><div class="dash-link-container">Správa užívateľov</div></a>
                <a href=""><div class="dash-link-container">Správa adminov</div></a>
                <a href=""><div class="dash-link-container">Odhlásiť sa</div></a>
                @section('menu')
                @show
            </nav>
        </div>
        <div id="dash-display" class="dash-display" hidden>
            <i class="fas fa-arrow-right"></i>
        </div>
    </div>
    <div style="width: 100%;">
        <div class="dash-content">
            @section('content')
            @show
            @php
                echo Auth::user()->privilege;
            @endphp
        </div>
        <footer>
            <div>bytvdome.sk | created by unicorn software house</div>
        </footer>
    </div>

</div>
<script>
    $(document).ready(function () {
        $('#hide-dash').on('click', function () {
            $("#dash").hide("slow", function () {
                $("#dash-display").show("slow");
            });

        });
        $('#dash-display').on('click', function () {
            $("#dash-display").hide("slow", function () {
                $("#dash").show("slow");
            })
        })
    });
</script>
</body>
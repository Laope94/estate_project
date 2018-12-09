@extends('layouts.master_layout')
@section('title', 'Domov')
@section('menu')
    @parent
    <div class="content-container">
        <div style="height: 100%;">
            <div class="intro-title-wrapper">
                <h1 class="intro-title">Nájdeme pre Vás to pravé.</h1>
            </div>

            <div class="chevron-circle-container"><i id="scroll-down" class="fas fa-chevron-circle-down arrow-down"></i></div>
        </div>
        <div id="about" class="about-container">
            <div class="title-container">
                <h2 class="l-second-title title-dark">U nás nájdete</h2>
            </div>
            <div class="column-container">
                <div class="column">
                    <div class="single-container">
                        <div>
                            <i class="fas fa-city awesome-about"></i><br><span class="about-text">1000k+<br>realitných kancelárií</span>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="double-container">
                        <div class="single-container">
                            <div>
                                <i class="fab fa-connectdevelop awesome-about"></i><br><span
                                        class="about-text">100k+<br>inzercií</span>
                            </div>
                        </div>
                    </div>
                    <div class="double-container">
                        <div class="single-container">
                            <div>
                                <i class="fas fa-users awesome-about"></i><br><span class="about-text">30k+<br>návštevníkov</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="single-container">
                        <div>
                            <i class="fas fa-user-tie awesome-about"></i><br><span class="about-text">10k+<br>realitných agentov</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="quick-search-container">
            <h2 class="l-second-title title-light">Rýchle vyhľadávanie</h2>
            <div class="bar-container">
            <label for="tags"></label>
            <input id="tags" class="quick-search-bar" placeholder="Zadaj okres..." onfocus="this.placeholder=''"
                   onblur="this.placeholder='Zadaj okres...'">
            </div>
        </div>

        <div class="newest-container">

            <div class="flex-container">
                @foreach($inzeraty as $inzerat)
                <div class="newest-card">@include('inzerat/inzerat_karta', ['uuid'=>$inzerat->UUID,'typ'=>$inzerat->type,'cena'=>$inzerat->price,
                 'predaj'=>$inzerat->issale, 'lokalita'=>$inzerat->village, 'rozloha'=>$inzerat->area, 'izby'=>$inzerat->room_number, 'id'=>$inzerat->id,
                 'UUID'=>$inzerat->UUID])</div>
                    @endforeach
            </div>
        </div>
    </div>
    <script src="{{ asset('js/home-queries.js') }}"></script>
@endsection

@extends('layouts.master_layout')
@section('title', 'Domov')
@section('menu')
    @parent
    <div class="content-container">
        <div class="intro-title-wrapper">
            <h1 class="intro-title">Nájdeme pre Vás to pravé.</h1>
        </div>
        <div class="chevron-circle-container"><i class="fas fa-chevron-circle-down arrow-down"></i></div>
        <div class="about-container">
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
                                <i class="fab fa-connectdevelop awesome-about"></i><br><span class="about-text">100k+<br>inzercií</span>
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
            <input class="quick-search-bar" type="text" placeholder="Zadaj okres..." onfocus="this.placeholder=''"
                   onblur="this.placeholder='Zadaj okres...'">
        </div>

        <div class="newest-container">
            <h2 class="l-second-title title-dark">Najnovšie inzeráty</h2>
            <div class="flex-container">
                <div class="newest-card">@include('inzerat_karta', ['cena'=>'340', 'lokalita'=>'Bratislava IV', 'rozloha'=>'60'])</div>
                <div class="newest-card">@include('inzerat_karta', ['cena'=>'900', 'lokalita'=>'Spišská Nová Ves', 'rozloha'=>'52'])</div>
                <div class="newest-card">@include('inzerat_karta', ['cena'=>'500', 'lokalita'=>'Vrakuňa', 'rozloha'=>'35'])</div>
                <div class="newest-card">@include('inzerat_karta', ['cena'=>'340', 'lokalita'=>'Bratislava IV', 'rozloha'=>'60'])</div>
                <div class="newest-card">@include('inzerat_karta', ['cena'=>'900', 'lokalita'=>'Spišská Nová Ves', 'rozloha'=>'52'])</div>
                <div class="newest-card">@include('inzerat_karta', ['cena'=>'500', 'lokalita'=>'Vrakuňa', 'rozloha'=>'35'])</div>
            </div>
        </div>

    </div>


@endsection
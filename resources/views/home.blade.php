@extends('layouts.master_layout')
@section('title', 'Domov')
@section('menu')
    @parent
    <div style="background: #F6F6F6;">

            <div class="intro-title-wrapper">
                <h1 class="intro-title">Nájdeme pre Vás to pravé.</h1>
            </div>
            <div class="chevron-circle-container"><i class="fas fa-chevron-circle-down arrow-down"></i></div>

        <div style="height: 90%;"><h1 style="text-align: center">U nás nájdete</h1>
            <div>
                <i class="fab fa-connectdevelop awesome-about"></i> <br> 100k+ inzercií
            </div>
            <div>
                <i class="fas fa-users awesome-about"></i> <br> 30k+ návštevníkov
            </div>
            <div>
                <i class="fas fa-city awesome-about"></i> <br> 1000k+ realitných kancelárií
            </div>
            <div>
                <i class="fas fa-user-tie awesome-about"></i> <br> 10k+ realitných agentov
            </div>
        </div>
        <div class="quick-search-container">
            <h1 class="search-bar-title">Rýchle vyhľadávanie</h1>
            <input class="quick-search-bar" type="text" placeholder="Zadaj okres..." onfocus="this.placeholder=''"
                   onblur="this.placeholder='Zadaj okres...'" style="width: 80%;">
        </div>

        <div style="height: 33%;"><h1 style="text-align: center">Najnovšie inzeráty</h1></div>
    </div>


@endsection
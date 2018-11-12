@extends('layouts.master_layout')
@section('title', 'Domov')
@section('menu')
    @parent
<div style="background: #F6F6F6;">
    <div class="intro-page-container">
        <div class="intro-title-wrapper">
        <h1 class="intro-title">Nájdeme pre Vás to pravé.</h1>
        </div>
    </div>
    <div style="height: 90%;"><h1 style="text-align: center">U nás nájdete</h1>
        100k+ inzercií <br>
        30k+ návštevníkov <br>
        1000k+ realitných kancelárií <br>
        10k+ realitných agentov <br>
    </div>
    <div class="quick-search-container">
        <h1 class="search-bar-title">Rýchle vyhľadávanie</h1>
        <input class="quick-search-bar" type="text" placeholder="Zadaj okres..." onfocus="this.placeholder=''" onblur="this.placeholder='Zadaj okres...'" style="width: 80%;">
    </div>

    <div style="height: 33%;"><h1 style="text-align: center">Najnovšie inzeráty</h1></div>
</div>


    @endsection
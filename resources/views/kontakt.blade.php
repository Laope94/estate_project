@extends('layouts.master_layout')
@section('title', 'Kontakt')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent
    <div class="content-container">
        <div class="overlay">
            <div class="login-register-container">
                <div class="flex-container">
                    <div class="register-card">
                        <h2 class="register-title">Kontakt</h2>
                        <div class="register-inner-flex">
                            <div class="contact-container"><h3>Neváhajte nás kontaktovať.<br> Radi Vám pomôžeme. </h3>
                                <img src="images/wamen.jpg">
                                <p>
                                    Vybrali ste si z našej ponuky nehnuteľností, chcete predať Váš byt, dom alebo
                                    pozemok?
                                    Alebo sa chcete informovať, ako najlepšie prenajať Vašu nehnuteľnosť?
                                    Neváhajte sa na nás obrátiť.</p>
                                <p>
                                    Zavolajte nám, napíšte alebo nás navštívte. Všetko, čo potrebujete, môžete vyriešiť
                                    pri šálke kávy alebo čaju v diskrétnom prostredí našich kancelárií.
                                    Tešíme sa na Vašu návštevu.
                                </p>
                            </div>
                            <div class="contact-container"><h3>Kontaktné informácie</h3>
                                <p><i class="fas fa-mobile-alt"></i> 01 23 45 678</p>
                                <p><i class="fas fa-phone"></i> 0904123456</p>
                                <p><i class="far fa-envelope"></i>info@bytvdome.sk</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
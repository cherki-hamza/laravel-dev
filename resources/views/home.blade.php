@extends('layouts.master')

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to DONORNATION</h1>
            <h2>Be the reason for someone's heartbeat</h2>
            <h3>One pint of blood can save the live </h3>

            <a href="#about" class="btn-get-started scrollto">Donner du sang </a>
            <a href="{{ url('/blood-donation-process') }}" class="btn-get-started1 scrollto">S'informer </a>
        </div>
    </section><!-- End Hero -->

    <section class="RRR">

        <div class="flex-container">

            <div class="flex-box1">
                <div>
                    <h1> Lieu de don </h1>
                </div>

                <div> <button> SAVOIR PLUS</button></div>
            </div>

            <div class="flex-box2">
                <div>
                    <h1> Critere de don </h1>
                </div>
                <div> <button> SAVOIR PLUS</button> </div>
            </div>

            <div class="flex-box3">
                <div>
                    <h1> Processus de don </h1>
                </div>
                <div><button> SAVOIR PLUS</button></div>
            </div>
        </div>
    </section>
@endsection

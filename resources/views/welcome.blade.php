@extends('layouts.main')

@section('test')
    <!-- Qui dentro codice del main -->
    
    <section class="section-1">
        <div class="jumbotron">
            {{-- <img src="{{ Vite::assets('/resources/img/jumbotron.jpg') }}" alt="Jumbo"> --}}
        </div>

        <div class="section-cards">
            <div class="container">

            </div>
        </div>
    </section>


    @if(count($comics) > 0)
    <ul>
        @foreach($comics as $comic)
            <li>
                {{ $comic['title'] }}
            </li>
        @endforeach
    </ul>
    @else
        <h3>
            Non ci sono fumetti
        </h3>
    @endif

@endsection
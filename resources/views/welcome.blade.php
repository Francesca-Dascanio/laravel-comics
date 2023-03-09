@extends('layouts.main')

@section('content')
    <!-- Qui dentro codice del main -->
    <div>
        Ciao
    </div>

    @if(count($comics) > 0)
    <ul>
        @foreach($comics as $comic)
            <li>
                {{ comic[title] }}
            </li>
        @endforeach
    </ul>
    @else
        <h3>
            Non ci sono fumetti
        </h3>
    @endif

@endsection
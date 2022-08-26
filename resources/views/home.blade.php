@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card">
                    <h3>{{ $movie->title}}</h3>
                    <h4>Titolo originale: {{ $movie->original_title}}</h4>
                    <h5>Nazionalità: {{ $movie->nationality}}</h5>
                    <h5>Data produzione: {{ $movie->date}}</h5>
                    <h5>Voto medio: {{ $movie->vote}}</h5>
                </div>
            </div>
        @endforeach
    </div>
@endsection



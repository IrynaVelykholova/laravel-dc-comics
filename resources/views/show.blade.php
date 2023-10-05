@extends('layouts.public')

@section('content')
    <div class="container mt-5">

        <div class="d-flex mb-5">
            <div>
                <img src="{{ $comic['thumb'] }}" class="card-show">
            </div>
            <div>
                <h4 class="fw-bold">{{ $comic->title }}</h4>
                <p>{{ $comic->description }}</p>
                <p><strong>Price:</strong> ${{ $comic->price }}</p>
                <p><strong>Series: </strong>{{ $comic->series }}</p>
                <p><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
                <p><strong>Type: </strong> {{ $comic->type }}</p>
                <p><strong>Artists: </strong> {{ implode(', ' , $comic->artists) }}</p> 
                <p><strong>Writers: </strong> {{ implode(', ' , $comic->writers) }}</p>
            </div>
        </div>

        <a href="{{ route("index") }}">Torna Indietro</a>
        <div></div>
        <button class="btn btn-warning"><a href="{{ route('edit', $comic->id) }}">Modifica</a></button>
        <form action="{{ route('destroy', ['id' => $comic->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
        
    </div>
@endsection
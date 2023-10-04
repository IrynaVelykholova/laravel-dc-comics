@extends("layouts.public")

@section("content")
    <div class=" black-main">
        <img class="img-jumbo" src="./images/jumbotron.jpg" alt="">

        <div class="text-center position-relative">
            <button class="position-absolute button-blue button-absolute">CURRENT SERIES</button> 

            <div class="row row-cols-6 gy-3 mt-5 pb-3 card-container">
                @foreach ($dati as $comic)
                <!-- ciclo for per le card -->
                    <div class="card bg-black">
                        <img src="{{ $comic['thumb'] }}">
                        
                        <a href="{{ route('show', $comic->id)}}">
                            <div class="card-body text-white">{{ $comic['title'] }}</div>
                        </a>
                    </div>


                @endforeach
                <button class="button-blue button-load">LOAD MORE</button>

                <button class="button-load"><a href="{{ route('create') }}">AGGIUNGI UN COMIC</a></button>

            </div>
        </div>
    </div>
@endsection

@extends("layouts.public")

@section("content")
    <div class="container">
        <form action="{{ route('store') }}" method="POST">
            @csrf()

            <div class="mb-3"><label class="form-label">Title</label><input type="text" class="form-control" name="title"></div>

            <div class="mb-3"><label class="form-label">Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>

            <div class="mb-3"><label class="form-label">Image</label><input type="text" class="form-control" name="thumb"></div>
            <div class="mb-3"><label class="form-label">Price</label><input type="text" class="form-control" name="price"></div>
            <div class="mb-3"><label class="form-label">Series</label><input type="text" class="form-control" name="series"></div>
            <div class="mb-3"><label class="form-label">Sale Date</label><input type="date" class="form-control" name="sale_date"></div>
            <div class="mb-3"><label class="form-label">Type</label><input type="text" class="form-control" name="type"></div>

            <div class="mb-3"><label class="form-label">Artists</label><input type="text" class="form-control" name="artists"></div>
            <div class="mb-3"><label class="form-label">Writers</label><input type="text" class="form-control" name="writers"></div>


            <a class="btn btn-secondary" href="{{ route("index") }}">Annulla</a>
            <button class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection
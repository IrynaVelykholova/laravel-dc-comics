@extends("layouts.public")

@section("content")
    <div class="container">
        <form action="{{ route('update', $comic->id) }}" method="POST">
            @csrf()
            @method('put')

            <div class="mb-3">
                <label class="form-label">Title</label><input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label @error('description') is-invalid @enderror">Description</label>
                <textarea class="form-control" name="description">{{ old('description', $comic->description) }}</textarea>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Image</label><input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label><input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Series</label><input type="text" class="form-control @error('series') is-invalid @enderror" name="series" value="{{ old('series', $comic->series) }}">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Sale Date</label><input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale-date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Type</label><input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type', $comic->type) }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Artists</label><input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" value="{{ old('sale_date', $comic->sale_date) }}">
                @error('artists')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Writers</label><input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" value="{{ old('writers', implode(",", $comic->writers)) }}">
                @error('writers')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <a class="btn btn-secondary" href="{{ route("index") }}">Annulla</a>
            <button class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection

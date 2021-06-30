@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Modifica:
            <a href="{{ route('comics.show',$comic) }}">{{ $comic->title }}</a>
        </h1>
        <div class="row col-8 offset-2 pt-5">
            <form action="{{ route('comics.update', $comic) }}" method="post">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="title" class="form-label">Nome prodotto</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $comic->title  }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea  id="description" name="description" class="form-control" rows="6">{{ $comic->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">tipo</label>
                    <select  id="type" name="type" class="form-control">
                        <option value="lunga" @if ($comic->type === 'lunga') selected @endif>lunga</option>
                        <option value="corta" @if ($comic->type === 'corta') selected @endif>corta</option>
                        <option value="lunghissima" @if ($comic->type === 'lunghissima') selected @endif>lunghissima</option>
                        <option value="cortissima" @if ($comic->type === 'cortissima') selected @endif>cortissima</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="text" id="image" name="image" class="form-control" value="{{ $comic->image }}">
                </div>

                <div class="mb-3">
                    <label for="weight" class="form-label">Peso</label>
                    <input type="text" id="weight" name="weight" class="form-control" value="{{ $comic->weight }}">
                </div>

                <div class="mb-3">
                    <label for="cooking_time" class="form-label">Tempo di cottura</label>
                    <input type="text" id="cooking_time" name="cooking_time" class="form-control" value="{{ $comic->cooking_time }}">
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>

            </form>

        </div>
    </div>
@endsection
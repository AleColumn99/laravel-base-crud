@extends('layouts.main')

@section('content')
    <section class="container">

        <div>
            <h1>{{ $comic->title }}</h1>
        </div>

        <div class="my-3">
            <span class="badge bg-primary">{{ $comic->type }}</span>
            {{ $comic->cooking_time }}
        </div>

        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $comic->image }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-6">
                <p>{!! $comic->description !!}</p>
                <p class="mt-3">
                    <a href="{{ route('comics.index') }}"><< back</a>
                </p>
            </div>
        </div>

    </section>


@endsection
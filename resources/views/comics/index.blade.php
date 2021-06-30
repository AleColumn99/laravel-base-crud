@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>titolo</h1>
    <section class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-success">SHOW</a>
                        </td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
  </div>
@endsection
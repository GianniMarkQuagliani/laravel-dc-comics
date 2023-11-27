@extends('layouts.main')

@section('content')
    <h1>Lista fumetti</h1>
    @if(session('deleted'))
    <div class="alert alert-success" role="alert">
        {{ session('deleted') }}
    </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Thumb</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comics as $comic)
            <tr>
              <th scope="row">{{ $comic->id }}</th>
              <td>{{ $comic->title }}</td>
              <td>{{ $comic->description }}</td>
              <td>
                @if($comic->thumb)
                    <img src="{{ asset($comic->thumb) }}" alt="{{ $comic->title }} Image" style="max-width: 100px;">
                @else
                    No Image
                @endif
              </td>
              <td>{{ $comic->price }}</td>
              <td>{{ $comic->series }}</td>
              <td>
                <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}"><i class="fa-regular fa-eye"></i></a>
                <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}"><i class="fa-solid fa-pencil"></i></a>
                @include('partials.formDelete')
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>
@endSection

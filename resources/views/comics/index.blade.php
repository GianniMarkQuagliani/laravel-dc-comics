@extends('layouts.main')

@section('content')
    <h1>Lista fumetti</h1>
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
            </tr>
          @endforeach
        </tbody>
      </table>
@endSection

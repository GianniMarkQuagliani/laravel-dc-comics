@extends('layouts.main')

@section('content')
    <h1>{{ $comic->title }}
        <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}"><i class="fa-solid fa-penicl"></i></a>
        @include('partials.formDelete')
    </h1>
    <div class="row">
        <div class="col-4">
            <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title}}">
        </div>

        <div class="col-12">
            <p>Price: {{ $comic->price }}</p>
        </div>
        <div class="col-12">
            <p>Series: {{ $comic->series }}</p>
        </div>
        <div class="col-12">
            <p>Sale Date: {{ $comic->sale_date }}</p>
        </div>
        <div class="col-12">
            <p>Type: {{ $comic->type }}</p>
        </div>
        <div class="col-8">
            <p>{{ $comic->description }}</p>
        </div>
    </div>
@endSection

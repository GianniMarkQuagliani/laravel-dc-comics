@extends('layouts.main')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <div class="row">
        <div class="col-4">
            <img src="{{ asset($comic->thumb) }}" alt="{{ $comic->title }} Image" style="max-width: 100%;">
        </div>
        <div class="col-8">
            <p>{{ $comic->description }}</p>
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
    </div>
@endSection

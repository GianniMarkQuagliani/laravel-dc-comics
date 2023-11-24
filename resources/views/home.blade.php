@extends('layouts.main')

@section('content')
    <h1>Home</h1>
    <p>Attualmente abbiamo {{ $comics_count }} fumetti</p>
    <a href="#"><i class="fa-solid fa-plus"></i> Crea un nuovo fumetto"></a>
@endSection

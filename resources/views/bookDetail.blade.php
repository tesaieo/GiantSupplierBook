@extends('partial/main')


@section('content')

<div class="container">
    <div class="card">
        <img src="{{ $datas->bookImg }}" class="card-img-top" alt="Book Cover">
        <div class="card-body">
            <h5 class="card-title">{{ $datas->bookTitle }}</h5>
            <p class="card-text">Publisher: {{ $datas->publisherName }}</p>
            <p class="card-text">Year: {{ $datas->bookYear }}</p>
            <p class="card-text">Synopsis: {{ $datas->bookSynopsis }}</p>
        </div>
    </div>
</div>
@endsection
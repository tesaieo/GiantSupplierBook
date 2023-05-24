@extends('partial/main')

@section('content')
<div class="container" style="background-color:grey;">
    <div class="row mx-auto" >
        <div class="col-lg-8">
            <h5>Publisher </h5>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($publisher as $key => $publishers)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ $publishers->publisherLogo }}" class="card-img-top" alt="Book Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $publishers->publisherName }}</h5>
                    <p class="card-text">by {{ $publishers->publisherAddress }}</p>
                    <p class="card-text">by {{ $publishers->publisherPhone }}</p>
                    <p class="card-text">by {{ $publishers->publisherEmail }}</p>
                    <a href="{{ route('AllBooks', $publishers->publisherId) }}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
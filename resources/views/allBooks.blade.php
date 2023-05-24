@extends('partial/main')

@section('content')
<div class="container" style="background-color:grey;">
    <div class="row mx-auto" >
        <div class="col-lg-8">
            <h5> List Boook</h5>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($booksDatas as $key => $datas)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ $datas->bookImg }}" class="card-img-top" alt="Book Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $datas->bookTitle }}</h5>
                    <p class="card-text">by {{ $datas->bookAuthor }}</p>
                    <a href="{{ route('find', $datas->bookId) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
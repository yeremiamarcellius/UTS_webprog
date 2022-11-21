@extends('template')

@section('title', 'home')

@section('content')
    <div class="d-flex flex-wrap justify-content-center m-5 gap-3">
        @foreach ($books as $book)
            <div class="card" style="width: 18rem;">
                <img src="{{$book->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">by</p>
                    <p class="card-text">{{$book->author}}</p>
                    <a href="{{ route('bookDetail', ['id'=>$book->id]) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection

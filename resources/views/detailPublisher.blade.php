@extends('template')

@section('title', 'Publisher Detail')

@section('content')

    <div class="p-5">
        <div class="d-flex justify-content-center">
            <div class="card mb-3 d-flex justify-content-center" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{$publisher->image}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$publisher->name}}</h5>
                            <p class="card-text">address - {{$publisher->address}}</p>
                            <p class="card-text">email - {{$publisher->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap justify-content-center gap-3">
            @foreach ($publisher->books as $book)
            <div class="card" style="width: 18rem;">
                <img src="{{$book->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Title : {{$book->title}}</p>
                    <p class="card-text">Author : {{$book->author}}</p>
                    <p class="card-text">Synopsis : {{$book->synopsis}}</p>
                    <a href="{{ route('bookDetail', ['id'=>$book->id]) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
        </div>

    </div>
@endsection

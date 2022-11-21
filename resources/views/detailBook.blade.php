@extends('template')

@section('title', 'Book Detail')

@section('content')
    <div class="d-flex justify-content-center p-5">
        <div class="card" style="width: 18rem;">
            <img src="{{$book->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Title : {{$book->title}}</p>
                <p class="card-text">Author : {{$book->author}}</p>
                <p class="card-text">Synopsis : {{$book->synopsis}}</p>
            </div>
        </div>
    </div>
@endsection

@extends('template')

@section('title', 'Publisher')

@section('content')
<div class="d-flex flex-wrap justify-content-center m-5 gap-3">
    @foreach ($publishers as $publisher)
        <div class="card" style="width: 18rem;">
            <img src="{{$publisher->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$publisher->name}}</h5>
                <p class="card-text">{{$publisher->address}}</p>
                <a href="{{ route('publisherDetail', ['id'=>$publisher->id]) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach
</div>
@endsection

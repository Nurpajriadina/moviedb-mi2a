@extends('layouts.main')
@section('title', 'Detail Movie')
@section('navMovie', 'active')

@section('content')
<h2>Detail Movies</h2>
<div class="card">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{$movie->cover_image}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">Synopsis:</p>
                <p class="card-text">{{$movie->synopsis}}</p>
                <p class="card-text">Actor: {{$movie->actors}}</p>
                <p class="card-text">Category: {{ $movie->category->category_name }}</p>
                <a href="/home" class="btn btn-success">back</a>
            </div>
        </div>
    </div>
</div>
@endsection

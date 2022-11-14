@extends('layout')


@section('content')
@include('partials._hero')

@unless(count($movies) == 0)

@foreach($movies as $movie)


<div class="movie-card">
    <div class="movie-img">
        <img src="{{asset('images/Avatar_2.jpg')}}" alt="Avatar 2">
    </div>

    <div class="card-body">
        <h2 class="movie-title">
            <a href="show.html">{{$movie->title}}</a>
        </h2>
        <span class="features">
            <a href="#">{{$movie->year}}</a>
        </span>
        <span class="features">
            <a href="#">{{$movie->duration}}</a>
        </span>
        <span class="features">
            <a href="#">{{$movie->studio}}</a>
        </span>
        <p class="movie-intro">{{$movie->story}}</p>
    </div>
</div>


@endforeach

@else
<p>No movies found</p>
@endunless

</div>

@endsection
@extends('layout')

@section('content')
@include('partials.hero')
@include('partials.search')

@unless(count($movies) == 0)

@foreach($movies as $movie)


<div class="block-cards-movies">
    <div class="flex-cards-movies">
        <div class="movie-card">
            <div class="movie-img">
                <img src="{{asset('images/Avatar_2.jpg')}}" alt="Avatar 2">
            </div>

            <div class="card-body">
                <h2 class="movie-title">
                    <a href="/movie/{{$movie->id}}">{{$movie->title}}</a>
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
    </div>
 </div>

@endforeach

@else
<p>No movies found</p>
@endunless


@endsection
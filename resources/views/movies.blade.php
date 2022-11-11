

<h1>{{$heading}}</h1>

@unless(count($movies) == 0)

@foreach($movies as $movie)
    <h2>
        <a href="/movies/{{$movie['id']}}">{{$movie['title']}}
    </h2></a>
    <p>
        {{$movie['description']}}
    </p>
@endforeach

@else
<p>No movies found</p>
@endunless
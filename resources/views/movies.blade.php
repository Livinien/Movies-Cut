

<h1>{{$heading}}</h1>

@unless(count($movies) == 0)

@foreach($movies as $movie)
    <h2>
        <a href="/movie/{{$movie['id']}}">{{$movie['title']}}
    </h2></a>

    <p>Year : {{$movie['year']}}</p>

    <p>Duration : {{$movie['duration']}}</p>

    <p>{{$movie['story']}}</p>


@endforeach

@else
<p>No movies found</p>
@endunless
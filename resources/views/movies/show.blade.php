
<x-layout>

    @section('content')

<div class="slt">

    <div class="back">
        <a href="/"><i class="fa-solid fa-arrow-left"></i>Back</a>
    </div>

    <x-movie>
        <a href="/movie/{{$movie->id}}/edit">
            <i class="fa-solid fa-pencil"></i>Edit
        </a>
    </x-movie>

</div>

    <div class="container">
        <div class="image-movie">
            <img src="{{$movie->poster ? asset('storage/' . $movie->poster) : asset('/images/Ready_Player_One.jpg')}}" alt="Poster movies">
        </div>

        <h1 class="title-single-movie">{{$movie->title}}</h1>

        <span class="year">{{$movie->year}}</span>
        <br>
        <span class="duration">{{$movie->duration}}</span>
        <br>
        <span class="studio">{{$movie->studio}}</span>

        <h2 class="title-story">Story</h2>

        <p class="story">
            {{$movie->story}}
        </p>


        <a href="https://www.imdb.com/title/tt1630029/?ref_=nv_sr_srsg_0" class="imdb" target=_blank><i class="fa-solid fa-film"></i>Watching Details Movie</a>

        <a href="https://www.youtube.com/watch?v=ocCdUEcHS00" class="trailer" target=_blank><i class="fa-solid fa-video"></i>Watching Trailer</a>

    </div>
    
    @endsection

</x-layout>
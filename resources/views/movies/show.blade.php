
<x-layout>

    @section('content')

    <div class="flex-back-edit-delete">

        <div class="back">
            <a href="/"><i class="fa-solid fa-arrow-left"></i>Back</a>
        </div>

        <x-movie>
            <a href="/movie/{{$movie->id}}/edit">
                <i class="fa-solid fa-pencil"></i>Edit
            </a>

            <form method="POST" action="/movie/{{$movie->id}}" class="delete">
                @csrf
                @method('DELETE')
                <button class="button-delete"><i class="fa-solid fa-trash"></i>Delete</button>
            </form>
            
            </x-movie>
        </div>
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



        <a href="{{$movie->details}}" class="imdb" target=_blank><i class="fa-solid fa-film"></i>Watching Details Movie</a>

        <a href="{{$movie->trailer}}" class="trailer" target=_blank><i class="fa-solid fa-video"></i>Watching Trailer</a>

    </div>
    
    @endsection

</x-layout>
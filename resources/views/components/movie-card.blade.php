
@props(['movie'])

<div class="block-cards-movies">
    <div class="flex-cards-movies">
        <div class="movie-card">
            <div class="movie-img">
                <img src="{{$movie->poster ? asset('storage/' . $movie->poster) : asset('/images/Ready_Player_One.jpg')}}" alt="Posters movies">
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
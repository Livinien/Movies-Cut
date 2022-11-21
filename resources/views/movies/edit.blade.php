<x-layout>

    <div class="wrapper">
        <div class="title">
            <h4>Edit Movie</h4>
        </div>

        <form method="POST" action="/movie/{{$movie->id}}" class="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="input-field">
                <label>Title</label>
                <input type="text" class="input" name="title" value="{{$movie->title}}">

                @error('title')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="input-field">
                <label>Year</label>
                <input type="text" class="input" name="year" value="{{$movie->year}}">

                @error('year')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="input-field">
                <label>Duration</label>
                <input type="text" class="input" name="duration" value="{{$movie->duration}}">

                @error('duration')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="input-field">
                <label>Studio</label>
                <input type="text" class="input" name="studio" value="{{$movie->studio}}">

                @error('studio')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="input-field">
                <label>Story</label>
                <textarea class="textarea" name="story">{{$movie->story}}</textarea>

                @error('story')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="input-field">
                <label class="poster-movie">Upload poster movie</label>
                <input type="file" name="poster">
            
                <img src="{{$movie->poster ? asset('storage/' . $movie->poster) : asset('/images/Ready_Player_One.jpg')}}" alt="Poster movies">

                @error('poster')
                <p class="error-message">{{$message}}</p>
                @enderror
            </div>

            <div class="input-field">
                <input type="submit" class="button-edit" value="Create Movie">
            </div>

        </form>
    </div>

</x-layout>



<x-layout>

<div class="wrapper">
    <div class="title">
        <h4>Create Movie</h4>
    </div>
    <form method="POST" action="/movie" class="form">
        @csrf
        <div class="input-field">
            <label>Title</label>
            <input type="text" class="input" name="title" value="{{old('title')}}">

            @error('title')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="input-field">
            <label>Year</label>
            <input type="text" class="input" name="year" value="{{old('year')}}">

            @error('year')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="input-field">
            <label>Duration</label>
            <input type="text" class="input" name="duration" value="{{old('duration')}}">

            @error('duration')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="input-field">
            <label>Studio</label>
            <input type="text" class="input" name="studio" value="{{old('studio')}}">

            @error('studio')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="input-field">
            <label>Story</label>
            <textarea class="textarea" name="story">{{old('title')}}</textarea>

            @error('story')
            <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <!-- <div class="input-field">
            <label class="poster-movie">Upload poster movie</label>
            <input type="file" name="poster">
           </button>
        </div> -->

        <div class="input-field">
            <input type="submit" class="button-submit" value="Create Movie">
        </div>

    </form>
</div>

</x-layout>



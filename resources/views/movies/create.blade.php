<x-layout>

<div class="wrapper">
    <div class="title">
        <h4>Create Movie</h4>
    </div>
    <form methode="POST" action="/movie" class="form">
        <div class="input-field">
            <label>Title</label>
            <input type="text" class="input" name="title">
        </div>
        <div class="input-field">
            <label>Year</label>
            <input type="text" class="input" name="year">
        </div>
        <div class="input-field">
            <label>Duration</label>
            <input type="text" class="input" name="duration">
        </div>
        <div class="input-field">
            <label>Studio</label>
            <input type="text" class="input" name="studio">
        </div>
        <div class="input-field">
            <label>Story</label>
            <textarea class="textarea" name="story"></textarea>
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



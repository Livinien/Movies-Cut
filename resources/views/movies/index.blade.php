
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<x-layout>



    @section('content')
    @include('partials.hero')
    @include('partials.search')

    @unless(count($movies) == 0)

    @foreach($movies as $movie)
    <x-movie-card :movie="$movie" />
    @endforeach

    @else
    <p>No movies found</p>
    @endunless

    @endsection
    
    <div class="paginate">
        {{$movies->links('pagination::bootstrap-4')}}
    </div>
    
</x-layout>




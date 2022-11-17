
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

</x-layout>
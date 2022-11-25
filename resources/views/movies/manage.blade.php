<x-layout>

    <div class="table">
        <div class="table-title">
            <h4>Manage Movies</h4>
        </div>

        <div class="table-section">
          <table class="table-full">
            <thead>
                <tr>
                    <th>Movies</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @unless($movies->isEmpty())
                @foreach($movies as $movie)
                <tr>
                    <td class="movie">
                        <a href="/movie/{{$movie->id}}">{{$movie->title}}</a> 
                    </td>
                    <td class="table-edit">
                        <a class="edit-button-green" href="/movie/{{$movie->id}}/edit"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                    </td>

                    
                    <td class="table-delete">
                        <form method="POST" action="/movie/{{$movie->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button-red"><i class="fa-solid fa-trash-can"></i>Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr class="movie-no-found">
                    <td>
                        <p>No Movie Found</p>
                    </td>
                </tr>
                @endunless
            </tbody>
          </table>
        </div>

</x-layout>

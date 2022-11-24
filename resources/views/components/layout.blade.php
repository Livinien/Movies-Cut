<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="/css/style.css">
    
 

    <title>Movies Cut</title>

</head>
<body>

    <!-- LINK IN HEADER  -->

    

    <div class="header">

        <div class="logo-movies-cut">
            <a href="/"><img src="{{asset('images/logo_movies_cut.png')}}" class="logo-movies-cut" alt="logo movies cut"></a>
        </div>

        <x-flash-message />

        <nav class="navigation">
            <ul>
            @auth
                <span class="authentification-name">
                    Welcome {{auth()->user()->firstname}}
                </span>
                <li>
                    <a href="/movie/manage"><i class="fa-solid fa-gear"></i>Manage Movies</a>
                </li>
                <li>
                    <form class="logout" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i>Logout
                        </button>
                    </form>
                </li>
            @else

                <li>
                    <a href="/movie/create"><i class="fa-solid fa-square-plus"></i>Add Movie</a>
                </li>
                <li>
                    <a href="/signup"><i class="fa-sharp fa-solid fa-user-plus"></i>Sign Up</a>
                </li>
                <li>
                    <a href="/login"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
                </li>
            @endauth
            </ul>
        </nav>
    </div>


    
    <!-- CONTENT CARDS -->

    <main class="all-cards">
        @yield('content')
        {{$slot}}
    </main>


    <footer>
        <p>Copyright &copy; 2022, All Rights reserved</p>
    </footer>

    <script src="//unpkg.com/alpinejs" defer></script>
    
</body>
</html>
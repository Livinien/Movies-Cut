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


    <div class="header">
        <ul>
            <li><a href="#"><i class="fa-sharp fa-solid fa-user-plus"></i>Sign Up</a></li>
            
        </ul>
        <ul>
            <li><a href="#"><i class="fa-solid fa-right-to-bracket"></i>Login</a></li>
        </ul>
    </div>
    

    <!-- VIEW OUTPUT -->

<main class="all-cards">
    @yield('content')
</main>

    <footer>
        <p>Copyright &copy; 2022, All Rights reserved</p>
    </footer>

</body>
</html>
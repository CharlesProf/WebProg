<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Index</title>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-primary justify-content-right align-items-right "><b><u>Amazing E-Grocery</u></b></a>
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/search">Search</a>
                    </li>

                    @if (Auth::user()->role == 'user')
                        <li class="nav-item">
                            <a class="nav-link" href="/cart">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/history">History</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>

                    @if (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/add">Add Item</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link btn btn-light text-primary" href="/logout">Sign Out</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link btn btn-light text-primary" href="/signin">Sign In</a>
                        <a class="nav-link btn btn-light text-primary" href="/signup">Sign Up</a>
                    </li>
                @endif
    </div>
</nav>



<body>

</body>
</html>

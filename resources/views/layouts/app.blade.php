<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/app.css') }}" />
    <title>@yield('title', 'Movie Review')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-4">
        <div class="container">
            <a href="{{route('home.index')}}" class="navbar-brand">Movie Review</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a href="{{route('home.index')}}" class="nav-link active">Home</a>
                    <a href="{{route('movie.index')}}" class="nav-link active">Movies</a>
                    <a href="{{route('home.about')}}" class="nav-link active">About</a>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Enter movie name here ....."
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'A Laravel Movie Review')</h2>
        </div>
    </header>
    <!-- header -->

    <div class=" container my-4">
        @yield('content')
    </div>

    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a href="https://twitter.com/waz_teth" class="text-reset fw-bold text-decoration-none"
                    target="_blank">
                    Zaw Htet
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>@yield('headline')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src=//code.jquery.com/jquery-3.3.1.slim.min.js integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin=anonymous></script>
    <script src=//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin=anonymous></script>
    <script src=//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin=anonymous></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body style="height: 100%; margin: 0px">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-xl">
            <a class="navbar-brand" href="/" style="font-weight:bold"><span style="color: red; font-weight:bold">Movie</span>List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                @guest
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/movies">Movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/actors">Actors</a>
                            </li>
                        </ul>
                        <a href="/register"><button type="button" class="btn btn-primary me-3">Register</button></a>
                        <a href="/login"><button type="button" class="btn btn-outline-primary" href="/login">Login</button></a>
                    </div>
                @else
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/movies">Movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/actors">Actors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/watchlist/{{ Auth::user()->id }}">My Watchlist</a>
                            </li>
                        </ul>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-md dropdown-toggle btn-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if (Auth::user()->imageURL)
                                    <img src="{{ asset('images/' . Auth::user()->imageURL) }}" class="rounded-circle" alt="..." style="height: 24px; width: 24px">
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                @endif
                                {{ Auth::user()->username }}
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="/logout" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center" style="">
            <h1 style="color: white"><span style="color: red; font-weight:bold">Movie</span>List</h3>
                <small style="color: white"><span style="color: red">Movie</span>List is a Website that cobtains list of movie</small>
                <div class="container justify-content-center" style="margin-top: 15px; margin-bottom: 15px">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" style="max-width: 30px;" />
                    <img src="https://cdn.freebiesupply.com/logos/large/2x/twitter-3-logo-png-transparent.png" style="max-width: 30px;" />
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png" style="max-width: 30px;" />
                    <img src="" />
                    <img src="https://www.freeiconspng.com/thumbs/youtube-logo-png/youtube-logo-png-hd-21.png" style="max-width: 30px;" />
                </div>
                <ul class="list-inline" style="color: white">
                    <li class="list-inline-item"><small>Privacy Policy |</small></li>
                    <li class="list-inline-item"><small> Terms Of Service |</small></li>
                    <li class="list-inline-item"><small> Contact Us |</small></li>
                    <li class="list-inline-item"><small> About Us</small></li>
                </ul>
                <small style="color: white">Copyright &copy; 2021 <span style="color: red">Movie</span>List All Rights Reserved</small>
        </div>
    </footer>
</body>

</html>

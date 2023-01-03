<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home - EverywhereBooks</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3 bg-primary" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center text-white" href="/"><img
                    class="img-fluid p-1" src="assets/img/brands/34322.png"
                    style="width: 30px;"><span>EverywhereBooks</span></a><button data-bs-toggle="collapse"
                class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse " id="navcol-1">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item"><a class="nav-link active text-white" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="listbuku">Lists</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="testimoni">Testimoni</a></li>
                </ul>
                @guest
                    <a class="btn btn-warning shadow" role="button" href="{{ route('login') }}">Log In</a>

                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <a class="btn btn-light shadow" role="button" href="{{ route('register-user') }}">Sign Up</a>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                </li>
                @endguest

            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        <div class="container py-4 py-lg-5al text-center">
            <hr>
            <div class="text-center">
                <p class="mb-0"><strong>Copyright © 2022</strong> MBOH Team Development</p>
            </div>
        </div>
    </footer>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script> --}}

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/startup-modern.js"></script>

</body>

</html>

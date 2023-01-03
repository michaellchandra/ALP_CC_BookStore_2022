@extends('layouts.app')
    {{-- <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div> --}}
    {{-- <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3 bg-primary" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center text-white" href="/"><img
                    class="img-fluid p-1" src="assets/img/books.png"
                    style="width: 30px;"><span>EverywhereBooks</span></a><button data-bs-toggle="collapse"
                class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse " id="navcol-1">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item"><a class="nav-link active text-white" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="documentation">Documentation</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="about">About</a></li>

                </ul>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/documentation') }}"
                                class="btn btn-warning shadow">Documentation</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-warning shadow">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="btn btn-warning shadow">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>
     --}}
  
@section('content')
<div class="container pt-4 pt-xl-5">
    <div class="row pt-5">
        <div class="col-md-8 text-center text-md-start mx-auto">
            <div class="text-center">
                <h1 class="display-4 fw-bold mb-5">Cari Buku Cepat, Mudah dan&nbsp;<span class="underline">Lengkap</span>.</h1>
                <p class="fs-5 text-muted mb-5">Cari buku dari mana saja, kapan saja dengan real-time</p>
                <a class="btn btn-warning shadow" role="button" href="{{ url('/documentation') }}">Lihat Dokumentasi</a>
            </div>
        </div>
        <div class="col-12 col-lg-10 mx-auto">
            <div class="text-center position-relative"><img class="img-fluid" src="assets/img/illustrations/meeting.svg" style="width: 800px;"></div>
        </div>
    </div>
</div>

@endsection


    {{-- <footer>
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

    {{-- <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/startup-modern.js"></script>
</body>

</html> --}} 

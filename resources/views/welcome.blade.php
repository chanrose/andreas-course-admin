<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Course Management') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-danger shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('course.home') }}">
                {{ config('app.name', 'Course Management') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a class="nav-link" href="/add-course" role="button">
                                Add Course
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="/view-courses-list" role="button">
                                View Course List
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="jumbotron">
                            <h2 class="lead">Why you need join our courses?</h2>
                            <p>Each courses have reliable instructors and based on international curriculum. Guaranteed! Our learning graduates will be ready to face challenges in the world of work and business.</p>
                            <h1 class="display-4">Are you interested?</h1>
                                <div class="d-flex justify-content-center my-1">
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item"><div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="https://scontent.fbkk5-1.fna.fbcdn.net/v/t1.0-9/131494956_10208220515106751_7264258927196999527_n.jpg?_nc_cat=109&ccb=2&_nc_sid=730e14&_nc_eui2=AeEXGHMvfto5gQKZsJ7AyXyjICIUIieQXPcgIhQiJ5Bc9zMxL7tN1UW3DPIO59fckow&_nc_ohc=BO7OkuBjq10AX8dUIye&_nc_ht=scontent.fbkk5-1.fna&oh=86e3ad5c907b449c13809e78a57b54f8&oe=5FFFFA4E" alt="Card image cap">
                                                <div class="card-body">
                                                    <h1 class="card-title">FREE</h1>
                                                    <p class="card-text">3 times free online class.</p>
                                                    <a href="{{ route('register') }}" class="btn btn-outline-primary">Sign Up For Free</a>
                                                </div>
                                            </div></li>
                                        <li class="list-group-item"><div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/131471845_10208220515146752_459793134105214607_n.jpg?_nc_cat=108&ccb=2&_nc_sid=730e14&_nc_eui2=AeGP5rCsHbHpZQqrYSr2Xl2UECOlIHuxxfgQI6Uge7HF-CiK1hm1hVRr55gFZMtyMOA&_nc_ohc=_yfHFTQRMPQAX-Vqa5j&_nc_ht=scontent.fbkk5-7.fna&oh=06bec4e65c66a41479235687442c8de0&oe=5FFD9144" alt="Card image cap">
                                                <div class="card-body">
                                                    <h1 class="card-title">STANDARD</h1>
                                                    <p class="card-text">2 months online class with personal instructor. From basic until intermediate learning.</p>
                                                    <a href="{{ route('register') }}" class="btn btn-primary">Silver Membership</a>
                                                </div>
                                            </div></li>
                                        <li class="list-group-item"><div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="https://scontent.fbkk5-6.fna.fbcdn.net/v/t1.0-9/131324996_10208220515546762_7329052275676791570_n.jpg?_nc_cat=102&ccb=2&_nc_sid=730e14&_nc_eui2=AeHQK_Nz8WqYjOjyMEs1cdiJknpnBtdY3HmSemcG11jceUieyMZEs30OIqtcAc995gc&_nc_ohc=97dLQbSasEcAX9KHPxg&_nc_ht=scontent.fbkk5-6.fna&oh=45756cc3577835021ebc408194bee3c6&oe=60009E0A" alt="Card image cap">
                                                <div class="card-body">
                                                    <h1 class="card-title">PRO</h1>
                                                    <p class="card-text">3 months online class with personal instructor. From basic until advance learning.</p>
                                                    <a href="{{ route('register') }}" class="btn btn-primary">Gold Membership</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div></div></div>


                        <div class="my-5 text-center">
                                <h1 class="display-4">CourseAdmin</h1>

                                <img class="card-img-top"
                                     style="width: 250px !important;"
                                     src="https://scontent.fbkk19-1.fna.fbcdn.net/v/t1.0-9/59951109_10205908223820914_7227123198188322816_n.jpg?_nc_cat=109&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeGh5LvVdFGYCnW5bF571fjH7clnpBJvAr7tyWekEm8CvuqFQKAoR2iz0FMh2RKuG4E&_nc_ohc=zCNHWpth-60AX-2wh3Y&_nc_ht=scontent.fbkk19-1.fna&oh=baf5175ad211bc5ae79125d6f699fa07&oe=5FFF6459"
                                     alt="Creator Picture">
                                <p class="lead">Andreas Christian Mambu, the founder and the website creator.</p>
                                <div class="d-flex justify-content-center my-1">
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item">
                                            <a href="https://www.facebook.com/psychotherapid">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="https://www.twitter.com/psychotherapid">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="https://www.instagram.com/psychotherapid">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            <br/>
                            <h3 class="lead">Address</h3>
                            <p>195 Moo 3, Muak Lek, Saraburi, 18180</p>
                            <h3 class="lead">Phone</h3>
                            <p>+66 0803702156</p>

                            </div>
                        </div>


        </div>
    </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</div>

</body>

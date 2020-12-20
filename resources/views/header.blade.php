<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rent-a-Car | Beste huurauto's van Almere</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
<div class="container">
<nav class ="navbar navbar-expand-lg navbar-dark text-light bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">Rent-a-Car</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
                <a href="{{ url('autos') }}" class="nav-link">Huren</a>
                <a href="{{ url('contact') }}" class="nav-link">Contact</a>
                <a href="{{ url('huren') }}" class="nav-link">Autos aanpassen</a>
            <div class=" navbar-collapse justify-content-end">
                @if (Route::has('login'))

            @auth
                <a href="{{ url('/user/profile') }}" class="nav-link bg-dark" >{{Auth::user()->name}}</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="nav-link" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
            @else
                <a href="{{ route('login') }}" class="nav-link bg-dark">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link bg-dark">Register</a>
                @endif
            @endauth
    @endif

                </div>
            </div>

</div>

</nav>
    </div>


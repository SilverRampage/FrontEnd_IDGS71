<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('CSS/start.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        
    </head>
    <body>

        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <div class="company">
                    <img src="{{ asset('images/plant.svg') }}" alt="Logo" width="45px">
                    <a class="navbar-brand">Smart <span>Domo</span></a>
                </div>
                <form class="d-flex" role="search">

                    @if (Route::has('login'))
                        
                            @auth
                                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                            @else

                                <div class="login">
                                    <a class="icon-link" href="{{ route('login') }}">
                                        <img src="{{ asset('images/person-circle.svg') }}" alt="" width="16px">
                                        Comenzar
                                    </a>
                                </div>

                                

                                @if (Route::has('register'))

                                    <div class="register">
                                        <a class="icon-link" href="{{ route('register') }}">
                                            <img src="{{ asset('images/person-vcard.svg') }}" alt="" width="16px">
                                            Registrarse
                                        </a>
                                    </div>

                                @endif
                                
                            @endauth
                        
                    @endif
    
                    
                    
                </form>
            </div>
        </nav>
    
        <div class="home">
    
            <div class="image">
    
                <img src="{{ asset('images/invernadero.png') }}" alt="">
    
            </div>
    
            <div class="info">
    
                <h2>Bienvenid@ al <span>Invernadero Inteligente</span></h2>
    
                <p>
                    Observa las condiciones ambientales de tu invernadero, como temperatura, humedad y más.
                </p>
    
                <p>- ¡Que tengas un buen día! -</p>
    
            </div>
    
        </div>
        
    </body>
</html>

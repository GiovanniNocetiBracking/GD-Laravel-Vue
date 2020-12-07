<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <title>Gas Detect</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body class="antialiased">
    <div class="">


        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" >
            <a class="navbar-brand font-italic" style="color:red" href="#"><h1> Gas Detect </h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <!-- Cualquier cosa despues del icono-->

                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        @if (Route::has('login'))
                        <div class="">
                            @auth
                            
                            
                            <a href="{{ url('/home') }}" class="btn btn-outline-danger btn-lg " role="button" aria-pressed="true">Sistema de gestión</a>

                           
                            @else
                            <a href="{{ route('login') }}" class="btn btn-outline-danger btn-lg mr-1">Login</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-danger btn-lg ">Register</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </li>
                </ul>

            </div>
        </nav>

        <section class=" container mt-5 pt-5">
            <h1 class="text-center mb-3 text-uppercase font-italic">¿Que es Gas Detect?</h1>
            <p>Gas detect es Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus a minima, amet
                odio veritatis voluptatibus consectetur unde cupiditate eum iusto quo labore esse mollitia facilis
                libero porro. Ratione, inventore.</p>
        </section>
        <section class=" container mt-5 pt-5">
            <h1 class="text-center mb-3 text-uppercase font-italic">¿Que es Gas Detect?</h1>
            <p>Gas detect es Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus a minima, amet
                odio veritatis voluptatibus consectetur unde cupiditate eum iusto quo labore esse mollitia facilis
                libero porro. Ratione, inventore.</p>
        </section>
        <section class=" container mt-5 pt-5">
            <h1 class="text-center mb-3 text-uppercase font-italic">¿Que es Gas Detect?</h1>
            <p>Gas detect es Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus a minima, amet
                odio veritatis voluptatibus consectetur unde cupiditate eum iusto quo labore esse mollitia facilis
                libero porro. Ratione, inventore.</p>
        </section>
        <section class=" container mt-5 pt-5">
            <h1 class="text-center mb-3 text-uppercase font-italic">¿Que es Gas Detect?</h1>
            <p>Gas detect es Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus a minima, amet
                odio veritatis voluptatibus consectetur unde cupiditate eum iusto quo labore esse mollitia facilis
                libero porro. Ratione, inventore.</p>
        </section>
        <section class=" container mt-5 pt-5">
            <h1 class="text-center mb-3 text-uppercase font-italic">¿Que es Gas Detect?</h1>
            <p>Gas detect es Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus a minima, amet
                odio veritatis voluptatibus consectetur unde cupiditate eum iusto quo labore esse mollitia facilis
                libero porro. Ratione, inventore.</p>
        </section>
        <section class=" container mt-5 pt-5">
            <h1 class="text-center mb-3 text-uppercase font-italic">¿Que es Gas Detect?</h1>
            <p>Gas detect es Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus a minima, amet
                odio veritatis voluptatibus consectetur unde cupiditate eum iusto quo labore esse mollitia facilis
                libero porro. Ratione, inventore.</p>
        </section>
        <section class=" container mt-5 pt-5">
            <h1 class="text-center mb-3 text-uppercase font-italic">¿Que es Gas Detect?</h1>
            <p>Gas detect es Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus a minima, amet
                odio veritatis voluptatibus consectetur unde cupiditate eum iusto quo labore esse mollitia facilis
                libero porro. Ratione, inventore.</p>
        </section>
        <section class=" container mt-5 pt-5">
            <h1 class="text-center mb-3 text-uppercase font-italic">¿Que es Gas Detect?</h1>
            <p>Gas detect es Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero temporibus a minima, amet
                odio veritatis voluptatibus consectetur unde cupiditate eum iusto quo labore esse mollitia facilis
                libero porro. Ratione, inventore.</p>
        </section>
    </div>
    <div id="app"></div>
    
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <meta name="theme-name" content="NODMA HORIZON" />
	
		<!-- ** CSS Plugins Needed for the Project ** -->
	
		<!-- Bootstrap -->
		<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
		<!-- themefy-icon -->
		<link rel="stylesheet" href="themify-icons/themify-icons.css">
		<!--Favicon-->
		<link rel="icon" href="images/favicon.png" type="image/x-icon">
		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<!-- Main Stylesheet -->
		<link href="assets/style.css" rel="stylesheet" media="screen" />
		<link href="assets/styleshome.css" rel="stylesheet" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- Styles -->
     

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="banner overlay bg-cover" >
        <nav class="navbar navbar-expand-lg  navbar-dark ">
            <div class="container">
            
            <img class="img-fluid rounded-circle" src="images/logoofppt.png" alt="..." />
            <a class="navbar-brand px-2">LES CLUBS PARASCOLAIRES</a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div id="app"><nav class="navbar navbar-expand-md navbar-dark">


                    <div class="collapse navbar-collapse text-center" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Registre') }}</a>
                                    </li>
                            @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu p-0 m-0 bg-secondary dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item " href="{{ route('logout') }}"
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

                
            </div>
    </nav>
        <!-- banner -->
       
        <!-- /banner -->
    </header>
    
   

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="assets/script.js"></script>
</body>
</html>

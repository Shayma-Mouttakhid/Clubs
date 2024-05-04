<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head><meta charset="utf-8">
    
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	  
	  <!-- theme meta -->
	  <meta name="theme-name"  />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!-- ** CSS Plugins Needed for the Project ** -->
	
		<!-- Bootstrap -->
		<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
		<!-- themefy-icon -->
		<link rel="stylesheet" href="themify-icons/themify-icons.css">
		<!--Favicon-->
		<link rel="icon" href="images/favicon.png" type="image/x-icon">
		<!-- fonts -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet"> -->
		<!-- Main Stylesheet -->
		<link href="assets/style.css" rel="stylesheet" media="screen" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
     
    </head>
    <body class="antialiased">
        <!-- header -->
	<header class="banner overlay " >
		<nav class="navbar navbar-expand-md navbar-dark">
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
                        <li class="nav-item">
								<a class="nav-link text-dark" href="{{route('home')}}">Home</a>
							</li>
                        <li class="nav-item">
							<a class="nav-link text-dark" href="{{ url('/clubs') }}">Clubs</a>
						</li>
                            <li class="nav-item">
							<a class="nav-link text-dark" href="{{ url('/posts') }}">Posts</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link text-dark" href="{{ url('/chat') }}">Chat</a>
						</li>
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

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

                
            </div>
    </nav>
		<!-- banner -->
		<div class="container section">
			<div class="row">
				
				<div class="col-lg-8 text-center mx-auto" style="height:20px;">
					
					<h1 class="text-white ">Clubs parascolaire</h1></div>
		<!-- /banner -->
	</header>

    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/club.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/cluub.jpg" class="d-block h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/club.jpg" class="d-block h-50" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
    <div class="swiper-wrapper" style="height:30rem; " >
      <div class="swiper-slide">
        <img src="images/cluub.jpg" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/club.jpg " class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/cluub.jpg"  class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/club.jpg"  class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/a3.jpg"  class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/a4.jpg"  class="w-100 d-block"/>
      </div>
     
    </div>
   
  </div>
</div>
    
	<footer class="section pb-4">
		<div class="container">
			
		</div>
	</footer>
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop : true, 
      autoplay:{
        delay: 1500,
        disableOneInteraction: false 
      }
    
    });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView : 3,
      loop : true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320 : {
            slidesPerView:1,
        },
        640 : {
            slidesPerView:1,
        },
        768 : {
            slidesPerView:2,
        },
        1024 : {
            slidesPerView:3,
        },
      }
    })
</script>

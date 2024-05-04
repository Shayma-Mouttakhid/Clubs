<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head><meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	  
	  <!-- theme meta -->
	  <meta name="theme-name"  />
	
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

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
     
    </head>
    <body class="antialiased">
        <!-- header -->
	<header class="banner overlay bg-cover" >
		<nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
			<img class="img-fluid rounded-circle" src="images/logoofppt.png" alt="..." />
			<a class="navbar-brand px-2">LES CLUBS PARASCOLAIRES</a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div id="app"><nav class="navbar navbar-expand-md navbar-dark">


				

				<div class="collapse navbar-collapse text-center p-3" id="navigation">
					<ul class="navbar-nav ml-auto">
						
					@if (Route::has('login'))
						@auth
						<li class="nav-item">
							<a class="nav-link text-dark" href="{{ url('/home') }}">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="{{ url('/clubs') }}">Clubs</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="{{ url('/posts') }}">Posts</a>
						</li> 
						
						<li class="nav-item">
							<a class="nav-link text-dark" href="{{ url('/chat') }}">chat</a>
						</li>
					@else
						<li class="nav-item">
							<a class="nav-link text-dark" href="{{ route('login') }}">Log In</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link text-dark" href="{{ route('register') }}">Registrer</a>
							</li>
						@endif
					@endauth
					@endif
					</ul>
				</div>
			</div>
		</nav>
		<!-- banner -->
		
		<div class="container section">
				<div class="row">
					<div class="col-lg-8 text-center mx-auto">
					
						

						
					</div>
				</div>
			</div>
		<!-- /banner -->
	</header>
	<!-- /header -->
	<section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="images/club.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-6">Consulter Votre Liste des clubs </h2>
                            <p>Vous pouvez choisir depuis une large gamme des clubs, le club que vous voulez</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	
	<section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="images/cluub.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-6">Un large choix des clubs</h2>
                            <p>Vous pouvez pratiquer les activités que vous souhaitez</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	<!-- topics -->
	
	<!-- /call to action -->

	<!-- footer -->
	<footer class="section pb-4">
		<div class="container">
			
		</div>
	</footer>
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="assets/script.js"></script>
    </body>
</html>

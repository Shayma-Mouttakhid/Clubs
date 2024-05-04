@extends('layouts.hedr')
@section('assma')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
</head>
<body>

    <h1 class="text-center">ALL CLUBS</h1>
<div class="container ">
     <div class="row ">
    @foreach ($clubs as $club)
    
       
            <div class=" text-center col-4 ">
                <div class="card " >
                <div class="card-body h-200">
                    <h3 class="card-title text-center">{{ $club->nom_club }}</h3>
                    <hr><img src="images/cluub.jpg" class="w-50 h-50"><br>
                    <p class="card-text ">Résponsable du club :{{ $club->rspnsbl_club }}</p>
                    <p class="card-text">{{ $club->description }}</p>
                    
                    <a href="#" class="btn btn-primary">S'inscrire</a>
                </div>
                </div>

 
        </div>
     
    @endforeach            </div></div>
</body>
</html>
@endsection

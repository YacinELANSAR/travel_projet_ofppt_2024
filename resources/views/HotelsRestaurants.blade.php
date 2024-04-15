<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultats</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        /* Style pour le titre */
        h2 {
            font-family: Arial, sans-serif;
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-top: 50px;
        }

        /* Style pour le formulaire */
        form {
            width: 300px;
            margin: 0 auto;
        }

        /* Style pour le select */
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            appearance: none;
            /* Masquer le style par défaut du select */
            background-color: #f9f9f9;
            /* Couleur de fond */
            background-image: url('data:image/svg+xml;utf8,<svg fill="currentColor" width="12" height="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M.646 4.146a.5.5 0 0 1 .708 0L8 10.793l6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0l-7-7a.5.5 0 0 1 0-.708z"/></svg>');
            /* Utilisation d'une flèche personnalisée pour le select */
            background-repeat: no-repeat;
            background-position: right 10px center;
        }

        /* Style pour les options */
        option {
            padding: 10px;
            font-size: 16px;
        }

        /* Style pour les options au survol */
        option:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>
    
<div class="container ">
<div style="display: flex;flex-direction:column">

<h2>
<a href="{{route('home')}}" style="text-decoration:none;border: 2px solid #114997;padding:9px;width:fit-content;border-radius:5px">
            <svg style="width: 30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M125.7 160H176c17.7 0 32 14.3 32 32s-14.3 32-32 32H48c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32s32 14.3 32 32v51.2L97.6 97.6c87.5-87.5 229.3-87.5 316.8 0s87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3s-163.8-62.5-226.3 0L125.7 160z"/></svg>    
            Page d'accueil

        </a>
    <br><br>    
Choisir votre destination</h2>
    <form action="{{route('destinations.showHotelsAndRestaurant')}}" method="post">
        @csrf
        <select name="destination">
            @foreach($destinations as $destination)
            <option value="{{ $destination->id }}">{{ $destination->name }}</option>
            @endforeach
        </select>
        <button type="submit" style="margin-bottom:5px;text-decoration: none; padding:5px;background-color:#114997;color:white;font-weight:bold;border-radius:5px;border-color:#114997;width:100%;margin-top:8px;font-size:16px">Filtrer</button>
    </form>
    <!-- start hotels -->
    <h2 style="font-size: 50px;
    background-image: linear-gradient(to right, #061c39, #0f9694);
    color: white;
    padding: 9px;
    border-bottom: 10px solid black;
    border-right: 6px solid black;
    border-radius: 10px;">Hôtels</h2>
    <div class="row">
        @if($hotels->count()>0)
        @foreach ($hotels as  $hotel)
        <div class="col-md-4 mb-8 mb-md-0">
    <div class="card card-span h-100 shadow">
        <div class="card-body d-flex flex-column justify-content-center align-items-center py-5">
            <img src="{{ $hotel->image }}" width="100%" alt="{{ $hotel->nom }}" class="img-fluid shadow-sm rounded" >
            <h5 class="mt-3 text-center"><strong>Nom: </strong>{{ $hotel->nom }}</h5>
            <p class="mb-0 fs-xxl-1 text-center"><strong>Etoiles: </strong>{{ $hotel->etoiles }} étoiles</p>
            <p class="text-600 mb-0 text-center"><strong>Adresse: </strong>{{ $hotel->adressePhysique }}</p>
            <p class="text-600 mb-4 text-center"><strong>Prix par nuit:</strong> {{ $hotel->prixParNuit }} DH</p>
            
                            <input type="text" placeholder="Vous devez être connecté pour réserver" disabled style="width: 100%;" class="text-center">
                        
        </div>
    </div>
</div>

        @endforeach

        @else
        <p style="transform:translateX(80%);text-align:center;margin-bottom:5px;text-decoration: none; padding:5px;background-color:#bb2332;color:white;font-weight:bold;border-radius:5px;width:40%;margin-top:8px;font-size:16px">Aucun hôtel avec cette destination pour le moment.</p>
        @endif
        
    </div>
    <!-- end hotels -->
    <!-- start restaurants -->
    <h2 style="font-size: 50px;
    background-image: linear-gradient(to right, #061c39, #0f9694);
    color: white;
    padding: 9px;
    border-bottom: 10px solid black;
    border-right: 6px solid black;
    border-radius: 10px;">Restaurants</h2>
    <div class="row">
        @if($restaurants->count()>0)
        @foreach ($restaurants as $restaurant)
        <div class="col-md-4 mb-8 mb-md-0">
            <div class="card card-span h-100 shadow">
                <div class="card-body d-flex flex-column flex-center py-5">
                    <img src="{{ $restaurant->image }}"  width="100%" alt="{{ $restaurant->name }}" class="img-fluid shadow-sm rounded">
                    <h5 class="mt-3 text-center" ><strong>Nom: </strong>{{ $restaurant->name }}</h5>
                    <p class="mb-0 fs-xxl-1 text-center" ><strong>Etoiles: </strong>{{ $restaurant->etoiles }} étoiles</p>
                    <p class="text-600 mb-0 text-center" ><strong>Adresse: </strong>{{ $restaurant->adressePhysique }}</p>
                    <p class="text-600 mb-4 text-center" ><strong>Description: </strong> {{ $restaurant->description }}</p>
                    <input type="text" placeholder="Vous devez être connecté pour réserver" disabled style="width: 100%;" class="text-center">

                </div>
            </div>
        </div>
        @endforeach
        @else
        <p style="transform:translateX(80%);text-align:center;margin-bottom:5px;text-decoration: none; padding:5px;background-color:#bb2332;color:white;font-weight:bold;border-radius:5px;width:40%;margin-top:8px;font-size:16px">Aucun restaurant avec cette destination pour le moment. </p>
        @endif
    </div>
    <!-- end restaurants -->


</div>
</div>
</body>
</html>
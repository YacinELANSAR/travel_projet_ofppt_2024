<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
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
<p style="text-align:center;margin-bottom:5px;text-decoration: none; padding:5px;background-color:#bb2332;color:white;font-weight:bold;border-radius:5px;margin-top:8px;font-size:16px">
    <svg style="width: 30px;border:2px solid orange;border-radius:50%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
    vous devez être connecté pour Commenter ou laisser votre feedback</p>
    <h2>
    <a href="{{route('home')}}" style="text-decoration:none;border: 2px solid #114997;padding:9px;width:fit-content;border-radius:5px">
            <svg style="width: 30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M125.7 160H176c17.7 0 32 14.3 32 32s-14.3 32-32 32H48c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32s32 14.3 32 32v51.2L97.6 97.6c87.5-87.5 229.3-87.5 316.8 0s87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3s-163.8-62.5-226.3 0L125.7 160z"/></svg>    
            Page d'accueil

        </a>
    <br><br>
    Choisir votre destination</h2>
    <form action="{{route('feedbacks.showFeedbacksHotelsAndRestaurant')}}" method="post">
        @csrf
        <select name="destination">
            @foreach($destinations as $destination)
            <option value="{{ $destination->id }}">{{ $destination->name }}</option>
            @endforeach
        </select>
        <button type="submit" style="text-decoration: none; padding:5px;background-color:#114997;color:white;font-weight:bold;border-radius:5px;border-color:#114997;width:100%;margin-top:8px;font-size:16px">Filtrer</button>
    </form>
  

    <div class="container mt-5">
    <div class="row">
        @forelse ($comments as $comment)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div> @if ($comment->restaurant_id == null)
                    @isset($hotel)
                        <h5 class="card-title">Hotel: {{ $hotel->nom }}</h5> <!-- Nom de l'hôtel -->
                    @endisset
                @endif
                @if ($comment->hotel_id == null)
                    @isset($restaurant)
                        <h5 class="card-title">Restaurant: {{ $restaurant->name }}</h5> <!-- Nom du restaurant -->
                    @endisset
                @endif
                        <h5 class="card-title"><strong>Nom:</strong> {{ $comment->user->nom }}</h5>
                        <h5 class="card-title"><strong>Email:</strong> {{ $comment->user->email }}</h5>
                        <p class="card-text"><strong>Commentaire:</strong> {{ $comment->comment }}</p>
                        @if ($comment->image)
                            <h2 class="mt-3">Souvenirs</h2>
                            <img src="{{ asset($comment->image) }}" class="img-fluid mb-2" alt="User Image">
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                <p class="text-muted text-center">Aucun commentaire trouvé.</p>
            </div>
        @endforelse
    </div>
</div>


</div>



    </div>
   
</body>

</html>
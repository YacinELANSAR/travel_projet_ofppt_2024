<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Register
    </title>
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="frontend/css/auth/login.css">
</head>

<body style="background-image: url(/frontend/images/marakesh-nav-wallaper.jpg);">

    <form action="{{route('ajouterregister')}}" method="post" id="register_form">
        @csrf
    <div class="form" id="signin-form">
        <a href="{{route('home')}}" class="form-logo" style="text-decoration: none;color:white;font-size:30px;">
            Tavelino(Home) </a>
        <div class="form-group">
            <input type="text" class="form-input" placeholder="Nom" id="signin-nom" name="nom">
            @error('nom')
                <span class="form-input-err-msg">{{ $message }}</span>
                @enderror        </div>
        <div class="form-group">
            <input type="text" class="form-input" placeholder="Prénom" id="signin-prenom" name="prenom">
            @error('prenom')
                <span class="form-input-err-msg">{{ $message }}</span>
                @enderror        </div>
        <div class="form-group">
            <input type="tel" class="form-input" placeholder="Téléphone" id="signin-telephone" name="telephone">
            @error('telephone')
                <span class="form-input-err-msg">{{ $message }}</span>
                @enderror        </div>
        <div class="form-group form-group-select">
            <select class="form-input" id="signin-genre" style="background-color: black !important;color:white !important" name="genre">
                <option value="" disabled selected>Genre</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
            @error('genre')
                <span class="form-input-err-msg">{{ $message }}</span>
                @enderror        </div>
        <div class="form-group">
            <input type="email" class="form-input" placeholder="Email" id="signin-email" name="email">
            @error('email')
                <span class="form-input-err-msg">{{ $message }}</span>
                @enderror        </div>
        <div class="form-group">
            <input type="password" class="form-input" placeholder="Password" id="signin-password" name="password">
            @error('password')
                <span class="form-input-err-msg">{{ $message }}</span>
                @enderror        </div>

        <button class="form-btn" id="signin-btn">Register</button>


        <span class="form-txt">
            Already have an account ?
            <a href="{{route('showlogin')}}">Login!</a>
        </span>

    </div>
    </form>


    <!-- APP JS -->
    <script src="frontend/js/auth/register.js"></script>

</body>

</html>
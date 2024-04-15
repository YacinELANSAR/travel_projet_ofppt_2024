<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <title>
        Login
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
@if(session('success'))
    <div class="alert alert-success container mt-3 text-center" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <form action="{{route('connecterlogin')}}" method="post" id="login_form">
        @csrf
        <div class="form" id="signin-form">
    <a href="{{route('home')}}" class="form-logo" style="text-decoration: none;color:white;font-size:30px;">
            Tavelino(Home) </a>
        <div class="form-group">
            <input type="email" class="form-input" placeholder="Email" required id="signin-email" name="email">
            @error('email')
                <span class="form-input-err-msg">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-input" placeholder="Password" required id="signin-password" name="password">
            @error('password')
                <span class="form-input-err-msg">{{ $message }}</span>
                @enderror
        </div>
        <div class="form-group form-group-checkbox">
            <input type="checkbox" name="remember" id="remember" checked="checked">
            <label for="remember">
                Remember Me
                <i class='bx bx-check'></i>
            </label>
        </div>
        <button type="submit" class="form-btn" id="signin-btn">Sign in</button>
        
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <span class="form-txt">
            Don't have an account?
            <a href="{{route('showregister')}}">Sign up!</a>
        </span>
     
    </div>

    </form>
    <!-- APP JS -->
    <script src="frontend/js/auth/login.js"></script>

</body>

</html>
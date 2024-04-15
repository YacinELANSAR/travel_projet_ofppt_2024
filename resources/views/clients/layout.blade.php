<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="frontend/css/contactUS.css">
    <link rel="stylesheet" href="frontend/css/messageAdmin.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="frontend/css/feedbacksForm.css">


    <title>Document</title>
</head>
<body>

    <nav>
        <div class="container ">
            <div class="menu-par">
                <div class="logo-par" style="background-color:#042c63;padding:5px;border-radius:8px;">
                    
                        <h6>@yield('title')</h6>
                    
                </div>
                <div class="nav"style="background-color:#042c63;padding:10px;border-radius:8px;margin-bottom:5px">
                    <ul>
                        <li><a class="menu-hover" href="{{ route('showMessageAdmin') }}">Messages d'admin</a></li>
                    <li><a class="menu-hover" href="{{ route('showMessageContactForConnectedClt') }}">Contactez-admin</a></li>
                        <li><a class="menu-hover" href="{{route('feedbacks.showFeedbackForm')}}">Feedback</a></li>
                        <li><a class="menu-hover" href="{{route('reservations.showDestinations')}}">Reservations</a></li>

                        <li><form id="logoutForm" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="event.preventDefault(); logout();" style="padding: 6px; background-color:red;color:white;border:none;border-radius:5px;cursor:pointer"> <i class="fa fa-power-off"></i>
                            Logout</button>
                    </form></li>
                    </ul>
                </div>
                <div id="toggle-btn">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>
<main>@yield('content')</main>
   
<script src="/frontend/js/jquery-3.1.1.min.js"></script>
    <script src="/frontend/js/owl.carousel.min.js"></script>
    <script src="/frontend/js/extrenaljq.js"></script>
    <script src="/frontend/js/showVideos.js"></script>
    <script>
        function logout() {
            document.getElementById('logoutForm').submit();
        }
       

    </script>
</body>
</html>
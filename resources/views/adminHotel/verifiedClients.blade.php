<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="frontend/css/ADM_HOTEL_RESTAURANT.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="mobile">



    <nav>
        <div class="container nav-wrapper" style="background-color: #0b0b59;
    border-radius: 12px;
    margin-top: 5px;
    margin-bottom: 17px;">
            <div class="brand">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7H162.5c0 0 0 0 .1 0H168 280h5.5c0 0 0 0 .1 0H417.3c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2H224 204.3c-12.4 0-20.1 13.6-13.7 24.2z" />
                </svg>
                <span style="color: white;"><strong>Admin Hotel</strong></span>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            @if(session('success'))
    <div style="padding: 8px;text-align:center;color:white;background-color:#00a249" role="alert">
        {{ session('success') }}
    </div>
    @endif
            <ul class="nav-list">
                <li>

                    <a href="{{route('ADM_HOTEL.verifiedClt')}}">Clients verifies</a>
                </li>
                <li><a href="{{route('ADM_HOTEL.unverifiedClt')}}">Clients Non verifies</a></li>


                <li>
                    <div class="sidebar__logout" style="display: flex;">
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" onclick="event.preventDefault(); logout();" style="padding: 6px; background-color:red;color:white;border:none;border-radius:5px;cursor:pointer"> <i class="fa fa-power-off"></i>
                                Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-body" id="clientsContainer">
                        <!-- Contenu des clients sera affiché ici -->
                        <form method="POST" action="{{route('hotelsReservations.update')}}">
                            @csrf
                            @method('PUT')
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>UserId</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>genre</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($verifiedHotelClients as $client)

                                    <tr>
                                        <td>#{{ $client->user->id }}</td>
                                        <td>{{ $client->user->nom }}</td>
                                        <td>{{ $client->user->prenom }}</td>
                                        <td>{{ $client->user->email }}</td>
                                        <td>{{ $client->user->telephone }}</td>
                                        <td>{{ $client->user->genre }}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="frontend/js/ADM_HOTEL_RESTAURANT.js"></script>
    <script>
        function logout() {
            document.getElementById('logoutForm').submit();
        }
       

    </script>

</body>

</html>
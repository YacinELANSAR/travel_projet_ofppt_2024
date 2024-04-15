@extends('clients.layout')
@section('title')
<h1 style="font-size:26px;color:white">Laisser un Feedback</h1>
@endsection
@section('content')
<form action="{{route('feedbacks.store')}}" method="post" id="register_form" enctype="multipart/form-data">
    @csrf


    @if(session('success'))
    <div style="padding: 8px;text-align:center;color:white;background-color:#00a249" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="form" id="signin-form">

        <div class="alert">
            <p>N.B : Choisissez seulement quel élément (hôtel ou restaurant) vous voulez laisser un feedback.</p>
        </div>
        <input type="hidden" name="userId" value="{{$user->id}}">
        <div class="hotels">
            <div class="form-group form-group-select">
                <select class="form-input" id="signin-genre" style="background-color: black !important;color:white !important" name="hotel">
                    <option value="" disabled selected>Hotel</option>
                    @foreach($hotels as $hotel)
                    <option value="{{$hotel->hotel_id}}" style="color: white;">{{$hotel->hotel->nom}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group form-group-select">
                <select class="form-input" id="signin-genre" style="background-color: black !important;color:white !important" name="destinationHotel">
                    <option value="" disabled selected>Destination Hotel</option>
                    @foreach($hotelsWithDestination as $destination)
                    <option value="{{$destination['destination_id']}}" style="color: white;">{{$destination['destination']}}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="restaurants">
            <div class="form-group form-group-select">
                <select class="form-input" id="signin-genre" style="background-color: black !important;color:white !important" name="restaurant">
                    <option value="" disabled selected>Restaurant</option>
                    @foreach($restaurants as $restaurant)
                    <option value="{{$restaurant->id}}">{{$restaurant->restaurant->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group form-group-select">
                <select class="form-input" id="signin-genre" style="background-color: black !important;color:white !important" name="destinationRestaurant">
                    <option value="" disabled selected>Destination Restaurant</option>
                    @foreach($restaurantsWithDestination as $destination)
                    <option value="{{$destination['destination_id']}}" style="color: white;">{{$destination['destination']}}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="souvenir">
            <label style="float:left">Souvenir</label>
            <input type="file" name="image" id="">
        </div>
        @if ($errors->any())
    <div style="background-color: #e13f09;color:white;padding:5px;margin-top:8px;margin-bottom:10px;border-radius:8px">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
@endif
        <div class="form-group commentaire">
            <label style="float:left">Commentaire</label>
            <textarea name="commentaire" cols="30" rows="10"></textarea>
        </div>

        <button class="form-btn" id="signin-btn">Laisser Feedback</button>




    </div>
</form>
@endsection
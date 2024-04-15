@extends('clients.layout')
@section('title')
<h1 style="font-size:26px;color:white">Messages  d'Admin</h1>
@endsection
@section('content')

@foreach($messages as $message)
<div class="card">
      <img src="frontend/images/travel-clt.webp" />
      <div>
        <h1>Bonjour {{$message->nom}} {{$message->prenom}}</h1>
        <h3>"Concernant votre dernier contact, voici la réponse :"</h3>
        
        <p class="content">{{$message->messageParAdmin}}</p>
      </div>
    </div>
@endforeach
@endsection

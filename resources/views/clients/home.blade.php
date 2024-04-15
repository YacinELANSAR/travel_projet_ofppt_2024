@extends('clients.layout')
@section('title')
<h1 style="font-size:26px;color:white">Contacter Admin</h1>
@endsection
@section('content')

<div class="wrapper" style="margin-top: 50px;height:70%;" >
  @if(session('success'))
      <div style="padding: 8px;text-align:center;color:white;background-color:#00a249" role="alert">
          {{ session('success') }}
      </div>
      @endif
  <form action="{{route('contacts.store')}}" method="post">
    @csrf
    <input type="hidden" name="userId" value="{{$user->id}}">
    <div class="contact-form">
      <div class="input-fields">
      <img src="frontend/images/mantravel.png" >
        </div>
        <div class="msg">
      <input type="text" class="input" placeholder="Sujet" name="subject" required style="background-color: black;color:white;border-radius:5px">
      <textarea placeholder="Message" name="content" required style="background-color: black;color:white;border-radius:5px"></textarea>
      <button type="submit" class="btn" style="background-color: black;color:white;border-radius:5px;border:1px solid white">Envoyer</button>
    </div>
  </div>
  </form>
  
 
</div>
@endsection
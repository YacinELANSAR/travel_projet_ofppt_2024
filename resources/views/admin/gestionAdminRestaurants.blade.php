@extends('admin.layout')
@section('title')
<h2>La gestion des admins des restaurants</h2>
@endsection
@section('content')
<form action="{{route('adminRestaurants.store')}}" method="post" accept-charset="utf-8">
    @csrf
    <label style="color: green;">Restaurant </label>
    <div class="input">
        <select name="restaurant" id="" style="width: 100%;">
            <option disabled>Choisir Restaurants</option>
            @forelse($restaurants as $restaurant)
            <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
            @empty
            <option style="background-color: red;color:white">Aucun restaurant n'a été ajouté pour le moment.</option>
            @endforelse
        </select>
    </div>
    <label style="color: green;">Nom</label>
    <div class="input">

        <input type="text" name="nom" placeholder="Nom *" required>
    </div>

    <label style="color: green;">Prenom</label>
    <div class="input">
        </span>
        <input type="text" name="prenom" placeholder="Prenom *" required>
    </div>

    <label style="color: green;">Email</label>
    <div class="input">
        <input type="email" name="email" placeholder="email *" required />

    </div>

    
    <label style="color:green">Genre</label>

    <select class="input" name="genre" style="width: 95%;">
        <option value="" disabled selected>Genre</option>
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select>
    <label style="color: green;">Telephone</label>
    <div class="input">
        <input type="tel" name="telephone" placeholder="telephone *">

    </div>
    <label style="color: green;">password</label>
    <div class="input">
        <input type="password" name="password" placeholder="password *">

    </div>
    <div style="margin-bottom: 7px;">
        <input type="submit" value="Ajouter" style="color:green;border:2px solid green" />
    </div>
</form>
<div class="container">

    <table>
        <thead >
            <tr >
                <th style="background-color:green">Nom</th>
                <th style="background-color:green">Prenom</th>
                <th style="background-color:green">Email</th>
                <th style="background-color:green">Genre</th>
                <th style="background-color:green">Telephone</th>
                <th style="background-color:green">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->nom }}</td>
                <td>{{ $admin->prenom }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->genre }}</td>
                <td>{{ $admin->telephone }}</td>
                <td>
                <form action="{{ route('adminRestaurants.destroy', $admin->id) }}" method="post" id="deleteForm">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet administrateur de restaurant?')" style="text-decoration: none; padding:5px;background-color:#e13f09;color:white;font-weight:bold;border-radius:5px;border-color:#e13f09">Supprimer</button>
</form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    


</div>
@endsection
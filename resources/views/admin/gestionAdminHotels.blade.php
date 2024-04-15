@extends('admin.layout')
@section('title')
<h2>La gestion des admins des hotels</h2>
@endsection
@section('content')
<form action="{{route('adminHotels.store')}}" method="post" accept-charset="utf-8">
    @csrf
    <label>Hotel </label>
    <div class="input">
        <select name="hotel"  style="width: 100%;">
            <option disabled>Choisir Hotels</option>
            @forelse($hotels as $hotel)
            <option value="{{$hotel->id}}">{{$hotel->nom}}</option>
            @empty
            <option style="background-color: red;color:white">Aucun hôtel n'a été ajouté pour le moment.</option>
            @endforelse
        </select>
    </div>
    <label>Nom</label>
    <div class="input">

        <input type="text" name="nom" placeholder="Nom *" required>
    </div>

    <label>Prenom</label>
    <div class="input">
        </span>
        <input type="text" name="prenom" placeholder="Prenom *" required>
    </div>

    <label>Email</label>
    <div class="input">
        <input type="email" name="email" placeholder="email *" required />

    </div>

    <label>password</label>
    <div class="input">
        <input type="password" name="password" placeholder="password *">

    </div>
    <label>Genre</label>

    <select class="input" name="genre" style="width: 95%;">
        <option value="" disabled selected>Genre</option>
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select>
    <label>Telephone</label>
    <div class="input">
        <input type="tel" name="telephone" placeholder="telephone *">

    </div>
    <div style="margin-bottom: 7px;">
        <input type="submit" value="Ajouter"  />
    </div>
</form>
<div class="container">

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Genre</th>
                <th>Telephone</th>
                <th>Action</th>
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
                <form action="{{ route('adminHotels.destroy', $admin->id) }}" method="post" id="deleteForm">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet administrateur d\'hôtel?')" style="text-decoration: none; padding:5px;background-color:#e13f09;color:white;font-weight:bold;border-radius:5px;border-color:#e13f09">Supprimer</button>
</form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    


</div>
@endsection
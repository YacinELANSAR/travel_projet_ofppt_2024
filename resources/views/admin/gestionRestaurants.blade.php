@extends('admin.layout')
@section('title')
<h2> La gestion des restaurants</h2>

@endsection
@section('content')
<form action="{{ route('restaurants.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="destination" style="color: green;">Destination</label>
    <select name="destination" id="destination" style="width: 96%; padding: 7px; border-radius: 4px; border: 1px solid blue; margin-left: 5px;">
        @foreach($destinations as $destination)
            <option value="{{ $destination->id }}">{{ $destination->name }}</option>
        @endforeach
    </select>

    <label for="nom" style="color: green;">Nom</label>
    <div class="input">
        <input type="text" name="nom" id="nom" placeholder="Nom *" required>
    </div>

    <label for="description" style="color: green;">Description de restaurant</label>
    <div class="input">
        <input type="text" name="description" id="description" placeholder="Description *" required>
    </div>

    <label for="etoiles" style="color: green;">Etoiles</label>
    <div class="input">
        <input type="number" step="0.1" max="5" name="etoiles" id="etoiles" placeholder="Etoiles *" required>
    </div>

    <label for="adresse" style="color: green;">Adresse Physique</label>
    <div class="input">
        <input type="text" name="adresse" id="adresse" placeholder="Adresse Physique *" required>
    </div>

    

    <label for="image" style="color: green;">Image</label>
    <div class="input">
        <input type="file" name="image" id="image" required>
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
<div style="margin-bottom: 7px;">
        <input type="submit" value="Ajouter" style="color:green;border:2px solid green" />
    </div>
</form>


<div class="container">
    <table >
        <thead>
            <tr>
                <th style="text-align: center;background-color:green">Nom</th>
                <th style="text-align: center;background-color:green">Description</th>
                <th style="text-align: center;background-color:green">Étoiles</th>
                <th style="text-align: center;background-color:green">Adresse</th>
                <th style="text-align: center;background-color:green">Image</th>
                <th style="text-align: center;background-color:green">Action</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($restaurants as $restaurant)
            <tr >
                <td style="text-align: center;">{{ $restaurant->name }}</td>
                <td style="text-align: center;">{{ $restaurant->description }}</td>
                <td style="text-align: center;">{{ $restaurant->etoiles }}</td>
                <td style="text-align: center;">{{ $restaurant->adressePhysique }}</td>
                <td style="text-align: center;  "><img style="border-radius: 8px;" src="{{$restaurant->image}}" alt="Image de l'hôtel" width="55%" ></td>
                <td style="text-align: center;">
                    <form action="{{route('restaurants.destroy',$restaurant->id)}}" method="post" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet restaurant?')" style="text-decoration: none; padding:5px;background-color:#e13f09;color:white;font-weight:bold;border-radius:5px;border-color:#e13f09">Supprimer</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
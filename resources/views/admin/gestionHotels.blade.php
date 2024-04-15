@extends('admin.layout')
@section('title')
<h2> La gestion des hotels</h2>

@endsection
@section('content')
<form action="{{ route('hotels.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="destination">Destination</label>
    <select name="destination" id="destination" style="width: 96%; padding: 7px; border-radius: 4px; border: 1px solid blue; margin-left: 5px;">
        @forelse($destinations as $destination)
            <option value="{{ $destination->id }}">{{ $destination->name }}</option>
            @empty
            <option value="{{ $destination->id }}">{{ $destination->name }}</option>

        @endforelse
    </select>

    <label for="nom">Nom</label>
    <div class="input">
        <input type="text" name="nom" id="nom" placeholder="Nom *" required>
    </div>

    <label for="description">Description d'hotel</label>
    <div class="input">
        <input type="text" name="description" id="description" placeholder="Description *" required>
    </div>

    <label for="etoiles">Etoiles</label>
    <div class="input">
        <input type="number" step="0.1" max="5" name="etoiles" id="etoiles" placeholder="Etoiles *" required>
    </div>

    <label for="adresse">Adresse Physique</label>
    <div class="input">
        <input type="text" name="adresse" id="adresse" placeholder="Adresse Physique *" required>
    </div>

    <label for="prix">Prix par nuit</label>
    <input type="number" step="0.1" name="prix" id="prix" placeholder="Prix par nuit *" style="width: 90%;" required>

    <label for="image">Image</label>
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
        <input type="submit" value="Ajouter">
    </div>
</form>
<div class="container">
    <table >
        <thead>
            <tr>
                <th style="text-align: center;">Nom</th>
                <th style="text-align: center;">Description</th>
                <th style="text-align: center;">Étoiles</th>
                <th style="text-align: center;">Adresse</th>
                <th style="text-align: center;">Prix</th>
                <th style="text-align: center;">Image</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($hotels as $hotel)
            <tr >
                <td style="text-align: center;">{{ $hotel->nom }}</td>
                <td style="text-align: center;">{{ $hotel->description }}</td>
                <td style="text-align: center;">{{ $hotel->etoiles }}</td>
                <td style="text-align: center;">{{ $hotel->adressePhysique }}</td>
                <td style="text-align: center;">{{ $hotel->prixParNuit }} DH</td>
                <td style="text-align: center;"><img style=" border-radius: 8px;" src="{{$hotel->image}}" alt="Image de l'hôtel" width="55%" ></td>
                <td style="text-align: center;">
                    <form action="{{route('hotels.destroy',$hotel->id)}}" method="post" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet hôtel?')" style="text-decoration: none; padding:5px;background-color:#e13f09;color:white;font-weight:bold;border-radius:5px;border-color:#e13f09">Supprimer</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
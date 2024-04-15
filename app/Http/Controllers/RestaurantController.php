<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::all();
        $restaurants=Restaurant::all();
        return view('admin.gestionRestaurants',compact('destinations','restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'destination' => 'required|exists:destinations,id',
        'nom' => 'required|string',
        'adresse' => 'required|string',
        'description' => 'required|string',
        'etoiles' => 'required|numeric|min:0|max:5',
        'image' => 'required', // Vérification que le fichier est une image et de certains formats
    ]);

    // Enregistrement de l'image
    $allowedExtensions = ['jpeg', 'png', 'jpg', 'gif']; 
    $filename = ''; 
            
    if ($request->hasFile('image')) {
        $extension = $request->image->extension(); 
        
        if (in_array($extension, $allowedExtensions)) {
            $filename = $request->getSchemeAndHttpHost() . '/storage/imageRestaurants/' . time() . '.' . $extension;
            $request->image->move(public_path('/storage/imageRestaurants/'), $filename);
        } else {
            return redirect()->route('restaurants.index')->withErrors(['Seuls les fichiers JPEG, PNG, JPG et GIF sont autorisés.']);
        }
    }
    // Enregistrer les données du restaurant dans la base de données
    $restaurant = new Restaurant();
    $restaurant->destination_id = $validatedData['destination'];
    $restaurant->name = $validatedData['nom'];
    $restaurant->description = $validatedData['description'];
    $restaurant->etoiles = $validatedData['etoiles'];
    $restaurant->adressePhysique = $validatedData['adresse'];

    $restaurant->image=$filename;

    
    // Sauvegarde du restaurant
    $restaurant->save();
    $destinations = Destination::all();
    $restaurants=Restaurant::all();
    // Redirection vers la page d'accueil ou toute autre page appropriée après l'enregistrement
    return view('admin.gestionRestaurants',compact('destinations','restaurants'));
}


    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return back();
    }
}

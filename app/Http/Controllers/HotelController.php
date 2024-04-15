<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $destinations = Destination::all();
    $hotels = Hotel::all();
    return view('admin.gestionHotels', compact('destinations', 'hotels'));
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
        'description' => 'required|string',
        'etoiles' => 'required|numeric|min:0|max:5',
        'adresse' => 'required|string',
        'prix' => 'required|numeric|min:0',
        'image' => 'required', // Vérification que le fichier est une image et de certains formats
    ]);
     // Enregistrement de l'image
     $allowedExtensions = ['jpeg', 'png', 'jpg', 'gif','webp']; 
     $filename = ''; 
             
     if ($request->hasFile('image')) {
         $extension = $request->image->extension(); 
         
         if (in_array($extension, $allowedExtensions)) {
             $filename = $request->getSchemeAndHttpHost() . '/storage/imageHotels/' . time() . '.' . $extension;
             $request->image->move(public_path('/storage/imageHotels/'), $filename);
         } else {
             return redirect()->route('hotels.index')->withErrors(['Seuls les fichiers JPEG, PNG, JPG ,webp et GIF sont autorisés.']);
         }
     }
    // Enregistrer les données de l'hôtel dans la base de données
    $hotel = new Hotel();
    $hotel->destination_id = $validatedData['destination'];
    $hotel->nom = $validatedData['nom'];
    $hotel->description = $validatedData['description'];
    $hotel->etoiles = $validatedData['etoiles'];
    $hotel->adressePhysique = $validatedData['adresse'];
    $hotel->prixParNuit = $validatedData['prix'];
    $hotel->image=$filename;

   
    // Sauvegarde de l'hôtel
    $hotel->save();
    $hotels=Hotel::all();
    $destinations = Destination::all();

    // Redirection vers la page d'accueil ou toute autre page appropriée après l'enregistrement
    return view('admin.gestionHotels',compact('destinations','hotels'));
}

    

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
{
    $hotel->delete();
    return back();
}

}

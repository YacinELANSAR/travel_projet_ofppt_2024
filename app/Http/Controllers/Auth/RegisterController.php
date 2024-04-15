<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    

public function ajouterClient(Request $request)
{
    // Valider les entrées du formulaire
    $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'telephone' => 'required|string|max:15',
        'genre' => 'required|string|in:homme,femme',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:6',
    ]);

    // Vérifier si la validation a échoué
    if ($validator->fails()) {
        return redirect()->route('showregister')->withErrors($validator)->withInput();
    }

    // Créer un nouvel utilisateur
    $user = new User();
    $user->nom = $request->input('nom');
    $user->prenom = $request->input('prenom');
    $user->telephone = $request->input('telephone');
    $user->genre = $request->input('genre');
    $user->email = $request->input('email');
    $user->email_verified_at = now();
    $user->password = Hash::make($request->input('password'));
    $user->role = 'CLT'; 
    $user->messageParAdmin='Aucun message trouvé pour le moment';
    $user->save();

    // Rediriger vers une page de succès ou une autre action
    return redirect()->route('showlogin')->with('success', 'Votre compte a été créé avec succès. Veuillez vous connecter.');
}


}

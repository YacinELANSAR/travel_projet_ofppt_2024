<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\restaurantReservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminRestaurantsController extends Controller
{
    public function unverifiedClt()
    {
        $unverifiedHotelClients = restaurantReservation::unverifiedClientsRestaurant()->get();
        return view('adminHotel.home',compact('unverifiedHotelClients'));
        }
    public function verifiedClt()
    {
        $verifiedHotelClients = restaurantReservation::unverifiedClientsRestaurant()->get();
        return view('adminHotel.verifiedClients',compact('verifiedHotelClients'));
        }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins=User::where('role' , 'ADMIN_RESTAURANT')->get();
        $restaurants=Restaurant::all();
    return view('admin.gestionAdminRestaurants',compact('admins','restaurants'));
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
        $validator = Validator::make($request->all(), [
                    'nom' => 'required|string|max:255',
                    'prenom' => 'required|string|max:255',
                    'telephone' => 'required|string|max:15',
                    'genre' => 'required|string|in:homme,femme',
                    'email' => 'required|string|email|unique:users|max:255',
                    'password' => 'required|string|min:6',
                    'restaurant'=>'required|integer'
                ]);
                $user = new User();
                $user->nom = $request->input('nom');
                $user->prenom = $request->input('prenom');
                $user->telephone = $request->input('telephone');
                $user->genre = $request->input('genre');
                $user->email = $request->input('email');
                $user->email_verified_at = now();
                $user->password = Hash::make($request->input('password'));
                $user->role = 'ADMIN_RESTAURANT'; 
                $user->messageParAdmin='you are ADMIN_RESTAURANT(No-message)';
                $user->restaurant_id=$request->restaurant;
                $user->save();
                $admins=User::where('role', 'ADMIN_RESTAURANT')->get();
                $restaurants=Restaurant::all();
                return view('admin.gestionAdminRestaurants',compact('admins','user','restaurants'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $adminHotel = User::where('role', 'ADMIN_RESTAURANT')->findOrFail($id);
     $adminHotel->delete();
        return back();
    }
}

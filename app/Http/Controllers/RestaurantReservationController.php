<?php

namespace App\Http\Controllers;

use App\Models\restaurantReservation;
use Illuminate\Http\Request;

class RestaurantReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'userId' => 'required|exists:users,id',
            'restaurant' => 'required|exists:restaurants,id',
            'number_of_guests' => 'required|integer|min:1',
        ]);
        $restaurantReservation = new RestaurantReservation;
        $restaurantReservation->user_id = $validatedData['userId'];
        $restaurantReservation->restaurant_id = $validatedData['restaurant'];
        $restaurantReservation->reservation_datetime = now();
        $restaurantReservation->number_of_guests = $validatedData['number_of_guests'];
        $isSaved = $restaurantReservation->save();

    if ($isSaved) {
        return redirect()->route('reservations.showDestinations')->with('success', 'Votre demande de réservation a été envoyée. Veuillez attendre la confirmation de l\'administrateur de la restaurant.');
    } else {
        return redirect()->route('reservations.showDestinations')->with('error', 'Une erreur s\'est produite lors de l\'enregistrement de votre demande de réservation. Veuillez réessayer.');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(restaurantReservation $restaurantReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(restaurantReservation $restaurantReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'is_verified' => 'boolean',
        ]);
        $id = $request->reservation_restaurant_id;
        $reservation = restaurantReservation::findOrFail($id);
        $reservation->isVerified = $request->has('is_verified');
        $isUpdated=$reservation->save();
        if ($isUpdated) {
            return redirect()->route('ADM_RESTAURANT.unverifiedCltrestaurant')->with('success', 'Utilisateur vérifié.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(restaurantReservation $restaurantReservation)
    {
        //
    }
}

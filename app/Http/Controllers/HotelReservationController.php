<?php

namespace App\Http\Controllers;

use App\Models\hotelReservation;
use Illuminate\Http\Request;

class HotelReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'userId' => 'required|exists:users,id',
            'hotel' => 'required|exists:hotels,id',
            'number_of_guests' => 'required|integer|min:1',
        ]);

        $hotelReservation = new HotelReservation;
        $hotelReservation->user_id = $validatedData['userId'];
        $hotelReservation->hotel_id = $validatedData['hotel'];
        $hotelReservation->number_of_guests = $validatedData['number_of_guests'];
        $isSaved = $hotelReservation->save();

        if ($isSaved) {
            return redirect()->route('reservations.showDestinations')->with('success', 'Votre demande de réservation a été envoyée. Veuillez attendre la confirmation de l\'administrateur de l\'hôtel.');
        } else {
            return redirect()->route('reservations.showDestinations')->with('error', 'Une erreur s\'est produite lors de l\'enregistrement de votre demande de réservation. Veuillez réessayer.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(hotelReservation $hotelReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hotelReservation $hotelReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date',
            'is_verified' => 'boolean',
        ]);
        $id = $request->reservation_hotel_id;
        $reservation = HotelReservation::findOrFail($id);
        $reservation->check_in_date = $request->check_in_date;
        $reservation->check_out_date = $request->check_out_date;
        $reservation->isVerified = $request->has('is_verified');
        $isUpdated=$reservation->save();
        if ($isUpdated) {
            return redirect()->route('ADM_HOTEL.unverifiedClt')->with('success', 'Utilisateur vérifié.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hotelReservation $hotelReservation)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\FeedBack;
use App\Models\Hotel;
use App\Models\hotelReservation;
use App\Models\Restaurant;
use App\Models\restaurantReservation;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function showFeedbackForm()
    {
        $user = session('user');
        $restaurants = RestaurantReservation::where('user_id', $user->id)
            ->with('restaurant.destination')
            ->get();

        $restaurantsWithDestination = $restaurants->map(function ($reservation) {
            return [
                'restaurant_id' => $reservation->restaurant->id,
                'restaurant' => $reservation->restaurant->nom,
                'destination_id' => $reservation->restaurant->destination->id,
                'destination' => $reservation->restaurant->destination->name,
            ];
        });
        $hotels = HotelReservation::where('user_id', $user->id)
            ->with('hotel.destination')
            ->get();
        $hotelsWithDestination = $hotels->map(function ($reservation) {
            return [
                'hotel_id' => $reservation->hotel->id,
                'hotel' => $reservation->hotel->nom,
                'destination_id' => $reservation->hotel->destination->id,
                'destination' => $reservation->hotel->destination->name,
            ];
        });

        $destinationRestaurantIds = $restaurants->pluck('restaurant')->toArray();

        return view('clients.feedbacks', compact('hotels', 'restaurants', 'hotelsWithDestination', 'restaurantsWithDestination','user'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::all();
        return view('RechercherFeedBacks', compact('destinations'));
    }

    public function showFeedbacksHotelsAndRestaurant(Request $request)
    {
        $destinations = Destination::all();

        $destinationId = $request->input('destination');

        $comments = FeedBack::where('destination_id', $destinationId)->get();
        $hotel = Hotel::find($destinationId);
        $restaurant = Restaurant::find($destinationId);

        return view('feedBacks', compact('comments', 'destinations', 'hotel', 'restaurant'));
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
    $destinationHotelId = $request->destinationHotel;
    $destinationRestaurantId = $request->destinationRestaurant;
    $restaurantId = $request->restaurant;
    $hotelId = $request->hotel;
    $userId = $request->userId;
    $commentaire = $request->commentaire;
    $allowedExtensions = ['jpeg', 'png', 'jpg', 'gif'];
    $filename = '';
    if ($request->hasFile('image')) {
        $extension = $request->image->extension();

        if (in_array($extension, $allowedExtensions)) {
            $filename = $request->getSchemeAndHttpHost() . '/storage/imageFeedbacks/' . time() . '.' . $extension;
            $request->image->move(public_path('/storage/imageFeedbacks/'), $filename);
        } else {
            return back()->withErrors(['Seuls les fichiers JPEG, PNG, JPG et GIF sont autorisés.']);
        }
    }

    $feedback = new FeedBack;
    $feedback->user_id = $userId;
    $feedback->comment = $commentaire;
    $feedback->image = $filename;

    if ($destinationHotelId !== null) {
        $feedback->hotel_id = $hotelId;
        $feedback->restaurant_id = null;
        $feedback->destination_id = $destinationHotelId;
    } elseif ($destinationRestaurantId !== null) {
        $feedback->restaurant_id = $restaurantId;
        $feedback->hotel_id = null;
        $feedback->destination_id = $destinationRestaurantId;
    }
    

    $isSaved=$feedback->save();
    if ($isSaved) {
    return back()->with('success', 'Votre feedback a été ajouté avec succès');
} else {
    return back()->withInput()->withErrors('Une erreur est survenue lors de l\'enregistrement du feedback');
}


}


    /**
     * Display the specified resource.
     */
    public function show(FeedBack $feedBack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeedBack $feedBack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FeedBack $feedBack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeedBack $feedBack)
    {
        //
    }
}

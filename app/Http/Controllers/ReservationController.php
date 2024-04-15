<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function showDestinations(){
        $destinations=Destination::all();
        return view('clients.RechercherDestinations',compact('destinations'));
    }
    public function showHotelsAndRestaurant(Request $request){
        $user = session('user');
        $destinations=Destination::all();
        $idDestination=$request->destination;
        $hotels=Hotel::where('destination_id',$idDestination)->get();
        $restaurants=Restaurant::where('destination_id',$idDestination)->get();
        return view('clients.HotelsRestaurants',compact('destinations','hotels','restaurants','user'));
         }
}

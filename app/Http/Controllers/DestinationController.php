<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function showDestinations(){
        $destinations=Destination::all();
        return view('RechercherDestinations',compact('destinations'));
    }
    public function showHotelsAndRestaurant(Request $request){
       $destinations=Destination::all();
       $idDestination=$request->destination;
       $hotels=Hotel::where('destination_id',$idDestination)->get();
       $restaurants=Restaurant::where('destination_id',$idDestination)->get();
       return view('HotelsRestaurants',compact('destinations','hotels','restaurants'));
        }
    
    
}

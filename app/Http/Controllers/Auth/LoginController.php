<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\hotelReservation;
use App\Models\Restaurant;
use App\Models\restaurantReservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function connecter(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->route('showlogin')->withErrors($validator)->withInput();
    }

    $email = $request->input('email');
    $password = $request->input('password');
    $user = User::where('email', $email)->first();

    if ($user && Hash::check($password, $user->password)) {
        session(['user' => $user]);
        $role = $user->role;
        $hotels=Hotel::all();
        $unverifiedHotelClients = hotelReservation::unverifiedClients()->get();
        $unverifiedRestaurantClients = restaurantReservation::unverifiedClientsRestaurant()->get();
        switch ($role) {
            case 'ADM':
                $admins=User::where('role' , 'ADMIN_HOTEL')->paginate(3);
    return view('admin.gestionAdminHotels',compact('admins','user','hotels'));
                break;
            case 'CLT':
                return view('clients.home',compact('user'));
                break;
            case 'ADMIN_RESTAURANT':
                return view('adminRestaurant.home',compact('unverifiedRestaurantClients'));
                break;
            case 'ADMIN_HOTEL':
            
                return view('adminHotel.home',compact('unverifiedHotelClients'));
                break;
            default:
                break;
        }
    }

    return redirect()->route('showlogin')->withErrors([
        'error' => 'Adresse email ou mot de passe incorrect',
    ]);
}
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('showlogin');
    }

}

   



    
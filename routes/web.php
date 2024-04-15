<?php

use App\Http\Controllers\AdminHotelsController;
use App\Http\Controllers\AdminRestaurantsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelReservationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RestaurantReservationController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tologin',[LoginController::class,'index'])->name('showlogin');
Route::post('/tologin',[LoginController::class,'connecter'])->name('connecterlogin');
Route::get('/toregister',[RegisterController::class,'index'])->name('showregister');
Route::post('/toregister',[RegisterController::class,'ajouterClient'])->name('ajouterregister');
Route::delete('logout',[LoginController::class,'logout'])->name('logout');
Route::get('destinations',[DestinationController::class,'showDestinations'])->name('destinations.showDestinations');
Route::post('destinations',[DestinationController::class,'showHotelsAndRestaurant'])->name('destinations.showHotelsAndRestaurant');
Route::post('getfeedbacks',[FeedBackController::class,'showFeedbacksHotelsAndRestaurant'])->name('feedbacks.showFeedbacksHotelsAndRestaurant');
Route::resource('feedbacks',FeedBackController::class);
Route::get('/FeedbackForm',[FeedBackController::class,'showFeedbackForm'])->name('feedbacks.showFeedbackForm');

Route::resource('adminHotels',AdminHotelsController::class);
Route::get('/unverifiedClt',[AdminHotelsController::class,'unverifiedClt'])->name('ADM_HOTEL.unverifiedClt');
Route::get('/verifiedClt',[AdminHotelsController::class,'verifiedClt'])->name('ADM_HOTEL.verifiedClt');
Route::get('/unverifiedCltrestaurant',[AdminRestaurantsController::class,'unverifiedClt'])->name('ADM_RESTAURANT.unverifiedCltrestaurant');
Route::get('/verifiedCltrestaurant',[AdminRestaurantsController::class,'verifiedClt'])->name('ADM_RESTAURANT.verifiedCltrestaurant');
Route::resource('adminRestaurants',AdminRestaurantsController::class);
Route::resource('hotels',HotelController::class);
Route::resource('restaurants',RestaurantController::class);
Route::resource('contacts',ContactController::class);
Route::post('hotelsReservations',[HotelReservationController::class,'store'])->name('hotelsReservations.store');
Route::put('hotelsReservations',[HotelReservationController::class,'update'])->name('hotelsReservations.update');
Route::put('restaurantsReservations',[RestaurantReservationController::class,'update'])->name('restaurantsReservations.update');
Route::post('restaurantsReservations',[RestaurantReservationController::class,'store'])->name('restaurantsReservations.store');
Route::get('/contactUs',[ContactController::class,'getFormContact'])->name('showMessageForContact');
Route::get('/messageAdmin',[ContactController::class,'showMessageAdmin'])->name('showMessageAdmin');
Route::get('/contacterNous',[ContactController::class,'getFormContactForConnectedClient'])->name('showMessageContactForConnectedClt');
Route::post('repondeMessage',[ContactController::class,'reponseMessage'])->name('contacts.reponse');
Route::get('/Rechercher-reservations',[ReservationController::class,'showDestinations'])->name('reservations.showDestinations');
Route::post('getDestinations',[ReservationController::class,'showHotelsAndRestaurant'])->name('reservations.showHotelsAndRestaurant');



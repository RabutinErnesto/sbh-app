<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\PageController;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/


Route::resource('/villages', VillageController::class);
Route::get('/accueil', [PageController::class,'accueil']);
//Route::put('/villages/{id}', VillageController::class.'@update');
//Route::put('/villages/{id}', VillageController::class);

Route::resource('/distance', 'App\Http\Controllers\DistanceController'::class);
Route::resource('/hotels', 'App\Http\Controllers\HotelController'::class);
Route::resource('/activites', 'App\Http\Controllers\ActiviteController'::class);
Route::resource('/locations', 'App\Http\Controllers\LocationController'::class);
Route::resource('/guides', 'App\Http\Controllers\GuideController'::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

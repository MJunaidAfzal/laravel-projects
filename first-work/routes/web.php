<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\HondaController;
use App\Https\Controllers\VanController;
use App\Https\Controllers\TaxiController;
use App\Https\Controllers\PoliceController;
use App\Https\Controllers\BusController;
use App\Https\Controllers\ScooterController;
use App\Https\Controllers\ShipController;
use App\Https\Controllers\HelicopterController;
use App\Https\Controllers\AirplaneController;
use App\Https\Controllers\SubmarineController;
use App\Https\Controllers\TrainController;
use App\Https\Controllers\RickshawController;
use App\Https\Controllers\CycleController;
use App\Https\Controllers\BikeController;
use App\Https\Controllers\TractorController;
use App\Https\Controllers\CarController;
use App\Https\Controllers\AmbulanceController;
use App\Https\Controllers\CraneController;
use App\Https\Controllers\BoatController;
use App\Https\Controllers\BallonController;




















/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HondaController::class,'honda']);
Route::get('/',[VanController::class,'van']);
Route::get('/',[TaxiController::class,'taxi']);
Route::get('/',[PoliceController::class,'police']);
Route::get('/',[BusController::class.'bus']);
Route::get('/',[ScooterController::class.'scooter']);
Route::get('/',[ShipController::class.'ship']);
Route::get('/',[HelicopterController::class.'helicopter']);
Route::get('/',[AirplaneController::class.'airplane']);
Route::get('/',[SubmarineController::class.'submarine']);
Route::get('/',[TrainController::class.'train']);
Route::get('/',[RickshawController::class.'rickshaw']);
Route::get('/',[CycleController::class.'cycle']);
Route::get('/',[BikeController::class.'bike']);
Route::get('/',[TractorController::class.'tractor']);
Route::get('/',[CarController::class.'car']);
Route::get('/',[AmbulanceController::class.'ambulance']);
Route::get('/',[CraneController::class.'crane']);
Route::get('/',[BoatController::class.'boat']);
Route::get('/',[BallonController::class.'ballon']);















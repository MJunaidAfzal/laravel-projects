<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\cars\CarController;
use App\Http\Controllers\FactoryController;










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

Route::get('/',[HomeController::class,'home']);
Route::get('/',[IndexController::class,'nav']);
Route::get('/',[IndexController::class,'footer']);
Route::get('index',[IndexController::class,'index'])->name('index');
Route::get('homee',[IndexController::class,'homee'])->name('homee');
Route::get('about',[IndexController::class,'about'])->name('about');
Route::get('services',[IndexController::class,'services'])->name('services');
Route::get('contact',[IndexController::class,'contact'])->name('contact');
Route::get('/',[CarController::class,'car']);
//factory route
Route::get('factories',[FactoryController::class,'index'])->name('factories.index');
Route::get('factories/create', [FactoryController::class, 'create'])->name('factories.create');
Route::post('factories/store', [FactoryController::class, 'store'])->name('factories.store');
Route::get('factories/{id}/edit', [FactoryController::class, 'edit'])->name('factories.edit');
Route::post('factories/{id}/update', [FactoryController::class, 'update'])->name('factories.update');
Route::get('factories/{id}/delete', [FactoryController::class, 'delete'])->name('factories.delete');














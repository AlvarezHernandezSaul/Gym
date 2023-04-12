<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumnoscontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\UserController;
//LOGIN ROUTES
Route::get('/', function () {
    return view('view1');});
Route::get('/home', function () { return view('user.home' );})->middleware('auth');

 Route::get('/register', [RegisterController::class, 'create'])
 ->middleware('guest')
 ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
->name('register.store');

 Route::get('/login', [SessionsController::class, 'create'])
 ->middleware('guest')
->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');
Route::get('view1', function() { return view('view1'); })->name('view1');       
//Roles controll
 //Route::get('/admin', [AdminController::class, 'index'])
 //->name('admin.index');

 Route::get('/coach', [CoachController::class, 'index'])
 ->name('coach.index');


 //RecipeController
 // Rutas para el controlador RecipeController
 Route::get('/recipes', 'RecipeController@index')->name('recipes.index');
 Route::get('/recipes/create', 'RecipeController@create')->name('recipes.create');
 Route::post('/recipes', 'RecipeController@store')->name('recipes.store');
 Route::get('/recipes/{recipe}', 'RecipeController@show')->name('recipes.show');
 Route::get('/recipes/{recipe}/edit', 'RecipeController@edit')->name('recipes.edit');
 Route::put('/recipes/{recipe}', 'RecipeController@update')->name('recipes.update');
 Route::delete('/recipes/{recipe}', 'RecipeController@destroy')->name('recipes.destroy');

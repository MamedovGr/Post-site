<?php

use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\App\Models;
//use Illuminate\Contracts\View\Factory\Illuminate\Contracts\View\;


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
//All listings
Route::get('/', [\App\Http\Controllers\ListingController::class, 'index']);


// Show create form
Route::get('/listings/create', [\App\Http\Controllers\ListingController::class, 'create'])->middleware('auth');


// Store listing data
Route::post('/listings', [\App\Http\Controllers\ListingController::class, 'store']);

// Show edit Form
Route::get('/listings/{listing}/edit' , [\App\Http\Controllers\ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'destroy'])->middleware('auth');

// Manage listings
Route::get('/listings/manage', [\App\Http\Controllers\ListingController::class, 'manage'])->middleware('auth');

// Single Listings
Route::get('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);

// Show Register/create Form
Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->middleware('guest');

// Create new user
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store']);

// Log User Out
Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('login', [\App\Http\Controllers\UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/users/authenticate', [\App\Http\Controllers\UserController::class, 'authenticate']);


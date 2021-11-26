<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullController;

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

// Route::get('rooms', function () {
//     return view('rooms');
// });

Route::get('rooms', [FullController::class, 'showRooms']);

// Route::get('about', function () {
//     return view('about');
// });

Route::get('about', [FullController::class, 'showAbout']);

// Route::get('contact', function () {
//     return view('contact');
// });

Route::get('contact', [FullController::class, 'showContact']);
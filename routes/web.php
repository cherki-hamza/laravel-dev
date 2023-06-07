<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DonorSearchController;
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
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@create')->name('register');


Auth::routes();

Route::get('/blood-donation-process', function () {
    return view('donner');
});

// Route::get('/search', function () {
//     return view('search');
// });


// Route::get('/search', [DonorSearchController::class, 'search'])->name('search');

Route::prefix('/donors')->group(function () {
    Route::get('', [DonorSearchController::class, 'index'])->name('donorsPage');
    Route::post('/search', [DonorSearchController::class, 'search'])->name('donorsSearch');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

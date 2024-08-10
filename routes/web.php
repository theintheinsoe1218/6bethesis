<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\MatrixController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecommendationController;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hotels', function () {
    return view('hotel');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/rate', [RatingController::class, 'index'])->name('rate');
Route::post('/rate', [RatingController::class, 'store']);
// Route::get('/recommendation/{userId}', [RecommendationController::class, 'recommendHotel']);
Route::get('/recommendations', [RecommendationController::class, 'index'])
    ->middleware('auth') // Ensure user is authenticated
    ->name('recommendations.index');

Route::get('/matrix', [MatrixController::class, 'showMatrix']);

Route::resource('hotels', HotelController::class);

Route::post('/recommendations', [RecommendationController::class, 'processRecommendation'])
->middleware('auth')
->name('recommendations.process');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

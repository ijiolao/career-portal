<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CreateJobListing;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/listings', [CreateJobListing::class, 'index'])->name('listings');
    Route::get('/create', [CreateJobListing::class, 'create'])->name('create');
    Route::post('/store', [CreateJobListing::class, 'store'])->name('store');
    Route::post('/search', [SearchListings::class, 'search'])->name('search');


});

require __DIR__.'/auth.php';

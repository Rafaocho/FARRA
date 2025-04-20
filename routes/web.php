<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\CommunitiesController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('communities', 'CommunitiesController');
Route::get('/communities/buscar', [App\Http\Controllers\CommunitiesController::class, 'buscar'])->name('communities.buscar');
Route::resource('provinces', 'ProvincesController');
Route::get('communities/{id}/provinces', [App\Http\Controllers\CommunitiesController::class, 'showProvinces'])->name('communities.provinces');
Route::resource('towns', 'TownsController');
Route::get('provinces/{id}/towns', [App\Http\Controllers\ProvincesController::class, 'showTowns'])->name('provinces.towns');
Route::resource('events', 'EventsController');
Route::get('towns/{id}/events', [App\Http\Controllers\TownsController::class, 'showEvents'])->name('towns.events');
Route::get('/events/{id}', [App\Http\Controllers\EventsController::class, 'show'])->name('events.show');
Route::post('/events/{id}/reviews', [App\Http\Controllers\ReviewsController::class, 'store'])->name('reviews.store');

require __DIR__.'/auth.php';

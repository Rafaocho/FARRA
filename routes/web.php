<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvincesController;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunitiesController;

Route::get('/', [App\Http\Controllers\CommunitiesController::class, 'index'])->name('index')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'es'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');

Route::resource('communities', 'CommunitiesController')->except(['show']);
Route::get('/communitySearch', [CommunitiesController::class, 'search'])->name('communities.search');
Route::resource('provinces', 'ProvincesController');
Route::get('communities/{id}/provinces', [App\Http\Controllers\CommunitiesController::class, 'showProvinces'])->name('communities.provinces');
Route::get('/provinceSearch', [ProvincesController::class, 'search'])->name('provinces.search');
Route::resource('towns', 'TownsController');
Route::get('provinces/{id}/towns', [App\Http\Controllers\ProvincesController::class, 'showTowns'])->name('provinces.towns');
Route::resource('events', 'EventsController');
Route::get('towns/{id}/events', [App\Http\Controllers\TownsController::class, 'showEvents'])->name('towns.events');
Route::get('/events/{id}', [App\Http\Controllers\EventsController::class, 'show'])->name('events.show');
Route::post('/events/{event}/reviews', [App\Http\Controllers\ReviewsController::class, 'store'])->name('reviews.store');
/* Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard'); */
Route::post('/events/{event}/join', [EventsController::class, 'join'])->name('event.join');
Route::post('/events/{event}/leave', [EventsController::class, 'leave'])->name('event.leave');
Route::post('/users/{id}/follow', [ProfileController::class, 'follow'])->name('users.follow');
Route::post('/users/{id}/unfollow', [ProfileController::class, 'unfollow'])->name('users.unfollow');
Route::post('/towns/{town}/favorite', [\App\Http\Controllers\TownsController::class, 'toggleFavorite'])->name('towns.toggleFavorite');
Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');


Route::middleware(['auth', 'role:creator,user'])->group(function () {
Route::post('/eventos/{id}/join', [App\Http\Controllers\EventsController::class, 'join'])->name('event.join');
});
require __DIR__.'/auth.php';

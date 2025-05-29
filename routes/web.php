<?php
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvincesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\CommunitiesController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [CommunitiesController::class, 'index'])->name('index')->middleware('auth');

        Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });

        Route::resource('communities', CommunitiesController::class)->except(['show']);
        Route::get('/communitySearch', [CommunitiesController::class, 'search'])->name('communities.search');
        Route::resource('provinces', ProvincesController::class);
        Route::get('communities/{id}/provinces', [CommunitiesController::class, 'showProvinces'])->name('communities.provinces');
        Route::get('/provinceSearch', [ProvincesController::class, 'search'])->name('provinces.search');
        Route::resource('towns', App\Http\Controllers\TownsController::class);
        Route::get('provinces/{id}/towns', [ProvincesController::class, 'showTowns'])->name('provinces.towns');
        Route::resource('events', EventsController::class);
        Route::get('towns/{id}/events', [App\Http\Controllers\TownsController::class, 'showEvents'])->name('towns.events');
        Route::get('/events/{id}', [EventsController::class, 'show'])->name('events.show');
        Route::post('/events/{event}/reviews', [App\Http\Controllers\ReviewsController::class, 'store'])->name('reviews.store');
        Route::post('/events/{event}/join', [EventsController::class, 'join'])->name('event.join');
        Route::post('/events/{event}/leave', [EventsController::class, 'leave'])->name('event.leave');
        Route::post('/users/{id}/follow', [ProfileController::class, 'follow'])->name('users.follow');
        Route::post('/users/{id}/unfollow', [ProfileController::class, 'unfollow'])->name('users.unfollow');
        Route::post('/towns/{town}/favorite', [\App\Http\Controllers\TownsController::class, 'toggleFavorite'])->name('towns.toggleFavorite');
        Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('/event/{id}/pay', [EventsController::class, 'showPayment'])->name('events.pay');
        Route::post('/event/{id}/pay', [EventsController::class, 'processPayment'])->name('event.processPayment');

        Route::middleware(['auth', 'role:creator,user'])->group(function () {
            Route::post('/eventos/{id}/join', [EventsController::class, 'join'])->name('event.join');
        });
    }
);

require __DIR__.'/auth.php';

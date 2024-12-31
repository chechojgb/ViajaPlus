<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvidersController;
use App\Models\providers;
use Illuminate\Support\Facades\Route;
use NunoMaduro\Collision\Provider;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/providers', function () {
    return view('providers.dashboard');
})->middleware(['auth', 'verified'])->name('providers');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/locale/{locale}', function ($locale) {
    $available_locales = config('app.available_locales');
    if (isset($locale) && in_array($locale, $available_locales)) {
        app()->setLocale($locale);
        session()->put('locale', $locale);

    }
    return back();
})->name('lang');


//PROVIDERS
Route::middleware('auth')->group(function () {
    Route::get('providers/create', [ProvidersController::class, 'create'])->name('providers.create');
    Route::post('providers/store', [ProvidersController::class, 'store'])->name('providers.store');
    Route::get('providers/index', [ProvidersController::class, 'index'])->name('providers.index');
    Route::delete('providers/{id}', [ProvidersController::class, 'destroy'])->name('providers.delete');
    Route::get('providers/{provider}/edit', [ProvidersController::class, 'edit'])->name('providers.edit');
    
    
});
Route::put('/providers/{provider}/update', [ProvidersController::class, 'update'])->name('providers.update');


use App\Livewire\UserSearch;
 
Route::get('/userprob', UserSearch::class);
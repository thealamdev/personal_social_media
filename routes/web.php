<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProfileController;
use Illuminate\Session\Middleware\AuthenticateSession;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('logoutAll', function (Request $request) {
        Auth::logoutOtherDevices('12345678');
    });
});

Route::get('/', App\Livewire\HomeComponent::class)->middleware(['verified'])->name('welcome');
Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
});

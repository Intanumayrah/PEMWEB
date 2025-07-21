<?php

use App\Livewire\HomePage;
use App\Livewire\FilmIndex; // ✅ dipindahkan ke sini
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/

// ✅ Route Halaman Utama (Reservasi Bioskop)
Route::get('/', HomePage::class)->name('home');

// ✅ Halaman Login Admin
Route::get('/login', function () {
    return view('auth.login'); // Pastikan file auth/login.blade.php ada
})->name('login');

// ✅ Halaman Kelola Film
Route::get('/admin/film', FilmIndex::class)->name('film.index');

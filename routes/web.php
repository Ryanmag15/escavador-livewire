<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Livewire\Client;
use App\Livewire\Process;
use App\Livewire\Settings\Profile;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')->name('dashboard')->middleware(['auth', 'verified']);

Route::get('/client', Client\Index::class)->name('client.index');
Route::get('/client/create', Client\Create::class)->name('client.create');
Route::get('/client/{client}/edit', Client\Edit::class)->name('client.edit');
Route::get('/client/{client}', Client\Show::class)->name('client.show');

// Route::get('/processes', ProcessIndex::class)->name('process.index');
// Route::get('/processes/create', ProcessCreate::class)->name('process.create');
// Route::get('/processes/{id}/edit', ProcessEdit::class)->name('process.edit');
// Route::get('/processes/{id}', ProcessShow::class)->name('process.show');

Route::get('/processes', Process\Index::class)->name('process.index');
Route::get('/processes/create', Process\Create::class)->name('process.create');
Route::get('/processes/{process}/edit', Process\Edit::class)->name('process.edit');
Route::get('/processes/{process}', Process\Show::class)->name('process.show');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    // Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';

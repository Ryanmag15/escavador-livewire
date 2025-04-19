<?php

use App\Livewire\Settings;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Livewire\Client;
use App\Livewire\Process;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')->name('dashboard')->middleware(['auth', 'verified']);

Route::get('/client', Client\Index::class)->name('client.index')->middleware(['auth', 'verified']);
Route::get('/client/create', Client\Create::class)->name('client.create')->middleware(['auth', 'verified']);
Route::get('/client/{client}/edit', Client\Edit::class)->name('client.edit')->middleware(['auth', 'verified']);
Route::get('/client/{client}', Client\Show::class)->name('client.show')->middleware(['auth', 'verified']);

Route::get('/processes', Process\Index::class)->name('process.index')->middleware(['auth', 'verified']);
Route::get('/processes/create', Process\Create::class)->name('process.create')->middleware(['auth', 'verified']);
Route::get('/processes/{process}/edit', Process\Edit::class)->name('process.edit')->middleware(['auth', 'verified']);
Route::get('/processes/{process}', Process\Show::class)->name('process.show')->middleware(['auth', 'verified']);

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Settings\Profile::class)->name('settings.profile');
    Route::get('settings/password', Settings\Password::class)->name('settings.password');
    Route::get('settings/appearance', Settings\Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';

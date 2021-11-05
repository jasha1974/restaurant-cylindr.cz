<?php

use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeComponent::class)->name('home');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/dashboard', DashboardComponent::class)->middleware(['auth'])->name('dashboard');

/*Route::get('/dashboard', function () {
    return view('Dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';

<?php

use App\Livewire\Dashboard;
use App\Livewire\Event;
use App\Livewire\Login;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Login::class)->name('login');
Route::post('/logout', function () { 
    Auth::logout(); 
    return redirect('/login'); 
})->name('logout');

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/events', Event::class)->name('events');
});
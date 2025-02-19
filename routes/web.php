<?php

use App\Livewire\Dashboard;
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

Route::group(['middleware' => ['auth:web', 'prevent-back-history']], function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/logout', [Dashboard::class, 'logout'])->name('logout');
});
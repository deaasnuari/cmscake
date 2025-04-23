<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\UserController; 

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'submit'])->name('login.submit');
Route::get('/dashboard', [UserController::class, 'index'])-> name('dashboard');

Route::get('/test', function () {
    return view('test');
});

Route::get('/catalog', function () {
    return view('catalog');
});

?>

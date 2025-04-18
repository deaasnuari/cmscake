<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 





// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'submit'])->name('login.submit');

Route::get('/catalog', function () {
    return view('catalog');
});

?>
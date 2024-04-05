<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;

Route::get('/bank', function () {return view('auth.register');
});
Route::post('/login',[AuthenticateController::class, 'register']);
Route::get('/login/page',[AuthenticateController::class, 'login'])->name('login');


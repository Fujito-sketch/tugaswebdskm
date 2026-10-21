<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::resource('/register', RegisterController::class)->names([
    'index' => 'register',
    'store' => 'register.store'
]);
Route::resource('/login', LoginController::class)->names([
    'index' => 'login',
    'store' => 'login.store'
]);

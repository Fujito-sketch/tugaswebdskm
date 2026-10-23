<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/son', function () {
    return view('welcome');
});

Route::get('/pissoffmate', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function (){    
    Route::get('/dashboard', [LoginController::class, 'showboard']);
});

Route::resource('/register', RegisterController::class)->names([
    'index' => 'register',
    'store' => 'register.store'
]);

Route::get('/loginpage', [LoginController::class, 'index'])->name('login');

Route::resource('/login', LoginController::class)->names([
    'store' => 'login.store'
]);
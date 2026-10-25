<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\UserBios;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/son', function () {
    return view('welcome');
});

Route::get('/pissoffmate', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function (){    
    Route::get('/dashboard', [LoginController::class, 'showboard'])->name('dasbrot');
    Route::get('/crot', function () {
        $data = UserBios::all()->toArray();
        return view('usercrud', ['userdatas' => $data]);
    })->name('berisikgoblok');
});

Route::resource('/register', RegisterController::class)->names([
    'index' => 'register',
    'store' => 'register.store',
    'show' => 'register.show'
]);

Route::get('/loginpage', [LoginController::class, 'index'])->name('login');

Route::resource('/login', LoginController::class)->names([
    'store' => 'login.store'
]);
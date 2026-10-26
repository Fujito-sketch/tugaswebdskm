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
    Route::get('/edit/{id}', [RegisterController::class, 'show'])->name('eeedit');
    Route::patch('/update/{id}', [RegisterController::class, 'update'])->name('gantitolol');
    Route::delete('/delete/{id}', [RegisterController::class, 'delete']);
    Route::get('/crot', function () {
        $data = UserBios::all()->toArray();
        if(UserBios::doesntExist()){
            $data = "Empty";
        }
        return view('usercrud', ['userdatas' => $data]);
    })->name('editpage');
});

Route::resource('/register', RegisterController::class)->names([
    'index' => 'register',
    'store' => 'register.store',
]);

Route::get('/loginpage', [LoginController::class, 'index'])->name('login');

Route::resource('/login', LoginController::class)->names([
    'store' => 'login.store'
]);
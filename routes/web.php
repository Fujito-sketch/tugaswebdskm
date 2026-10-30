<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\UserBios;
use App\Models\Gallery;
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
    Route::delete('/delete/{id}', [RegisterController::class, 'destroy'])->name('ripbozo');
    Route::delete('/deleteimg/{id}', [RegisterController::class, 'deleteimg'])->name('dielol');
    Route::get('/editimg/{mediadata}', [RegisterController::class, 'editimg'])->name('etidgabmar');
    Route::post('/updateimg/{id}', [RegisterController::class, 'updateimg'])->name('padtgmbar');
    Route::post('/submitimg', [RegisterController::class, 'submitimg'])->name('sumbit');
    Route::get('/crot', function () {
        $data = UserBios::all()->toArray();
        if(UserBios::doesntExist()){
            $data = "Empty";
        }
        return view('usercrud', ['userdatas' => $data]);
    })->name('editpage');
    Route::get('/son', function () {
        $data = Gallery::all()->toArray();
        if(Gallery::doesntExist()){
            $data = "Empty";
        }
        return view('imgcrud', ['mediadatas' => $data]);
    })->name('diditpage');
    Route::get('brot', function () {
        $data = UserBios::all()->toArray();
        if(UserBios::doesntExist()){
            $data = "Empty";
        }
        return view('imginput', ['userdatas' => $data]);  
    })->name('imginput');
});

Route::resource('/register', RegisterController::class)->names([
    'index' => 'register',
    'store' => 'register.store',
]);

Route::get('/loginpage', [LoginController::class, 'index'])->name('login');

Route::resource('/login', LoginController::class)->names([
    'store' => 'login.store'
]);
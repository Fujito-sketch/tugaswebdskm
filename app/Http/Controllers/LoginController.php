<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserBios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('loginpage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $logname = $request->input('username');
        $logpass = $request->input('pass');

        $datacheck = UserBios::where([
            ['username', '=', $logname,],
        ])->first();

        if($datacheck && Hash::check($logpass, $datacheck->password)){
            Auth::login($datacheck);
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function showboard(){
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

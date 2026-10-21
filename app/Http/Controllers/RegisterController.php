<?php

namespace App\Http\Controllers;
use App\Models\UserBios;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('registerpage');
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
        $userName = $request->input('username');
        $pass = $request->input('pass');
        $email = $request->input('email');
        $major = $request->input('major');
        $age = $request->input('age');

        $newProfile = UserBios::create([
            'username' => $userName,
            'password' => $pass,
            'unique_fact' => 'jelek',
            'email' => $email,
            'about_me' => 'aku goblok',
            'hobby' => 'ngumpulin debu',
            'major' => $major,
            'role' => 'guest',
            'address' => 'rancaekek',
            'age' => $age,
        ]);

        return redirect('/login');
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
}

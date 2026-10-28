<?php

namespace App\Http\Controllers;
use App\Models\UserBios;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
        $address = $request->input('address');
        $hobby = $request->input('hobby');
        $about = $request->input('about');
        $fact = $request->input('fact');

        $newProfile = UserBios::create([
            'username' => $userName,
            'password' => Hash::make($pass),
            'unique_fact' => $fact,
            'email' => $email,
            'about_me' => $about,
            'hobby' => $hobby,
            'major' => $major,
            'role' => 'guest',
            'address' => $address,
            'age' => $age,
        ]);

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $selected = UserBios::where([
            ['id', '=', $id]
        ])->first();

        return view('editdata', ['selected' => $selected]);
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
        $userName = $request->input('username');
        $pass = $request->input('pass');
        $email = $request->input('email');
        $major = $request->input('major');
        $age = $request->input('age');
        $address = $request->input('address');
        $hobby = $request->input('hobby');
        $about = $request->input('about');
        $fact = $request->input('fact');
        
        if(!$request->filled('pass')){
            $newdata = UserBios::updateOrCreate(
            ['id' => $id],
            [
                'username' => $userName,
                'email' => $email,
                'major' => $major,
                'age' => $age,
                'address' => $address,
                'hobby' => $hobby,
                'about_me' => $about,
                'unique_fact' => $fact,
            ]
        );
        }else{
            $newdata = UserBios::updateOrCreate(
            ['id' => $id],
            [
                'username' => $userName,
                'password' => Hash::make($pass),
                'email' => $email,
                'major' => $major,
                'age' => $age,
                'address' => $address,
                'hobby' => $hobby,
                'about_me' => $about,
                'unique_fact' => $fact,
            ]
        );
        }

        return redirect()->route('editpage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = UserBios::findOrFail($id);
        $record->delete();

        return redirect()->route('editpage');
    }

    public function submitimg(Request $request)
    {
        $imgname = $request->file('gabmar')->getClientOriginalName();
        $imgtype = $request->file('gabmar')->getMimeType();
        $imgsize = $request->file('gabmar')->getSize();
        $imgtitle = $request->input('title');
        
        if($request->hasFile('gabmar')) {
            $path = $request->file('gabmar')->store('uploads', 'public');

            Gallery::create([
                'title' => $imgtitle,
                'file_path' => $path,
                'filename' => $imgname,
                'user_id' => auth()->id(),
                'mime_type' => $imgtype,
                'file_size' => $imgsize
            ]);

            return redirect()->route('dasbrot');
        }

        dd('img store faild xdd');
    }

    public function editimg(string $id){
        $selected = Gallery::where([
            ['id', '=', $id]
        ])->first();

        return view('editimg', ['mediadata' => $selected]);
    }

    public function updateimg(Request $request, string $id){

        $imgname = $request->file('gabmar')->getClientOriginalName();
        $imgtype = $request->file('gabmar')->getMimeType();
        $imgsize = $request->file('gabmar')->getSize();
        $imgtitle = $request->input('title');

        if($request->hasFile('gabmar')){
            $filepath = $request->file('gabmar')->store('uploads', 'public');

            Gallery::updateOrCreate(
                ['id' => $id],
                [
                    'title' => $imgtitle,
                    'file_path' => $filepath,
                    'filename' => $imgname,
                    'file_size' => $imgsize,
                    'mime_type' => $imgtype
                ]
            );

            return redirect()->route('diditpage');
        }
        
        dd('img upadt faild xdd');
    }

    public function deleteimg(string $id){
        $todelete = Gallery::findOrFail($id);
        $todelete->delete();
        
        return redirect()->route('diditpage');
    }
}

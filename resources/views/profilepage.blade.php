<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get To Know</title>
    <style>
        img {
            height: 8vh;
            width: 8vh;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body class="paleboy">
    <x-user-nav/>
    <h1 class="sidedashR imsothick bigboy">Halo! Saya {{$profiledata['username']}}</h1>
    <div class="sidedashR tongue rounded med">
        <h1 class="sidestepR imsothick">Umur : {{$profiledata['age']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="sidedashR tongue rounded med">
        <h1 class="sidestepR imsothick">Major : {{$profiledata['major']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="sidedashR tongue rounded med">
        <h1 class="sidestepR imsothick">Role : {{$profiledata['role']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="sidedashR tongue rounded med">
        <h1 class="sidestepR imsothick">Fakta Unik : {{$profiledata['unique_fact']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="sidedashR tongue rounded med">
        <h1 class="sidestepR imsothick">Hobby : {{$profiledata['hobby']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="sidedashR tongue rounded med">
        <h1 class="sidestepR imsothick">Alamat : {{$profiledata['address']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="center">
        <div class="tongue rounded med">
            <div class="sidestepR">
                <h1 class="sidestepR downS imsothick">Tentang Saya</h1>
                <h1 class="sidestepR downS imsothick">{{$profiledata['about_me']}}</h1>
            </div>
        </div>
    </div>
    <div class="hardfall"></div>
    <div class="center">
        <div class="tongue rounded med">
            <div class="sidestepR">
                <h1 class="sidestepR downS imsothick">My Gallery</h1>
                @foreach($imgs as $img)
                    <img class="sidestepR downS imsothick" src="{{ asset('storage/' . $img['file_path']) }}" alt="">
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
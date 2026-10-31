<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get To Know</title>
    @vite('resources/css/app.css')
</head>
<body class="cheek">
    <x-user-nav/>
    <div class="hardfall"></div>
    <div class="row sidedashR">
        @foreach($imgs as $img)
            @if($img['title'] == $profiledata['username'])
                <img src="{{asset('storage/' . $img['file_path'])}}" class="rounded starimg">
            @endif
        @endforeach
        <h1 class="sidedashR imsothick bigboy">Halo! Saya {{$profiledata['username']}}</h1>
    </div>
    <div class="hardfall"></div>
    <div class="sidedashR thumb rounded med">
        <h1 class="sidestepR imsothick">Umur : {{$profiledata['age']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="sidedashR thumb rounded med">
        <h1 class="sidestepR imsothick">Major : {{$profiledata['major']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="sidedashR thumb rounded med">
        <h1 class="sidestepR imsothick">Role : {{$profiledata['role']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="sidedashR thumb rounded med">
        <h1 class="sidestepR imsothick">Fakta Unik : {{$profiledata['unique_fact']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="sidedashR thumb rounded med">
        <h1 class="sidestepR imsothick">Hobby : {{$profiledata['hobby']}}</h1>
    </div>
    <div class="downS"></div>
    <div class="sidedashR thumb rounded med">
        <h1 class="sidestepR imsothick">Alamat : {{$profiledata['address']}}</h1>
    </div>
    <div class="hardfall"></div>
    <div class="sidedashR thumb rounded med ">
        <h1 class="sidepunchR sidepunchL rounded downS bigboy imsothick peach">Tentang Saya</h1>
        <h1 class="sidestepR downS imsothick">{{$profiledata['about_me']}}</h1>
    </div>
    <div class="hardfall"></div>
    <div class="sidedashR thumb rounded med lowkick">
        <h1 class="sidepunchR sidepunchL rounded downS bigboy imsothick peach">Gallery Saya</h1>
        <div class="image-grid">
            @foreach($imgs as $img)
                @if($img['user_id'] == $profiledata['id'])
                    <img class="sidestepR downS imgitems rounded" src="{{ asset('storage/' . $img['file_path']) }}" alt="">
                @endif
            @endforeach
        </div>
        <div class="downS"></div>
    </div>
    <div class="hardfall"></div>
</body>
</html>
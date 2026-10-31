<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/css/app.css')
    <style>
        img {
            max-height: 20vh;
        }
    </style>
</head>
<body class="cheek">
    <x-user-nav/>
    <h1 class="bigboy sidedashR imsothick evilpeacha">Kelompok 5</h1>
    <div class="hardfall"></div>
    <h1 class="sidedashR imsothick evilpeacha pbig">All Members</h1>
    <div class="nav gappy thumb">
        @foreach($userdata as $data)
        <div class="WIDE">
            <div class="hardfall"></div>
            <div class="sidedashR sidedashL cheek rounded">
                <div class="center baby">
                    @foreach($images as $image)
                        @if($image['title'] == $data['username'])
                    <div class="downS"></div>
                    <img class="rounded" src="{{asset('storage/' . $image['file_path'])}}">
                    @endif
                    @endforeach
                    <div class="imsothick cntr">
                        {{$data['username']}}
                    </div>
                    <form action="{{ route('profile') }}">
                        <button class="peach fat rounded" type="submit">Get To Know</button>
                        <div class="downS"></div>
                        <input type="hidden" name="id" value="{{ $data['id'] }}">
                    </form>
                </div>
                <div class="hardfall"></div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="center">
        <div class=" thumb rounded med lowkick">
            <h1 class="sidepunchR sidepunchL rounded downS bigboy imsothick peach">Gallery Kelompok 5</h1>
            <div class="image-grid">
                @foreach($images as $img)
                <img class="sidestepR downS imgitems rounded" src="{{ asset('storage/' . $img['file_path']) }}" alt="">
                @endforeach
            </div>
            <div class="downS"></div>
        </div>
    </div>
</body>
</html>
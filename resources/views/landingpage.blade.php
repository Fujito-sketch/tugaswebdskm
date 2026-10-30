<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/css/app.css')
    <style>
        img {
            max-height: 9vh;
        }
    </style>
</head>
<body class="paleboy">
    <x-user-nav/>
    <h1 class="bigboy sidedashR imsothick evilkinda">Kelompok 5</h1>
    <div class="hardfall"></div>
    <h1 class="sidedashR imsothick evilkinda">All Members</h1>
    <div class="nav">
        @foreach($userdata as $data)
        <div class="tongue fat rounded">
            @foreach($images as $image)
                @if($image['title'] == $data['username'])
                    <img class="rounded" src="{{asset('storage/' . $image['file_path'])}}">
                @endif
            @endforeach
           <div class="imsothick">
            {{$data['username']}}
           </div>
           <form action="{{ route('profile') }}">
                <button class="kind fat rounded" type="submit">Get To Know</button>
                <input type="hidden" name="id" value="{{ $data['id'] }}">
           </form>
        </div>
        @endforeach
    </div>
</body>
</html>
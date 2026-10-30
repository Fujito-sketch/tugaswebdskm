<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/css/app.css')
</head>
<body class="oldwoman">
    <x-package-dashbar/>
    <br>
    <div class="evil imsotall">
        <div class=" sidestepR sidestepL">
            <h1 class="imsothick">Welcome {{$loggeduserdata['username']}}</h1>
            <br>
            <form action="{{ route ('logout') }}">
                <button type="submit" class="fat pink rounded evilkinda">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
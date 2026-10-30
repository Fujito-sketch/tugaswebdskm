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
    <h1 class="imsothick">This is a Dashboard</h1>
    <br>
    <h1 class="imsothick">This is a Logout Button</h1>
    <br>
    <form action="{{ route ('logout') }}">
        <button type="submit" class="fat pink rounded">Logout</button>
    </form>
</body>
</html>
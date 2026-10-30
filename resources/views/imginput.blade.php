<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Image</title>
    @vite('resources/css/app.css')
</head>
<body class="oldwoman">
    <x-package-dashbar/>
    <br>
    <form action="{{ route('sumbit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="evil imsotall">
            <div class="sidestepR sidestepL">
                <h1 class="imsothick">Input Gambar</h1><br>
                <label>Judul Gambar</label><br>
                <input class="pink rounded fat" type="text" name="title"><br><br>
                <input type="file" accept="image/*" name="gabmar" class="pink fat rounded evilkinda" required><br><br>
                <button type="submit" class="pink rounded fat evilkinda">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>
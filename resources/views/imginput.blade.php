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
    <div class="center">
        <form action="{{ route('sumbit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="evil rounded imsotall superfat">
                <div class="sidestepR sidestepL">
                    <h1 class="imsothick">Input Gambar</h1><br>
                    <div class="downS"></div>
                    <label class="plink">Judul Gambar</label><br>
                    <input class="pink rounded biginput" type="text" name="title"><br><br>
                    <label class="plink">File Gambar</label><br>
                    <input type="file" accept="image/*" name="gabmar" class="pink fat rounded evilkinda" required><br><br>
                    <button type="submit" class="pink rounded fat evilkinda">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
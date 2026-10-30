<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Image</title>
    @vite('resources/css/app.css')
    <style>
        img {
            max-width: 30vw;
        }
    </style>
</head>
<body class="oldwoman">
    <x-package-dashbar/>
    <form action="{{ route('padtgmbar', ['id' => $mediadata['id']]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <input type="text" name="title" value="{{$mediadata['title']}}">
        <input type="file" accept="image/*" name="gabmar" required>
        <h3>Selected Image</h3><br>
        <img src="{{asset('storage/' . $mediadata['file_path'])}}"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
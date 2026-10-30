<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        img {
            max-width: 7vw;
        }
    </style>
</head>
<body  class="oldwoman">
    <x-package-dashbar/>
    <br>
    <div class="kindaevil imsotall">
        <h1 class="evil imsothick sidestepR">Tabel Gambar</h1>
        <br>
        <table table-layout="fixed" class="kindaevil sidestepR sidestepR">
            <thead>
                <tr>
                <td class="pink rounded thin id">ID</td>
                <td class="pink rounded thin">User ID</td>
                <td class="pink rounded thin">Title</td>
                <td class="pink rounded thin">Path IMG</td>
                <td class="pink rounded thin">File Name</td>
                <td class="pink rounded thin">IMG</td>
                <td class="pink rounded thin">Action</td>
            </tr>
        </thead>
        <tbody>
            @if($mediadatas == "Empty")
                <h1>No Media Is Available</h1>
            @else
                @foreach ($mediadatas as $data)
                <tr class="kind">
                    <td class="rounded">{{ $data['id'] }}</td>
                    <td class="rounded">{{ $data['user_id'] }}</td>
                    <td class="rounded">{{ $data['title'] }}</td>
                    <td class="rounded">{{ $data['file_path'] }}</td>
                    <td class="rounded">{{ $data['filename'] }}</td>
                    <td class="rounded"><img src="{{asset('storage/' . $data['file_path'])}}"></td>
                    <td>
                        <form action="{{ route('etidgabmar', ['mediadata' => $data['id']]) }}">
                            <button type="submit" class="piss rounded fat WIDE">Edit</button>
                        </form>
                        <form action="{{ route('dielol', ['id' => $data['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="blood fat rounded WIDE">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
</body>
</html>
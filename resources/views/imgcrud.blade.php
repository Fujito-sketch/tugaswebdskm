<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            max-width: 7vw;
        }
    </style>
</head>
<body>
    <x-package-dashbar/>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>User ID</td>
                <td>Title</td>
                <td>Path IMG</td>
                <td>File Name</td>
                <td>IMG</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @if($mediadatas == "Empty")
                <h1>No Media Is Available</h1>
            @else
                @foreach ($mediadatas as $data)
                <tr>
                    <td>{{ $data['id'] }}</td>
                    <td>{{ $data['user_id'] }}</td>
                    <td>{{ $data['title'] }}</td>
                    <td>{{ $data['file_path'] }}</td>
                    <td>{{ $data['filename'] }}</td>
                    <td><img src="{{asset('storage/' . $data['file_path'])}}"></td>
                    <td>
                        <form action="{{ route('etidgabmar', ['mediadata' => $data['id']]) }}">
                            <button type="submit">Edit</button>
                        </form>
                        <form action="{{ route('dielol', ['id' => $data['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>
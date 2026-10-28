<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
    <style>
        table {
            width: 100%;
            table-layout: fixed;
        }

        td {
            overflow: hidden;
        }
    </style>
</head>
<body>
    <x-package-dashbar/>
    <table table-layout="fixed">
        <thead>
            <tr>
                <td>No. </td>
                <td>User ID</td>
                <td>Title</td>
                <td>Image</td>
                <td>Fakta Unik</td>
                <td>Hobby</td>
                <td>Prodi</td>
                <td>Role</td>
                <td>Alamat</td>
                <td>Umur</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @if ($userdatas == "Empty")
                <h1>No record is available.</h1>
            @else
                @foreach ($userdatas as $data)
                <tr>
                    <td>{{$data['id']}}</td>
                    <td>{{$data['username']}}</td>
                    <td>{{$data['email']}}</td>
                    <td>{{$data['about_me']}}</td>
                    <td>{{$data['unique_fact']}}</td>
                    <td>{{$data['hobby']}}</td>
                    <td>{{$data['major']}}</td>
                    <td>{{$data['role']}}</td>
                    <td>{{$data['address']}}</td>
                    <td>{{$data['age']}}</td>
                    <td>
                        <form action="{{ route('register.show', ['register' => $data['id']]) }}" method="GET">
                            <button type="submit"> Edit </button>
                        </form>
                        <form action="{{ route('register.destroy', ['register' => $data['id']]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit"> Delete </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>
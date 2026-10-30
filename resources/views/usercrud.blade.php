<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
    @vite('resources/css/app.css')
    <style>
        table {
            width: 98%;
            table-layout: fixed;
        }

        td {
            overflow: hidden;
        }
    </style>
</head>
<body class="oldwoman">
    <x-package-dashbar/>
    <br>
    <div class="kindaevil imsotall">
        <h1 class="evil imsothick sidestepR">Tabel Pengguna</h1>
        <br>
        <table table-layout="fixed" class="kindaevil sidestepR sidestepR">
            <thead>
            <tr>
                <td class="pink rounded thin id">No. </td>
                <td class="pink rounded thin">User ID</td>
                <td class="pink rounded thin">Title</td>
                <td class="pink rounded thin">Image</td>
                <td class="pink rounded thin">Fakta Unik</td>
                <td class="pink rounded thin">Hobby</td>
                <td class="pink rounded thin">Prodi</td>
                <td class="pink rounded thin">Role</td>
                <td class="pink rounded thin">Alamat</td>
                <td class="pink rounded thin">Umur</td>
                <td class="pink rounded thin">Action</td>
            </tr>
        </thead>
        <tbody class="evil">
            @if ($userdatas == "Empty")
            <h1>No record is available.</h1>
            @else
            @foreach ($userdatas as $data)
            <tr class="kind">
                <td class="id rounded">{{$data['id']}}</td>
                    <td class="rounded">{{$data['username']}}</td>
                    <td class="rounded">{{$data['email']}}</td>
                    <td class="rounded">{{$data['about_me']}}</td>
                    <td class="rounded">{{$data['unique_fact']}}</td>
                    <td class="rounded">{{$data['hobby']}}</td>
                    <td class="rounded">{{$data['major']}}</td>
                    <td class="rounded">{{$data['role']}}</td>
                    <td class="rounded">{{$data['address']}}</td>
                    <td class="rounded">{{$data['age']}}</td>
                    <td class="rounded">
                        <form action="{{ route('register.show', ['register' => $data['id']]) }}" method="GET">
                            <button type="submit" class="piss rounded fat WIDE"> Edit </button>
                        </form>
                        <form action="{{ route('ripbozo', ['id' => $data['id']]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="blood fat rounded WIDE"> Delete </button>
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
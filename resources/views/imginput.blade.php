<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Image</title>
</head>
<body>
    <form action="{{ route('sumbit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Judul Gambar</label>
        <input type="text" name="title">
        <input type="file" accept="image/*" name="gabmar" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
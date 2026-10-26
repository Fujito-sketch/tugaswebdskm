<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ok</title>
</head>
<body>
    <form action="{{ route('register.update', ['register' => $selected['id']]) }}" method="POST">
        @csrf
        @method('PATCH')
        <label>Username : </label>
        <input type="text" name="username" value="{{ $selected['username'] }}"><br>
        <label>Age      : </label>
        <input type="number" name="age" value="{{ $selected['age'] }}"><br>
        <label>Password : </label>
        <input type="password" name="pass"><br>
        <label>E-Mail   : </label>
        <input type="text" name="email" value="{{ $selected['email'] }}"><br>
        <label>Address   : </label>
        <input type="text" name="address" value="{{ $selected['address'] }}"><br>
        <label>Hobby   : </label>
        <input type="text" name="hobby" value="{{ $selected['hobby'] }}"><br>
        <label>Unique Fact   : </label>
        <input type="text" name="fact" value="{{ $selected['unique_fact'] }}"><br>
        <label>About Me   : </label>
        <textarea name="about">{{ $selected['about_me'] }}</textarea><br>
        <label>Major    : </label><br>
        <select name="major">
            <option value="{{ $selected['major'] }}">{{ $selected['major'] }}</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
            <option value="Teknik Biomedis">Teknik Biomedis</option>
            <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
            <option value="Teknik Fisika">Teknik Fisika</option>
        </select><br>
        <button type="submit">Submit</button><br>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ok</title>
</head>
<body>
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <label>Username : </label>
        <input type="text" name="username"><br>
        <label>Age      : </label>
        <input type="number" name="age"><br>
        <label>Password : </label>
        <input type="password" name="pass"><br>
        <label>E-Mail   : </label>
        <input type="text" name="email"><br>
        <label>Address   : </label>
        <input type="text" name="address"><br>
        <label>Hobby   : </label>
        <input type="text" name="hobby"><br>
        <label>Unique Fact   : </label>
        <input type="text" name="fact"><br>
        <label>About Me   : </label>
        <textarea name="about"></textarea><br>
        <label>Major    : </label><br>
        <select name="major">
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
            <option value="Teknik Biomedis">Teknik Biomedis</option>
            <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
            <option value="Teknik Fisika">Teknik Fisika</option>
        </select><br>
        <button type="submit">Submit</button><br>
    </form>
    <p>Already made an account?</p>
    <p>Let's <a href="{{ route('login') }}">Log In</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XDDDDD</title>
    @vite('resources/css/app.css')
</head>
<body class="oldwoman">
    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="pass"><br>
        <button type="submit">Submit</button><br>
    </form>
    <p>Haven't made an account?</p>
    <p>Let's <a href="{{ route('register') }}">Make One</a></p>
</body>
</html>
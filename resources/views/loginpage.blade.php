<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XDDDDD</title>
    @vite('resources/css/app.css')
</head>
<body class="oldwoman">
    <div class="center">
        <div class="evil rounded">
            <div class="tallfat">
                <h1 class="imsothick">Log In</h1>
                <div class="downS">
                    <form action="{{ route('login.store') }}" method="post">
                        @csrf
                        <label class="downS plink ">Username</label><br>
                        <input class="biginput rounded pink" type="text" name="username"><br>
                        <div class="downS">
                            <label class="plink ">Password</label><br>
                            <input class="biginput rounded pink" type="password" name="pass"><br>
                        </div>
                        <button class="fat  rounded pink evilkinda downS" type="submit">Submit</button><br>
                    </form>
                </div>
                <!-- 
                <p>Haven't made an account?</p>
                <p>Let's <a class="plink" href="{{ route('register') }}">Make One</a></p>
                -->
        </div>
    </div>
</div>
</body>
</html>
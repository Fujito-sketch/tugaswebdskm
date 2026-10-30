<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ok</title>
    @vite('resources/css/app.css')
</head>
<body class="oldwoman">
    <x-package-dashbar/><br>
     <div class="center">
        <div class="evil rounded">
            <div class="superfat">
                <h1 class="imsothick">Create User</h1>
                <div class="downS">
                    <form action="{{ route('register.store') }}" method="post">
                        @csrf
                        <label class="plink">Username : </label class="plink"><br>
                        <input class="biginput pink rounded downS" type="text" name="username"><br>
                        <div class="downS"></div>
                        <label class="plink">Age      : </label class="plink"><br>
                        <input class="biginput pink rounded downS" type="number" name="age"><br>
                        <div class="downS"></div>
                        <label class="plink">Password : </label class="plink"><br>
                        <input class="biginput pink rounded downS" type="password" name="pass"><br>
                        <div class="downS"></div>
                        <label class="plink">E-Mail   : </label class="plink"><br>
                        <input class="biginput pink rounded downS" type="text" name="email"><br>
                        <div class="downS"></div>
                        <label class="plink">Address   : </label class="plink"><br>
                        <input class="biginput pink rounded downS" type="text" name="address"><br>
                        <div class="downS"></div>
                        <label class="plink">Hobby   : </label class="plink"><br>
                        <input class="biginput pink rounded downS" type="text" name="hobby"><br>
                        <div class="downS"></div>
                        <label class="plink">Unique Fact   : </label class="plink"><br>
                        <input class="biginput pink rounded downS" type="text" name="fact"><br>
                        <div class="downS"></div>
                        <label class="plink">About Me   : </label class="plink"><br>
                        <textarea name="about" class="pink biginput rounded"></textarea><br>
                        <div class="downS"></div>
                        <label class="plink">Major    : </label class="plink">
                        <select name="major" class="plink">
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                            <option value="Teknik Biomedis">Teknik Biomedis</option>
                            <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
                            <option value="Teknik Fisika">Teknik Fisika</option>
                        </select><br>
                        <label class="plink">Role    : </label class="plink">
                        <select name="role" class="plink">
                            <option value="Front End">Front End</option>
                            <option value="Back End">Back End</option>
                        </select><br>
                        <button type="submit" class="fat rounded pink evilkinda downS">Submit</button><br>
                    </form>
                    <p class="downS">Already made an account?</p>
                    <p>Let's <a class="plink" href="{{ route('login') }}">Log In</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="hardfall"></div>
</body>
</html>
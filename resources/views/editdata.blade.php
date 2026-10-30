<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ok</title>
    @vite('resources/css/app.css')
</head>
<body class="oldwoman">
    <x-package-dashbar/>
    <br>
    <div class="center">
        <div class="evil rounded">
            <div class="superfat">
                <h1 class="imsothick">Edit User</h1>
                <div class="downS">
                    <form action="{{ route('register.update', ['register' => $selected['id']]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="downS"></div>
                        <label class="plink">Username : </label><br>
                        <input class="biginput pink rounded"type="text" name="username" value="{{ $selected['username'] }}"><br>
                        <div class="downS"></div>
                        <label class="plink">Age      : </label><br>
                        <input class="biginput pink rounded"type="number" name="age" value="{{ $selected['age'] }}"><br>
                        <div class="downS"></div>
                        <label class="plink">Password : </label><br>
                        <input class="biginput pink rounded"type="password" name="pass"><br>
                        <div class="downS"></div>
                        <label class="plink">E-Mail   : </label><br>
                        <input class="biginput pink rounded"type="text" name="email" value="{{ $selected['email'] }}"><br>
                        <div class="downS"></div>
                        <label class="plink">Address   : </label><br>
                        <input class="biginput pink rounded"type="text" name="address" value="{{ $selected['address'] }}"><br>
                        <div class="downS"></div>
                        <label class="plink">Hobby   : </label><br>
                        <input class="biginput pink rounded"type="text" name="hobby" value="{{ $selected['hobby'] }}"><br>
                        <div class="downS"></div>
                        <label class="plink">Unique Fact   : </label><br>
                        <input class="biginput pink rounded"type="text" name="fact" value="{{ $selected['unique_fact'] }}"><br>
                        <div class="downS"></div>
                        <label class="plink">About Me   : </label><br>
                        <textarea name="about" class="pink biginput rounded">{{ $selected['about_me'] }}</textarea><br>
                        <label class="plink">Major    : </label>
                        <select name="major" class="plink">
                            <option value="{{ $selected['major'] }}">{{ $selected['major'] }}</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                            <option value="Teknik Biomedis">Teknik Biomedis</option>
                            <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
                            <option value="Teknik Fisika">Teknik Fisika</option>
                        </select><br>
                        <label class="plink">Role    : </label class="plink">
                        <select name="role" class="plink">
                            <option value="{{ $selected['role'] }}">{{ $selected['role'] }}</option>
                            <option value="Front End">Front End</option>
                            <option value="Back End">Back End</option>
                        </select><br>
                        <button type="submit" class="fat rounded pink evilkinda downS">Submit</button><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
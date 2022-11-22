<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="app/css/login.css">
</head>

<body>
    <div class="container">
        <form action="/register" method="POST" class="login-email">
            @csrf
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}"
                    required>
            </div>
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="passwrod" placeholder="Password" required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Punya Akun? <a href="/login">Masuk</a></p>
        </form>
    </div>
</body>

</html>
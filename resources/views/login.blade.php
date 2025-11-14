<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/dino_rent.css') }}">
</head>
<body>
    <section class="login-section">
        <div class="login-box">
            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Masuk</button>
            </form>
        </div>
    </section>
</body>
</html>
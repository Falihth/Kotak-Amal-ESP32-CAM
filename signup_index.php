<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smartamal - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.style.css" />
</head>
<body>
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <h1 class="navbar-brand">KOTAK AMAL</h1>
            <img src="background/icon.png" alt="icon" class="logo1">
            <img src="background/POLIJE.png" alt="icon" class="logo2">
        </div>
    </nav>
    <div>
        <h1 class="txt1">Welcome</h1>
        <h1 class="txt2">Sign Up</h1>

        <!-- Form Sign Up -->
        <form action="signup_process.php" method="POST">
            <p class="us">Username</p>
            <input type="text" class="user" id="username" name="username" placeholder="Masukkan User!!!" required>

            <p class="ps">Password</p>
            <input type="password" class="pw" id="password" name="password" placeholder="Masukkan password!!!" required>

            <button type="submit" class="btn1">Register</button>
        </form>

        <img src="background/kotak.png" alt="p" class="img3">
        <h1 class="des">Give charity sincerely, without expecting anything in return from anyone.</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

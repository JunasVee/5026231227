<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/bootstrap2.css">
    <title>PWEB Layouting - Soal 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container-full d-flex flex-column justify-content-center align-items-center gap-5">
        <div class="logo">
            <img src="/logocekdong.png" alt="">
        </div>
        <div>
            <form class="d-flex flex-column align-items-center justify-content-center">
                <div class="input-container mb-3">
                    <i class="fa fa-user input-icon"></i>
                    <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="input-container mb-5">
                    <i class="fa fa-lock input-icon"></i>
                    <input type="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-dark submit mb-3 rounded-pill">Login</button>

                <a href="#" class="forgot-password mb-2 text-black text-decoration-none">Forgot Password</a>

                <a href="#" class="login-teknisi text-black">Login As Teknisi</a>
            </form>
        </div>
        <div class="footer gap-2 text-center py-4 bg-secondary w-100 mt-auto">
            <p class="text-light">Don't have an account yet? <a href="#" class="text-white">Create New</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

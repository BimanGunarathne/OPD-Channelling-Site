<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Log In</title>
</head>

<body>
    <?php include '../includes/navbar.php' ?>
    <header class="showcase">
        <div class="container1">
            <div class="showcase-content">
                <div class="description">
                    <h1>Log In</h1>
                    <p class="p1">Welcome! Please fill the details</p>
                    <a class="buttons btn-google" href=""><img class="google" src="../images/icons8-google-48.png" alt="google">Signup with Google</a>
                    <p class="por"><span> or</span></p>
                    <input class="inputs" type="text email" placeholder="Username or Email" value="">
                    <input class="i1 inputs" type="password" placeholder="Password" value="">
                    <a class="fp" href="">Forgot Password?</a>
                    <a class="buttons btn-prymery" href="">Log In</a>
                    <p class="p2">Dont have an account? <a class="signup" href="../mainuis/signup.php">Sign Up</a></p>
                </div>
                <lottie-player class="lottie-player" src="https://assets9.lottiefiles.com/packages/lf20_hzgq1iov.json" background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
        </div>
    </header>
    <?php include '../includes/footer1.php' ?>
</body>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registration.css">
    <title>Registration</title>
</head>

<body>
    <?php include '../includes/navbar.php' ?>
    <header class="showcase">
        <div class="container1">
            <div class="showcase-content">
                <div class="description">
                    <h1>Patient Registration</h1>
                    <p class="p1">Please fill the details correctly</p>
                    <input class="inputs" type="text" placeholder="First Name" value="">
                    <input class="inputs" type="text" placeholder="Last Name" value="">
                    <input class="inputs" type="text" placeholder="N.I.C Number" value="">
                    <input class="inputs" type="tel" placeholder="Contact Number" value="">
                    <input class="inputs" type="email" placeholder="E-Mail" value="">
                    <input class="inputs" type="email" placeholder="Username" value="">
                    <input class="inputs" type="password" placeholder="Password" value="">
                    <input class="inputs" type="password" placeholder="Retype Password" value="">
                    <a class="buttons btn-prymery" href="">Save Details</a>
                </div>
            </div>
        </div>
    </header>
    <?php include '../includes/footer1.php' ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/nav1tyles.css">
</head>

<body>
    <div class="container">
        <nav class="nav" id="mynav">
            <h1 class="logo"><a href="../php UI/index.php"><img src="../images/logo.png" alt="">PD Chanelling</a></h1>
            <ul>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Appointments<i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a class="a1 a2" href="../php UI/add_appointments.php">Add Appointments</a>
                            <a class="a1 a2" href="../php UI/view_appointments.php">View Appointments</a>
                            <a class="a1 a2" href="../php UI/manage_appointments.php">Manage Appointments</a>
                        </div>
                    </div>
                </li>
                <li><a class="a1 a2" href="../php UI/contact_us.php">Contact Us</a></li>
                <li><a class="a1 a2" href="">Log In</a></li>
                <li><a class="a1 signup" href="">Sign Up</a></li>
                <a class="icon a1" href="javascript:void(0);" style="font-size:25px; color: #ffffff;" onclick="navFunction()">&#9776;</a>
            </ul>
        </nav>
    </div>
</body>
<script src="../js/navfunctions.js"></script>

</html>
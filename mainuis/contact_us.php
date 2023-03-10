<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact_us.css">
    <title>Contact Us</title>
</head>

<body>
    <?php include '../includes/navbar.php' ?>
    <header class="showcase">
        <div class="container1">
            <div class="showcase-content">
                <div class="description">
                    <h1>Get In Touch With Us</h1>
                    <p class="p_font">You can send a message and feedbacks to us by filling the below fields.</p>
                    <input class="inputs" type="text" placeholder="First Name" value="">
                    <input class="inputs" type="text" placeholder="Last Name" value="">
                    <input class="inputs" type="text" placeholder="NIC Number" value="">
                    <input class="inputs" type="text" placeholder="Contact" value="">
                    <textarea class="inputs" placeholder="Messege"></textarea>
                    <a class="btn-primary" href="../php UI/contact_us.php">Contact Us</a>
                </div>
                <lottie-player class="lottie-player" src="https://assets2.lottiefiles.com/packages/lf20_ycMTbuzn9e.json" background="transparent" speed="1" autoplay></lottie-player>
            </div>
        </div>
    </header>
    <div class="small-div-container">
        <div class="small_div_1">
            <div class="lottie">
                <lottie-player class="lottie-all-div" src="https://assets10.lottiefiles.com/packages/lf20_metr6yqs.json" background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
            <p class="big_font">Address</p>
            <p class="p_font">No.84/18A, Koongahawatta,<br>Kotikawatta Road, Gothatuwa</p>
        </div>
        <div class="line"></div>
        <div class="small_div_2">
            <div class="lottie">
                <lottie-player class="lottie-all-div" src="https://assets6.lottiefiles.com/packages/lf20_i8k8j9Alxm.json" background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
            <p class="big_font">Email</p>
            <p class="p_font">contact@opdechanneling.lk</p>
        </div>
        <div class="line"></div>
        <div class="small_div_3">
            <div class="lottie">
                <lottie-player class="lottie-all-div" src="https://assets2.lottiefiles.com/packages/lf20_vcxfcjv2.json" background="transparent" speed="1" loop autoplay></lottie-player>
            </div>
            <p class="big_font">Telephone</p>
            <p class="p_font">+94 112233445 - Hed Office</p>
        </div>
    </div>
    <?php include '../includes/footer1.php' ?>
</body>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</html>
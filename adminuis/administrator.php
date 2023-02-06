<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/administrator.css">
    <title>Administrator</title>
</head>

<body>
    <?php include '../includes/navbar2.php' ?>
    <div class="admin_content">
        <div class="admin_name">
            <div class="admin_username">
                <h2>Administration</h2>
            </div>
        </div>
        <div class="admin_area">
            <div class="admin_section">
                <div class="admin_details">
                    <div class="space">
                        <h3>First Name:</h3>
                        <input type="text" name="firstname" placeholder="First Name">
                    </div>
                    <div class="space">
                        <h3>Last Name:</h3>
                        <input type="text" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="space">
                        <h3>E-Mail:</h3>
                        <input type="email" name="email" placeholder="E-Mail">
                    </div>
                    <div class="space">
                        <h3>N.I.C. Number:</h3>
                        <input type="text" name="nic" placeholder="N.I.C. Number">
                    </div>
                    <div class="space">
                        <h3>Contact Number:</h3>
                        <input type="tel" name="tel" placeholder="Contact Number">
                    </div>
                    <div class="space">
                        <h3>Username:</h3>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="space">
                        <h3>Password:</h3>
                        <input type="password" name="password" placeholder="Passowrd">
                    </div>
                    <div class="space">
                        <h3>Retype Password:</h3>
                        <input type="password" name="retype-password" placeholder="Retype Passowrd">
                    </div>
                    <div class="space buttons">
                        <button class="button_class">Save</button>
                        <button class="button_class2">Change</button>
                        <button class="button_class2 red_buttion">Delete</button>
                    </div>
                </div>
            </div>
            <div class="admins">
                <div class="detail_box">
                    <div class="table-content">
                        <table>
                            <tr>
                                <td>
                                    <h1>Biman Gunarathne</h1>
                                    <h3>200016403180</h3>
                                    <h3>0771144033</h3>
                                    <h3>bimangunarathne@gmail.com</h3>
                                <td>
                            </tr>
                            <tr>
                                <td>
                                    <h1>Nadeela Gunarathne</h1>
                                    <h3>200016403160</h3>
                                    <h3>0772616991</h3>
                                    <h3>nadeelaasanika20@gmail.com</h3>
                                <td>
                            </tr>
                            <tr>
                                <td>
                                    <h1>Thiyasha Nanayakara</h1>
                                    <h3>NIC</h3>
                                    <h3>Contact</h3>
                                    <h3>Email</h3>
                                <td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../includes/footer2.php' ?>
</body>

</html>
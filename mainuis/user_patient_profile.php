<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user_patient_profile.css">
    <title>Profile</title>
</head>

<body>
    <?php include '../includes/navbar.php' ?>
    <div class="user_container">
        <div class="name">
            <div class="username">
                <h2 contenteditable="true">Biman Gunarathne</h2>
            </div>
            <div class="image">
                <img src="../images/My Image.jpg" alt="Profile Image">
            </div>
        </div>
        <div class="container_section">
            <div class="user_details">
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
                    <h3>Age:</h3>
                    <input type="number" name="age" placeholder="Age">
                </div>
                <div class="space">
                    <h3>Username:</h3>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="space">
                    <h3>Password:</h3>
                    <input type="password" name="password" placeholder="Passowrd">
                </div>
                <div class="space buttons">
                    <button class="button_class">Save</button>
                    <button class="button_class2">Change</button>
                    <button class="button_class2 red_buttion">Log Out</button>
                </div>
            </div>
            <div class="appointment">
                <div class="appointment_h1">
                    <h2>Appointments</h2>
                </div>
                <div class="detail_box">
                    <div class="table-content">
                        <table>
                            <tr>
                                <td>
                                    <h1>Name</h1>
                                    <h2 class="position">Position</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita iusto quaerat itaque unde quas reprehenderit, illo odit ullam quod quam. Ipsum sunt dolorum ipsam atque dolores quisquam fuga laudantium blanditiis.</p>
                                </td>
                                <td><button class="add-button" type="submit">View Appointment</button></td>
                            </tr>
                            <tr>
                                <td>
                                    <h1>Name</h1>
                                    <h2 class="position">Position</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita iusto quaerat itaque unde quas reprehenderit, illo odit ullam quod quam. Ipsum sunt dolorum ipsam atque dolores quisquam fuga laudantium blanditiis.</p>
                                </td>
                                <td><button class="add-button" type="submit">View Appointment</button></td>
                            </tr>
                            <tr>
                                <td>
                                    <h1>Name</h1>
                                    <h2 class="position">Position</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita iusto quaerat itaque unde quas reprehenderit, illo odit ullam quod quam. Ipsum sunt dolorum ipsam atque dolores quisquam fuga laudantium blanditiis.</p>
                                </td>
                                <td><button class="add-button" type="submit">View Appointment</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../includes/footer1.php' ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctors_view.css">
    <title>Doctor View</title>
</head>

<body>
    <?php include '../includes/navbar.php' ?>
    <div class="details_section">
        <div class="doctor_details">
            <h1>Doctor Name</h1>
            <h2>Position</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores obcaecati mollitia atque ipsam odio sit repellendus provident. Libero, iure autem, neque est esse dolor debitis officiis impedit necessitatibus illo accusantium.</p>
        </div>
        <div class="hospital_details">
            <div class="table-content">
                <table><tr>
                    <td>
                        <h3>Hospital Name</h3>
                    </td>
                    <td><a class="submit" href="add_appointments.php"><button class="add-button" type="submit">Add Appointment</button></a></td>
                </tr></table>
            </div>
        </div>
    </div>
    <?php include '../includes/footer1.php' ?>
</body>

</html>
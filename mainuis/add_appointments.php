<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//css/add_appointments.css">
    <title>Add Apointments</title>
</head>

<body>
    <?php include '../includes/navbar.php' ?>
    <header>
        <div class="section1">
            <h1 class="main">Add Appointments</h1>
            <div class="section-content">
                <div class="appintment-form">
                    <h3>Please fill the forme</h3>
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                    <input type="number" placeholder="Age">
                    <input type="text" placeholder="N.I.C Number">
                    <select name="Hospitas" id="">
                        <option value="Select Hospital">Select Hospital</option>
                        <option value="1">Lanka Hospitals</option>
                        <option value="2">Nawaloka Hospitals PLC</option>
                        <option value="4">Asiri Hospital</option>
                        <option value="3">Asiri Central Hospital - Central Hospital Limited</option>
                        <option value="4">Asiri Surgical Hospital</option>
                        <option value="4">Asiri Hospital Kandy</option>
                    </select>
                    <select name="Doctors" id="">
                        <option value="Select The Doctor">Select Doctors</option>
                        <option value="1">Name 1</option>
                        <option value="2">Name 2</option>
                        <option value="4">Name 2</option>
                        <option value="3">Name 2</option>
                        <option value="4">Name 2</option>
                        <option value="4">Name 2</option>
                    </select>
                    <input type="date">
                    <button>Add Appintment</button>
                    <button>Update Appintment</button>
                </div>
                <div class="details">
                    <div class="d-details">
                        <h1>Name</h1>
                        <h3>Position</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur nemo, expedita blanditiis exercitationem quidem odit magni sit error, quae tenetur, natus tempora sapiente iure fugit quo laborum! Fugiat, a facere.</p>
                        <button>Learn More</button>
                    </div>
                    <div class="h-details">
                        <h1>Hospital Name</h1>
                        <h3>Address</h3>
                        <button>Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="section2">
            <h1 class="main2">View Appointments</h1>
            <div class="table-content">
                <table>
                    <tr>
                        <td>Hospital</td>
                        <td>Name</td>
                        <td>Date</td>
                        <td><select name="status" id="">
                                <option value="1">Status</option>
                                <option value="1">Done</option>
                                <option value="0">Pending</option>
                            </select></td>
                        <td><Button>View & Update</Button></td>
                    </tr>
                    <tr>
                        <td>Hospital</td>
                        <td>Name</td>
                        <td>Date</td>
                        <td><select name="status" id="">
                                <option value="1">Status</option>
                                <option value="1">Done</option>
                                <option value="0">Pending</option>
                            </select></td>
                        <td><Button>View & Update</Button></td>
                    </tr>
                    <tr>
                        <td>Hospital</td>
                        <td>Name</td>
                        <td>Date</td>
                        <td><select name="status" id="">
                                <option value="1">Status</option>
                                <option value="1">Done</option>
                                <option value="0">Pending</option>
                            </select></td>
                        <td><Button>View & Update</Button></td>
                    </tr>
                </table>
            </div>
        </div>
    </header>
    <?php include '../includes/footer1.php' ?>
</body>

</html>
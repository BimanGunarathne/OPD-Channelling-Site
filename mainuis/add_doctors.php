<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/add_doctors.css">
    <title>Add Doctors</title>
</head>

<body>
    <?php include '../includes/navbar.php' ?>
    <div class="section-content">
        <h1 class="main">Add Doctors</h1>
        <div class="doctors-form">
            <h3>Please fill the forme</h3>
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="number" placeholder="Age">
            <input type="text" placeholder="N.I.C Number">
            <input type="tel" placeholder="Contact Number">
            <input type="email" placeholder="E-Mail">
            <p>If your position not in the specialty section plese add the position usig Add Specialty</p>
            <input type="text" placeholder="Add Specialty">
            <button>Add Position</button>
            <select name="Specialty" id="">
                <option value="Select Hospital">Select Specialty</option>
                <option value="1">Epidemiologist</option>
                <option value="2">Audiologist</option>
                <option value="4">General practitioner</option>
                <option value="3">Pediatrician</option>
                <option value="4">Obstetrics and gynecology physician</option>
                <option value="5">Otolaryngologist/ENT specialist</option>
                <option value="6">Oncologist</option>
                <option value="7">Dentist</option>
                <option value="8">Neonatologist</option>
                <option value="9">Orthopedist</option>
                <option value="10">Surgeon</option>
                <option value="11">Neurologist</option>
                <option value="12">Rheumatologist</option>
                <option value="13">Geriatric physician</option>
                <option value="14">Urologist</option>
                <option value="15">Gastroenterologist</option>
                <option value="16">Dermatologist</option>
                <option value="17">Endocrinologist</option>
                <option value="18">Plastic surgeon</option>
                <option value="19">Psychiatrist</option>
                <option value="20">Anesthesiologist</option>
                <option value="21">Nephrologist</option>
                <option value="22">Radiologist</option>
                <option value="23">Cardiologist</option>
            </select>
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <input type="password" placeholder="Re-Type Password">
            <button>Add Doctor</button>
        </div>
    </div>
    <?php include '../includes/footer1.php' ?>
</body>

</html>
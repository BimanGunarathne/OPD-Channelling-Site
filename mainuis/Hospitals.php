<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/hospitals.css">
    <title>Doctors</title>
</head>

<body>
    <?php include '../includes/navbar.php' ?>
    <div class="container">
        <div class="content">
            <h1>Find Hospitals</h1>
            <div class="search-container">
                <input class="search" type="search" placeholder="Search Doctors">
                <button class="search-button" type="submit"><lord-icon class="icon" src="https://cdn.lordicon.com/xfftupfv.json" trigger="hover" colors="primary:#ffffff">
                    </lord-icon></button>
            </div>
        </div>
    </div>
    <div class="table-content">
        <table>
            <tr>
                <td>
                    <h1>Name</h1>
                    <h2>address</h2>
                </td>
                <td><button class="add-button" type="submit">Location</button></td>
            </tr>
            <tr>
                <td>
                    <h1>Name</h1>
                    <h2>address</h2>
                </td>
                <td><button class="add-button" type="submit">Location</button></td>
            </tr>
            <tr>
                <td>
                    <h1>Name</h1>
                    <h2>address</h2>
                </td>
                <td><button class="add-button" type="submit">Location</button></td>
            </tr>
            <tr>
                <td>
                    <h1>Name</h1>
                    <h2>address</h2>
                </td>
                <td><button class="add-button" type="submit">Location</button></td>
            </tr>
        </table>
    </div>
    <?php include '../includes/footer1.php' ?>
</body>
<script src="https://cdn.lordicon.com/fudrjiwc.js"></script>

</html>
<html>
    <head>
        <title>SUCCESFULL</title>
    </head>
    <body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myLogin";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Firstname = $_POST["Firstname"];   
$Lastname = $_POST["Lastname"];
$Email = $_POST["Email"];
$Contact = $_POST["Contact"];
$Address = $_POST["Address"];

$sql = "INSERT INTO login_data (Firstname, Lastname, Email, Contact, Address)
        VALUES ('$Firstname', '$Lastname', '$Email', '$Contact', '$Address')";

if ($conn->query($sql) === TRUE) {
    echo "Data Inserted Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

        header('location:info.php')?>
    </body>
</html>
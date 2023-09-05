<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "medicine"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["name"]) && isset($_GET["price"])) {
    $productName = $_GET["name"];
    $productPrice = $_GET["price"];

    $sql = "INSERT INTO checkout_table (name, price) VALUES ('$productName', '$productPrice')";

    if ($conn->query($sql) === TRUE) {
        echo "Product stored successfully in the database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
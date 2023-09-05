<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "medicine";
        
$conn = new mysqli($servername, $username, $password, $database);
        
if ($conn->connect_error) {
    die("CONNECTION FAILED: " . $conn->connect_error);
}
        
$sql = 'CREATE TABLE checkout_table (
    id int(6) unsigned auto_increment primary key,
    name varchar(20) not null,
    price decimal(20, 2) not null,
    subtotal decimal(20, 2) not null
)';

if ($conn->query($sql) === TRUE) {
    echo "TABLE Checkout_table CREATED SUCCESSFULLY";
} else {
    echo "ERROR CREATING TABLE: " . $conn->error;
}
$conn->close();
?>
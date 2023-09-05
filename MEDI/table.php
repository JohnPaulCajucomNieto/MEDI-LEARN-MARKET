<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myLogin";
		
$conn = new mysqli($servername, $username, $password, $database);
		
if ($conn->connect_error) {
    die("CONNECTION FAILED: " . $conn->connect_error);
}

$sql = 'CREATE TABLE Login_data (
    id int(6) unsigned auto_increment primary key,
    Firstname varchar(30) not null,
    Lastname varchar(30) not null,
    Email varchar(30) not null,
    Contact int(15) not null,
    Address varchar(50) not null
)';

if ($conn -> query($sql) === TRUE) {
	echo "TABLE Login_data CREATED SUCCESSFULLY";
} 
else{
	echo "ERROR CREATING TABLE: " .$conn->error;
}
$conn->close();
?>

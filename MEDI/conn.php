<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    // CREATE CONNECTION
    $conn = new mysqli($servername, $username, $password);
    // CHECK CONNECTION
    if ($conn->connect_error) {
            DIE("CONNECTION FAILED: " . $conn->connect_error);
        }
    else {
            echo("CONNECTION SUCCESFUL");
        }		
    $conn->close();
?>

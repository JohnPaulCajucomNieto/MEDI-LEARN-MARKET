<?PHP
		$servername = "localhost";
		$username = "root";
		$password = "";
		// CREATE CONNECTION
		$conn = new mysqli($servername, $username, $password);
		// CHECK CONNECTION
		if ($conn->connect_error) {
				die("CONNECTION FAILED: " . $conn->connect_error);
			}	
		// CREATE DATABASE
		$sql = 'CREATE DATABASE medicine';
		
		if ($conn->query($sql) === TRUE) {
			echo  "DATABASE CREATED SUCCESSFULLY";
		} else {
			echo "ERROR CREATING DATABASE: " . $conn->error;
		}		
		$conn->close();
?>

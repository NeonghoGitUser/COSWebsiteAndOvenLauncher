<?php 

echo"Registration ended up with"; 


// Code for login 
if($_SERVER['REQUEST_METHOD'] == 'POST' )
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "loginsystem";

	echo "<br>"; 
	echo"POST Received succesfully"; 
		
	//$conn = new mysqli($servername, $username, $password, $dbname);		
	$conn = new mysqli($servername, $username, $password, $dbname); 	
	
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}		
	
	echo "<br>"; 
	echo" The connection was succesful with database "; 
		
		
	// Retrieve form data
	$NewUsername = $_POST['username'];
	$NewEmail = $_POST['email'];
	$Password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

	echo "<br>"; 
	echo" Username is  ".$_POST['username']; 




	// Insert user data into the database
	$sql = "INSERT INTO users (fname, email, password) VALUES ('$NewUsername', '$NewEmail', '$Password')";

	if ($conn->query($sql) === TRUE) {
	    echo "Registration successful!";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
		
	echo"<br>"; 		
	echo"<button href = 'COSLogin.php'> Go to login page to login basically </button>"; 	
	echo"<br>"; 				
	echo " <a class='btn' href='index.php'> Answers by Sentry </a> ";
	
	$conn->close();		
	/*	
	// Check connection
	if ($conn->connect_error) 
	{
	    echo"Ccould connect to dATABAE"; 	
	    die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		echo"Connection was not even good"; 
	}

	$username = $_POST['username'];
*/


}
else
{

	echo"Error Could not connect". $_SERVER['REQUEST_METHOD']; 
	echo"Error Could not connect". isset($_POST['submit']); 	
	
}




?>

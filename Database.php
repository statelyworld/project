<?php 
/**
 * 
 */
class Database
{	
	function __construct()
	{
		$servername = "localhost";
	 	$username = "root";
	 	$password = "";
		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";
	}
}
$db=new Database();
?>
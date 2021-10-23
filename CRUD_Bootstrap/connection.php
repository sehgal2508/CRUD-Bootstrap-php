<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="college";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn)
 {
    echo "..<br>";
} 
else
	die("Connection failed because".mysqli_connection_error());
?>
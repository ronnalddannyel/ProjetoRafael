<?php 

$host = "sql818.main-hosting.eu";
$username = "u531117276_coloniadepesca";
$password = "@Coloniadepesca2024";
$dbname = "u531117276_coloniadepesca";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
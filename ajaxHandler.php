<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teachers";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
	 	$picId = $_GET['picId'];
	 	$i = $_GET['i'];

	 	$nickname = $_GET['nickname'];
	 	if($nickname != ""){
		 	$nickId = $_GET['nickId'];
		 	$sql = "INSERT INTO `nickmane`(`id`, `nickname`) VALUES ('$nickId','$nickname')";
		 	$conn->query($sql);
	 	}
	 	
		$sql = "SELECT rank FROM `teacher` WHERE id='$picId'";
		$resul = $conn->query($sql);
		$rank = $resul->fetch_assoc()['rank'];
		$rank += $i;
		$sql = "UPDATE `teacher` SET `rank`='$rank' WHERE `id`='$picId'";
		$conn->query($sql);
	} 	

?>
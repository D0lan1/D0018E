<?php 
$servername = "phpmyadmin";
$username = "Martinis";
$password = "";
$dbName = "d0018e";

$conn = new mysqli($servername, $username, $password, $dbName);

$v = 'SELECT * FROM user';
$result = $conn->query($v);

if (mysqli_num_rows($result) > 0) {
	while($rowData = mysqli_fetch_array($result)){
  		//echo $rowData["UserName"];
		foreach($rowData as $row){
			echo $row;
			echo " ";
		}
	}
}

?>
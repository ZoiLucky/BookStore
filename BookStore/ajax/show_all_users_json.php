
<?php
session_start();
include "../internal/dbconnect.php";


$sql = "select * from customer";
$result = $mysqli->query($sql);

$myArray = array();


while ($row = $result->fetch_assoc()) {
		$myArray[] = $row;
	}
	
	echo json_encode($myArray);
	
	$result->close();

?>
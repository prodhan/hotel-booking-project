<?php

require_once 'connection.php';
if(!empty($_POST['type'])){
	$type = $_POST['type'];
	$name = $_POST['name_startsWith'];
	$query = "SELECT productCode, productName, price FROM products WHERE UPPER($type) LIKE '".strtoupper($name)."%'";
	$result = mysqli_query($conn, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$name = $row['productCode'].'|'.$row['productName'].'|'.$row['price'];
		array_push($data, $name);
	}	
	echo json_encode($data);exit;
}



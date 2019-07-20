<?php

include('header.php');

if(isset($_POST['submit'])){
    include('connection.php');
    
    
	$customer_name=$_POST['customer_name'];
	$invoiceID=$_POST['invoiceNo'];
	$invoiceDate=$_POST['invoiceDate'];
	$recptBy=$_POST['recptBy'];
	$subTotal=$_POST['subTotal'];
	$discount=$_POST['discount'];
	$total=$_POST['total'];
	$due=$_POST['due'];
	$commission=$_POST['commission'];
	$netAmount=$_POST['netAmount'];
	//$comholder=$_POST['comholder'];
	
$sql = "INSERT INTO hotel_invoice (invoiceID, date, customer_name, subtotal, discount, total, commission, netAmount, recptBy)
		VALUES ('$invoiceID', '$invoiceDate', '$customer_name', '$subTotal', '$discount', '$total', '$commission', '$netAmount', '$recptBy' )";


if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
		
		
	$s = "insert into hotel_invoice_details (invoiceID,date,productCode,productName,price,qty) values";
	for($i=0;$i<count($_POST['itemNo']);$i++)
	{
		$s .="('".$invoiceID."','".$invoiceDate."','".$_POST['itemNo'][$i]."','".$_POST['itemName'][$i]."','".$_POST['price'][$i]."','".$_POST['quantity'][$i]."'),";
	}
	$s = rtrim($s,",");
	if(!mysqli_query($conn, $s))
		echo mysqli_error();
		
	else
	echo "<div class='content-wrapper'>";
	echo "<form action='print-hotel-invoice.php' method='GET' class='form-group'>";
	echo "<h2 align='center'>Records Saved for invoice <input type='text' name='inv' value='".$invoiceID."' /> <br /> and Customer  <input type='text' name='patientID' value='".$customer_name."' /> <h2><br />";
	echo "<p align='center'><input type='submit' formtarget='_blank' class='btn btn-success btn-lg'  value='Print'></p>";
	echo "</form></div>";
		
		
	mysqli_close($conn);
}
	//include footer
	include('footer.php');
	
?>

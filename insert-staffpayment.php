<?php 
include('header.php');
include('connection.php');

	
	$date=$_POST['date'];  
	$month=$_POST['month'];  
	$staffid=$_POST['staffid'];  
	$pay=$_POST['pay'];  
	
	

	if(isset($_POST['submit'])){ 
	$sql= "INSERT INTO salarysheet (staffid, date, month, pay) 
		VALUES('$staffid', '$date', '$month', '$pay')";
		
	if (mysqli_query($conn, $sql))
	{
		echo "<h2>Salary has been paid successfully!</h2>";
	}
	
	else
	{
		echo "Error" .$sql. "<br>" .mysqli_error($conn);
	}
	}
	

	





include('footer.php');
?>
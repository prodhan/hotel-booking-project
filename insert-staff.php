<?php 
include('header.php');
include('connection.php');

	$name=$_POST['name'];
	$designation=$_POST['designation'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$joiningdate=$_POST['joiningdate'];
	
	
	$sql= "INSERT INTO employee (name, designation, phone, address, joiningdate) 
		VALUES('$name', '$designation', '$phone', '$address', '$joiningdate')";
		
	if (mysqli_query($conn, $sql))
	{
		echo "<h2>New Employee has been added successfully!</h2>";
		echo "<a class='btn btn-success' href='add-staff.php'>Add New</a>";
	}
	
	else
	{
		echo "Error" .$sql. "<br>" .mysqli_error($conn);
	}




include('footer.php');
?>
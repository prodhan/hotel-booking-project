<?php
include('header.php');
include('connection.php');

$sql = mysqli_query($conn, "SELECT id FROM invoices ORDER BY id DESC LIMIT 1");
while ($row = mysqli_fetch_array($sql)){
    $id=$row['id'];
    $invoiceid=$id+1;
    
}

?>

<div style="width:500px">
<h2>Check In</h2>
<br />
<form action="" method="POST" enctype="multipart/form-data">
		
	<table class="table table-striped">

	<tr>
		<th>Room No</th>
		<td><input class="form-control" type="text" name="roomno" value="<?php echo $_GET['r']; ?>" readonly/></td>
	</tr>

	<tr>
		<th>Invoice ID</th>
		<td><input class="form-control" type="number" name="invoiceid" value="<?php echo $invoiceid; ?>" readonly/></td>
	</tr>
	
	<tr>
		<th>Guest ID</th>
		<td><input class="form-control" type="text" name="guest_id" value="<?php echo $_GET['g']; ?>" readonly /></td>
	</tr>
	
	<tr>
	    <td>Check In Date</td>
	    <td><input type="date" name="checkin" class="form-control"></td>
	</tr>
	
	<tr>
	    <td>Check In Time</td>
	    <td><input type="time" name="intime" class="form-control"></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><input class="btn btn-success btn-block" type="submit" name="submit" value="Check In" /></td>
	</tr>
	
	</table>

</form>
</div>


<?php
include('connection.php');
if(isset($_POST['submit'])){
   $roomno=$_POST['roomno'];
   $guest_id=$_POST['guest_id'];
   $invoiceid=$_POST['invoiceid'];
   $checkin=$_POST['checkin'];
   $intime=$_POST['intime'];
    $time=$checkin." ".$intime;
    $checked=date($time);
    
    $sql="INSERT INTO room_bookings (roomno, guest_id, invoiceid, status, check_in) VALUES ('$roomno', '$guest_id', '$invoiceid', 3, '$checked');";
    
    $sql .="UPDATE rooms SET status=3 WHERE roomno='$roomno';";
    $sql .="INSERT INTO invoices (guest_id, date) VALUES ('$guest_id', '$checkin')";
    
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "<br><div class='alert alert-success'>";
  		 echo "Successfully Checked In!";
    	echo "</div></div>";
   
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sql. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}
}






include('footer.php');
?>

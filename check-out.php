<?php
include('header.php');
include('connection.php');
$invoice=$_GET['inv'];

$sql = mysqli_query($conn, "SELECT * FROM room_bookings WHERE invoiceid='$invoice'");
while ($row = mysqli_fetch_array($sql)){
    $id=$row['id'];
    $invoiceid=$id+1;
    


?>

<div style="width:500px">
<h2>Check Out</h2>
<br />
<form action="checkout-success.php" method="POST" enctype="multipart/form-data">
		
	<table class="table table-striped">

	<tr>
		<th>Room No</th>
		<td><input class="form-control" type="text" name="roomno" value="<?php echo $row['roomno']; ?>" readonly/></td>
	</tr>

	<tr>
		<th>Invoice ID</th>
		<td><input class="form-control" type="number" name="invoiceid" value="<?php echo $row['invoiceid'];; ?>" readonly/></td>
	</tr>
	
	<tr>
		<th>Guest ID</th>
		<td><input class="form-control" type="text" name="guest_id" value="<?php echo $row['guest_id']; ?>" readonly /></td>
	</tr>
	
	<tr>
	    <td>Check In</td>
	    <td><input type="text" name="checkin" class="form-control" value="<?php echo $row['check_in']; ?>" readonly></td>
	</tr>
	<tr>
	    <td>Check Out Date</td>
	    <td><input type="date" name="checkout" class="form-control" value="<?php echo date("Y-m-d"); ?>" ></td>
	</tr>
	
	<tr>
	    <td>Check Out Time</td>
	    <td><input type="time" name="outtime" class="form-control"></td>
	</tr>
	
	<tr>
	    <td>Duration (days)</td>
	    <td><input type="number" name="duration" class="form-control"></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><input class="btn btn-danger btn-block" type="submit" name="submit" value="Check Out" /></td>
	</tr>
	
	</table>

</form>
</div>


<?php
}

include('footer.php');
?>

<?php
include('header.php');
include('functions.php');
include('connection.php');

$id=$_GET['id'];
$sql="SELECT * FROM rooms WHERE id='$id'";
$result= mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
   $row = mysqli_fetch_array($result);

?>
<div style="width:500px">
<h2>Update Room</h2>
<br />
<form action="" method="POST" enctype="multipart/form-data">
		
	<table class="table table-striped">

	<tr>
		<th>Room No</th>
		<td><input class="form-control" type="text" name="roomno" value="<?php echo $row['roomno']; ?>" required/></td>
	</tr>
	
	<tr>
		<th>Category</th>
		<td>
		     <select class="form-control" name="category" id="category">
		<?php 
$sql2 = mysqli_query($conn, "SELECT * FROM room_category");
while ($row2 = mysqli_fetch_array($sql2)){
	?>
	<option value="<?php echo $row2['category']; ?>"><?php echo $row2['category'];?></option>
	<?php
	}
	?>
	  </select>
		</td>
	</tr>
	
	
	<tr>
		<th>Rate</th>
		<td><input class="form-control" type="number" name="rate" value="<?php echo $row['rate']; ?>" required/></td>
	</tr>
	
	<tr>
		<th>Description</th>
		<td><input class="form-control" type="text" name="details" value="<?php echo $row['details']; ?>" /></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><input class="btn btn-success btn-block" type="submit" name="submit" value="Update" /></td>
	</tr>
	
	</table>

</form>
</div>


<?php
}
include('connection.php');
if(isset($_POST['submit'])){
   $roomno=$_POST['roomno'];
   $category=$_POST['category'];
   $rate=$_POST['rate'];
   $details=$_POST['details'];
    
    $sql="UPDATE rooms SET roomno='$roomno', category='$category', rate='$rate', details='$details' WHERE id='$id'";
    
    
    if (mysqli_query($conn, $sql)) {
    echo "<br><div class='alert alert-success'>";
  		 echo "Room has been updated!";
    	echo "</div></div>";
   
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sql. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}
}






include('footer.php');
?>
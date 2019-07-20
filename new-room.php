<?php
include('header.php');
include('connection.php');
?>
<div style="width:500px">
<h2>Create New Room</h2>
<br />
<form action="" method="POST" enctype="multipart/form-data">
		
	<table class="table table-striped">

	<tr>
		<th>Room No</th>
		<td><input class="form-control" type="text" name="roomno" placeholder="Room No" required/></td>
	</tr>
	
	<tr>
		<th>Category</th>
		<td>
		    <select class="form-control" name="category" id="category">
		<?php 
$sql = mysqli_query($conn, "SELECT * FROM room_category");
while ($row = mysqli_fetch_array($sql)){
	?>
	<option value="<?php echo $row['category']; ?>"><?php echo $row['category'];?></option>
	<?php
	}
	?>
	  </select>
		</td>
	</tr>
	
	
	<tr>
		<th>Rate</th>
		<td><input class="form-control" type="number" name="rate" placeholder="Enter Price" required/></td>
	</tr>
	
	<tr>
		<th>Description</th>
		<td><input class="form-control" type="text" name="details" placeholder="Description About Room" /></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><input class="btn btn-success btn-block" type="submit" name="submit" value="Save" /></td>
	</tr>
	
	</table>

</form>
</div>


<?php
include('connection.php');
if(isset($_POST['submit'])){
   $roomno=$_POST['roomno'];
   $category=$_POST['category'];
   $rate=$_POST['rate'];
   $details=$_POST['details'];
    
    $sql="INSERT INTO rooms (roomno, category, rate, status, details) VALUES ('$roomno', '$category', '$rate', 0, '$details')";
    
    
    if (mysqli_query($conn, $sql)) {
    echo "<br><div class='alert alert-success'>";
  		 echo "Room has been created!";
    	echo "</div></div>";
   
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sql. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}
}






include('footer.php');
?>
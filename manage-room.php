<?php 
include('header.php');
//include('function.php');
?>
<div  style="width:100%">
<h3 align="center">List of Rooms</h3>


<?php 

    include('functions.php');
	include('connection.php');
	//build query

$query = "SELECT * FROM rooms ORDER BY category ASC";
	
//Execute query
$qry_result = mysqli_query($conn, $query) or die(mysqli_error());

	//Build Result String
	echo "<div style='width:100%'>";
	echo "<table class='table table-hover'>";
	 echo "<tr>";
	echo "<th>SL.</th>";
	echo "<th>Room Category</th>";
	echo "<th>Room No</th>";
	echo "<th>Price</th>";
	echo "<th>Description</th>";
	echo "<th>Action</th>";
	echo "</tr>";
    
	$sno=0;
// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($qry_result)){
$sno=$sno+1;
   echo "<tr style='border:1px solid #000'>";
   echo "<td>".$sno."</td>";
   echo "<td>".$row['category']."</td>";
   echo "<td>".$row['roomno']."</td>";
   echo "<td>".$row['rate']."</td>";
   echo "<td>".$row['details']."</td>";
  
   echo "<td><a class='btn-sm btn-primary' href='room-edit.php?id=".$row['id']."'>Edit</a> | <a class='btn-sm btn-danger' href='delete.php?id=".$row['id']."&i=room'>Delete</a></td>";

   
 
   
   echo "</tr>";
}



?>
</div>

<?php 
mysqli_close($conn);
include("footer.php"); ?>
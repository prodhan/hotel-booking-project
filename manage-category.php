<?php 
include('header.php');
//include('function.php');
?>
<div  style="width:100%">
<h3 align="center">List of Category of rooms</h3>


<?php 

    include('functions.php');
	include('connection.php');
	//build query

$query = "SELECT * FROM room_category";
	
//Execute query
$qry_result = mysqli_query($conn, $query) or die(mysqli_error());

	//Build Result String
	echo "<div style='width:100%'>";
	echo "<table class='table table-hover'>";
	 echo "<tr>";
	echo "<th>SL.</th>";
	echo "<th>Category Name</th>";
	echo "<th>Action</th>";
	echo "</tr>";
    
	$sno=0;
// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($qry_result)){
$sno=$sno+1;
   echo "<tr style='border:1px solid #000'>";
   echo "<td>".$sno."</td>";
   echo "<td>".$row['category']."</td>";
  
   echo "<td> <a class='btn-sm btn-danger' href='delete.php?id=".$row['id']."&i=cat'>Delete</a></td>";

   
   echo "</tr>";
}



?>
</div>

<?php 
mysqli_close($conn);
include("footer.php"); ?>
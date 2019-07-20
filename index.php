<?php 
include('header.php'); 
include('functions.php'); 
include('connection.php'); 

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
	echo "<th>Status</th>";
	echo "<th>Action</th>";
	echo "</tr>";
    
	$sno=0;
// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($qry_result)){
$sno=$sno+1;
   echo "<tr style='border:1px solid #000'>";
   echo "<td>".$sno."</td>";
   echo "<td>".roomcat($row['category'])."</td>";
   echo "<td>".$row['roomno']."</td>";
   echo "<td>".$row['rate']."</td>";
   echo "<td>".roomStatus($row['status'])."</td>";
  
   echo "<td><a class='btn-sm btn-primary' href='register-guest.php?r=".$row['roomno']."&p=".$row['rate']."'>Book Now</a> | <a class='btn-sm btn-success' href='checkin.php?g=".$row['guest_id']."&r=".$row['roomno']."'>Check In</a></td>";

   
 
   
   echo "</tr>";
}
	 
?>
				
					
<h2>Room Booking</h2>              


			  
<?php 


include('footer.php'); ?>
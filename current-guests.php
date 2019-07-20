<?php 
include('header.php'); 
include('functions.php'); 
include('connection.php'); 

$query = "SELECT * FROM room_bookings as r INNER JOIN guest_infos as g ON g.mobile=r.guest_id WHERE r.status<4 ORDER BY r.check_in DESC";
	
//Execute query
$qry_result = mysqli_query($conn, $query) or die(mysqli_error());

	//Build Result String
	echo "<div style='width:100%'>";
	echo "<table class='table table-hover'>";
	 echo "<tr>";
	echo "<th>SL.</th>";
	echo "<th>Room No</th>";
	echo "<th>Guest Name (Phone)</th>";
	echo "<th>Invoice No</th>";
	echo "<th>Check In</th>";
	echo "<th>Status</th>";
	echo "<th>Action</th>";
	echo "</tr>";
    
	$sno=0;
// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($qry_result)){
$sno=$sno+1;
   echo "<tr style='border:1px solid #000'>";
   echo "<td>".$sno."</td>";
   echo "<td>".$row['roomno']."</td>";
   echo "<td>".$row['guest_name']." (".$row['guest_id'].")</td>";
       echo "<td>".$row['invoiceid']."</td>";
       echo "<td>".$row['check_in']."</td>";
   echo "<td>".roomStatus($row['status'])."</td>";
  
   echo "<td><a class='btn-sm btn-primary' href='add-invoice.php?inv=".$row['invoiceid']."'>Add Invoice</a> | <a class='btn-sm btn-danger' href='check-out.php?inv=".$row['invoiceid']."'>Check Out</a></td>";

   
 
   
   echo "</tr>";
}
	 
?>
				
					
<h2>Current Guests</h2>              


			  
<?php 


include('footer.php'); ?>
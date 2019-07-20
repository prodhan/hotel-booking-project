<?php
include('header.php');
if(isset($_POST['submit']))
{
    
include('connection.php');
include('functions.php');
if(isset($_POST['submit'])){
   $roomno=$_POST['roomno'];
   $guest_id=$_POST['guest_id'];
   $duration=$_POST['duration'];
   $invoiceid=$_POST['invoiceid'];
   $checkout=$_POST['checkout'];
   $outtime=$_POST['outtime'];
    $time=$checkout." ".$outtime;
    $checked=date($time);
    
    //room rent price sql
    $s="SELECT * FROM rooms WHERE roomno='$roomno'";
    $r=mysqli_query($conn, $s);
    while ($row = mysqli_fetch_array($r)){
    $cat=roomcat($row['category']);
    $rate=$row['rate'];
    }
    
    $price=$rate*$duration;
    
    $product="Room Rent for ".$cat."  Room No ".$roomno." Duration ".$duration." day(s)";
    
     $sql ="INSERT INTO invoice_details (invoiceid, product, price, idate) VALUES ('$invoiceid', '$product', '$price', '$checked');";
    
    $sql .="UPDATE room_bookings SET check_out='$checked', status=4, duration='$duration' WHERE invoiceid='$invoiceid';";
    
    $sql .="UPDATE rooms SET status=0 WHERE roomno='$roomno'";
   
    
    if (mysqli_multi_query($conn, $sql)) {
    echo "<br><div class='alert alert-success'>";
  		 echo "Successfully Checked Out!";
    	echo "</div>";
         echo "<a href='prepare-invoice.php?inv=".$invoiceid."' class='btn btn-primary'> Prepare Invoice</a>";
        echo "</div>";
        
       
   
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sql. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}
}




}

include('footer.php');
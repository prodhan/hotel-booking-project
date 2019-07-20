<?php 
include('header.php');
include('connection.php');
?>
<div  style="width:100%">
<h3 id="heading" align="center">Restaurent Invoice Report</h3>

<form name='' action="" method="POST" >

  <table class="table" border="0">
    <tr>
     <td>From Date:</td>
      <td><input class="form-control" type='date' id='sdate' name="sdate"  /></td>
      <td>To Date:</td>
      <td><input class="form-control" type='date' id='edate' name="edate" /></td>
      <td> <input class="btn btn-primary btn-sm" name="submit" type='submit'  value='Search'/></td>
    </tr>
    </table>
    

   
</form>

<?php 

if (isset($_POST['submit']))
{
   
	include('connection.php');
	
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	//$wcode = $_POST['wcode'];

	//build query

$query = "SELECT * FROM hotel_invoice WHERE (date BETWEEN '$sdate' AND '$edate')";


	
//Execute query
$qry_result = mysqli_query($conn, $query) or die(mysqli_error());

    
	//Build Result String
	echo "<div style='width:100%'>";
	echo "<table class='table table-hover'>";
	 echo "<tr>";
	echo "<th>SL.</th>";
	echo "<th>Date</th>";
	echo "<th>Invoice ID</th>";
	echo "<th>Sub total</th>";
	echo "<th>Discount</th>";
	echo "<th>Total</th>";
	echo "<th>Action</th>";
	echo "</tr>";
    
	$sno=0;
// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($qry_result)){
   
$sno=$sno+1;
   echo "<tr style='border:1px solid #000'>";
   echo "<td>".$sno."</td>";
   echo "<td>".$row['date']."</td>";
   echo "<td>".$row['invoiceID']."</td>";
   echo "<td>".$row['subtotal']."</td>";
   echo "<td>".$row['discount']."</td>";
   echo "<td>".$row['total']."</td>";
   echo "<td><a href='print-hotel-invoice.php?inv=H2018".$row['id']."' class='btn-sm btn-primary' target='_blank'>Details</a></td>";
   
   echo "</tr>";
}
    echo "</table>";



}
    


    

    

?>
</div>

<?php 
mysqli_close($conn);
include("footer.php"); ?>
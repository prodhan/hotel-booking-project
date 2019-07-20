<?php 
include('header.php');
include('connection.php');
?>
<div  style="width:100%">
<h3 id="heading" align="center">Bazar Report</h3>

<form name='' action="" method="POST" >

  <table class="table" border="0">
    <tr>
     <td>Date:</td>
      <td><input class="form-control" type='date' id='sdate' name="sdate"  /></td>
<!--
      <td>To Date:</td>
      <td><input class="form-control" type='date' id='edate' name="edate" /></td>
-->
      <td> <input class="btn btn-primary btn-sm" name="submit" type='submit'  value='Search'/></td>
    </tr>
    </table>
    

   
</form>

<?php 

if (isset($_POST['submit']))
{
   
	include('connection.php');
	
	$sdate = $_POST['sdate'];

	//$wcode = $_POST['wcode'];

	//build query

$query = "SELECT * FROM bazars WHERE date='$sdate'";


	
//Execute query
$qry_result = mysqli_query($conn, $query) or die(mysqli_error());

    
	//Build Result String
	echo "<div style='width:100%'>";
	echo "<table class='table table-hover'>";
	 echo "<tr>";
	echo "<th>SL.</th>";
	echo "<th>Date</th>";
	echo "<th>Item</th>";
	echo "<th>Price</th>";
	echo "<th>Action</th>";
	echo "</tr>";
    
	$sno=0;
// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($qry_result)){
   
$sno=$sno+1;
   echo "<tr style='border:1px solid #000'>";
   echo "<td>".$sno."</td>";
   echo "<td>".$row['date']."</td>";
   echo "<td>".$row['item']."</td>";
   echo "<td>".$row['price']."</td>";
   echo "<td><a href='delete.php?id=".$row['id']."&i=bazar' class='btn-sm btn-danger'>Delete</a></td>";
   
   echo "</tr>";
}
    echo "</table>";



}
    


    

    

?>
</div>

<?php 
mysqli_close($conn);
include("footer.php"); ?>
<?php 
include ('header.php');
include ('connection.php');
 ?>

<h3 align="center">Salary Sheet</h3>

<form name='' action="" method="POST" >

   <b>From Date:</b> <input type='date' id='sdate' name="sdate"  /> 
   <b>To Date: </b> <input type='date' id='edate' name="edate" /> 
  
     Staff Name
      
		<select  name="staffid" id="staffid">
		<option value="">ALL</option>
		<?php 
$sql = mysqli_query($conn, "SELECT * FROM employee");
while ($row = mysqli_fetch_array($sql)){
	?>
	
	<option value="<?php echo $row['id']; ?>"><?php echo $row['name'];?></option>
	<?php
	}
	?>
	  </select>
	  
   <input class="btn btn-primary btn-sm" name="submit" type='submit'  value='Search'/>
   
   
</form>

<?php 


if (isset($_POST['submit']))
{
	include('connection.php');
	
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$staffid = $_POST['staffid'];

	//build query

$query = "SELECT s.date, s.month, s.pay, e.name, e.designation FROM salarysheet as s
	INNER JOIN employee as e
	ON s.staffid=e.id
WHERE (date BETWEEN '$sdate' AND '$edate' )";

if(!empty($staffid))
   $query .= " OR staffid = '$staffid'";

	
//Execute query
$qry_result = mysqli_query($conn, $query) or die(mysql_error());

	//Build Result String
	echo "<div style='width:100%'>";
	echo "<table class='table table-hover'>";
	 echo "<tr>";
	echo "<th>Sl.</th>";
	echo "<th>Date</th>";
	echo "<th>Name</th>";
	echo "<th>Designation</th>";
	echo "<th>Amount</th>";
	
	
	
	

	echo "</tr>";
	$sno=0;
// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($qry_result)){
$sno=$sno+1;
   echo "<tr style='border:1px solid #000'>";
   echo "<td>".$sno."</td>";
   echo "<td>".$row['date']."</td>";
   echo "<td>".$row['name']."</td>";
   echo "<td>".$row['designation']."</td>";
   echo "<td>".$row['pay']."</td>";

   
   
   
 

   //echo "<h2>Total Expenditure: ".$row['total']." TK</h2>";
   
   echo "</tr>";
}

//echo "Query: " . $query . "<br />";
echo "</table>";




}




include ('footer.php'); ?>
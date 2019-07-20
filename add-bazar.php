<?php
include('header.php');
include('connection.php');

$sql = mysqli_query($conn, "SELECT * FROM bazar_items");
?>

<div style="width:100%">
<h2>Add Bazar Items</h2>
<br />
<form action="" method="POST" enctype="multipart/form-data">
		
	<table class="table table-striped">

	<tr>
		<th>Date</th>
		<td><input class="form-control" type="date" name="idate" value="<?php echo date("Y-m-d"); ?>" /></td>
		
	
		<th>Item</th>
		<td><input class="form-control" type="text" list="foods" name="product" />
		
	
		<datalist id="foods">
         	<?php 
            
            while ($row = mysqli_fetch_array($sql)){
                echo "<option value='".$item=$row['item']."'>";    
}   
            ?>
        </datalist>
		
		
		</td>
		 <td>Price</td>
	    <td><input type="number" step="any" name="price" class="form-control"></td>
	    <td><input class="btn btn-success btn-block" type="submit" name="submit" value="Add" /></td>
	</tr>


	
	</table>

</form>
</div>
<hr>


<?php
include('connection.php');
if(isset($_POST['submit'])){
    
   $product=$_POST['product'];
   $price=$_POST['price'];
   $idate=$_POST['idate'];

    
   $sq="INSERT INTO bazars (date, item, price) VALUES ('$idate', '$product', '$price')";
    
   
    
    if (mysqli_query($conn, $sq)) {
    echo "<br><div class='alert alert-success'>";
  		 echo "Successfully Added!";
    	echo "</div></div>";
   
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sq. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}
    
$query="SELECT * FROM bazars WHERE date='$idate'";
$qry_result = mysqli_query($conn, $query) or die(mysqli_error());

	//Build Result String
	echo "<div style='width:100%'>";
	echo "<table class='table table-bordered'>";
	 echo "<tr>";
	echo "<th>SL.</th>";
	echo "<th>Date</th>";
	echo "<th>Item</th>";
	echo "<th>Price</th>";
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
   echo "</tr>";
}    
    
}



include('footer.php');
?>

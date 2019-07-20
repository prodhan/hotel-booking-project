<?php

include('header.php');
include('connection.php');
include('money.php');
$invoiceid=$_GET['inv'];
echo "<h2 align='center'>Review invoice</h2>";

$sql="SELECT g.guest_name, g.mobile, i.id, i.date FROM invoices as i INNER JOIN guest_infos as g ON g.mobile=i.guest_id WHERE i.id='$invoiceid'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
     echo "<div style='width:100%'>";
	echo "<table class='table'>";
    while($row = mysqli_fetch_assoc($result)) {
	 echo "<tr>";
        echo "<td>Invoice No</td><td>" . $row["id"]."</td>";
        echo "<td>Invoice Date</td><td>" . $row["date"]."</td>";
	 echo "</tr>";
      echo "<tr>";
        echo "<td>Guest Name: </td><td>" . $row['guest_name']."</td>";
        echo "<td>Mobile: </td><td>" . $row['mobile']."</td>";
	 echo "</tr>";
        
       
        
    }
    
    echo "</table>";
}

   
$query="SELECT * FROM invoice_details WHERE invoiceid='$invoiceid'";
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
$total=0;
// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($qry_result)){
$sno=$sno+1;
   echo "<tr style='border:1px solid #000'>";
   echo "<td>".$sno."</td>";
   echo "<td>".$row['idate']."</td>";
   echo "<td>".$row['product']."</td>";
   echo "<td>".$t=$row['price']."</td>"; 
   echo "</tr>";
    
    $total=$total+$t;
}   

echo "</table>";
 ?>
 <form action="invoice-success.php" method="post">
 <div style="width:40%; float:right">
<table class="table table-stripped">
   <tr>
       <th>Sub Total</th>
       <td><input type="text" class="form-control" name="subtotal" id="subtotal" value="<?php echo $total; ?>"></td>
   </tr>
    <tr>
       <th>Tax (15%)</th>
       <td><input type="text" class="form-control" name="tax" id="tax" value="<?php echo $tax=($total*15)/100; ?>"></td>
   </tr>
    <tr>
       <th>Discount</th>
       <td><input type="text" class="form-control" name="discount" id="discount" value="0"></td>
   </tr>
    <tr>
       <th>Grand Total</th>
       <td><input type="text" class="form-control" name="grandtotal" id="gt" value="<?php echo $gt=$tax+$total; ?>"></td>
   </tr>
 <input type='text' style='display:none' name='invoiceid' value='<?php echo $invoiceid; ?>'>
   <tr>
       <td><input type="button" class="btn btn-warning" value="Calculate" onclick="javascript:calc()"></td>
       <td><input type="submit" class="btn btn-success" name="submit" value="Procced"></td>
   </tr>
    
</table>  
</div>
</form>  
<script>
    
    function calc(){
    var subtotal=parseInt(document.getElementById("subtotal").value);
    var tax=parseFloat(document.getElementById("tax").value);
    var discount=parseFloat(document.getElementById("discount").value);
    
    var total=(subtotal-discount+tax);
    var gt=document.getElementById("gt");
    gt.value=total;
    }
</script>
    
<?php
include('footer.php');
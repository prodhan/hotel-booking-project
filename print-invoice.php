<?php
include('header.php');
include('connection.php');
include('money.php');
$invoiceid=$_GET['inv'];
$sql="SELECT g.guest_name, g.address, g.mobile, i.id, i.date FROM invoices as i INNER JOIN guest_infos as g ON g.mobile=i.guest_id WHERE i.id='$invoiceid'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
     echo "<div style='width:100%'>";
	echo "<table class='table table-bordered'>";
    while($row = mysqli_fetch_assoc($result)) {
?>
   <tr>
       <td colspan="7"><center>Northway Motel</center></td>
   </tr>
    <tr>
        <td>Address : Latifpur, Colony, Sherpur Road, Bogra</td>
        <td>VAT Reg No - 000111673</td>
        <td>Area Code - 60402</td>
        <td>INV # 2018<?php echo $invoiceid; ?> </td>
    </tr> 
    <tr>
        <td>Name : <?php echo $row["guest_name"]; ?></td>
        <td colspan="3">Address : <?php echo $row["address"]; ?></td>
    </tr>   
<?php 

       
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


//invoice sumary

$sql="SELECT * FROM invoices WHERE id='$invoiceid'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
     echo "<div style='width:100%'>";
	echo "<table class='table'>";
    while($row = mysqli_fetch_assoc($result)) {
	 echo "<tr>";
        echo "<td>Sub Total</td><td>" . $row["subtotal"]." /- </td>";
        echo "<td>Tax</td><td>" . $row["tax"]." /- </td>"; echo "<td>Discount</td><td>" . $row["discount"]." /- </td>";
        echo "<td>Grand Total</td><td>" . $row["total"]." /- </td>";
	 echo "</tr>";
        echo "<tr>";
        echo "<td>Date: ".$row['date']."</td>";
        echo "<td colspan='8'>";
        $t=(int)$row['total'];
         echo "In Words: ".translateToWords($t). "TK Only";
        echo "</td>";
        echo "</tr>";
        
    }
    
    echo "</table>";
    
   
}


?>





<?php
include('footer.php');
<?php

require('connection.php');

$patientID = "Walking Customer";
$invoiceID = $_GET['inv'];


?>
<body class="invoice" style="display:block">
<div style="width:560; margin:0 auto; display:block; overflow:hidden">
<table width="100%" border="0" >
  <tr>
    <td><h1 align="center">Northway Motel</h1></td>
  </tr>
  <tr>
    <td><p align="center">Latifpur Colony, Bogra | 01718-412611</p></td>
  </tr>
</table>
<hr />

<table width="100%" border="0" >
  <tr>
    <td width="16%">Customer</td>
    <td width="35%"><?php echo $patientID; ?></td>
    <td width="15%">Invoice ID</td>
    <td width="35%"><?php echo $invoiceID; ?></td>
  </tr>
  
</table>
<hr />

<?php


?>
<table width="100%" border="0" >
  <tr>
    <th width="8%">SL #</td>
    <th width="55%">Name of Services</td>
    <th width="8%">Qty</td>
    <th width="15%">MRP</td>
    <th width="17%">Sub Total</td>
  </tr>
  <?php 
  require('connection.php');
$result1 = mysqli_query($conn,"SELECT * FROM hotel_invoice_details WHERE invoiceID='$invoiceID'");
$sno = 0;
  if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
	$sno=$sno+1;
  ?>
  <tr>
    <td><?php echo $sno; ?></td>
    <td><?php echo $row1['productCode'].$row1['productName']; ?></td>
    <td align="center"><?php echo $row1['qty']; ?></td>
    <td align="center"><?php echo $row1['price']; ?></td>
    <td align="center"><?php echo $total[]=$row1['qty']*$row1['price']; } ?></td>
  </tr>
</table>
<hr />


	
	

<?php

} else {
    echo "0 results";
}

$result3 = mysqli_query($conn,"SELECT * FROM hotel_invoice WHERE invoiceID='$invoiceID'");

while($row3 = mysqli_fetch_array($result3)) {
?>
<div style="width:560; display:block; overflow:hidden ">
	<div style="width:260; float:left; ">
	<p>Signature:</p><br />
	<p>Prepared by: <?php echo $row3['recptBy']; ?></p>
	</div>
	<div style="width:200; float:right;">
<table width="100%" border="0" >
  <tr>
    <td width="48%"><b>Grand Total</b></td>
    <td width="18%">Tk.</td>
    <td width="34%"><?php echo $grand=array_sum($total); ?></td>
  </tr>
  <tr>
    <td>Discount</td>
    <td>Tk.</td>
    <td><?php echo $disc=$row3['discount']; ?> </td>
  </tr>
  <tr>
    <td>Net Payable</td>
    <td>Tk.</td>
    <td><?php echo $net=$grand-$disc; ?></td>
  </tr>
</table>



<?php
}
mysqli_close($conn);

?>
		</div>
	</div>
	<hr />
<small align="center">Software by: Pigeon Soft |  web: www.pigeon-soft.com | Contact: +88 01737569833</small>
</div>


</body>









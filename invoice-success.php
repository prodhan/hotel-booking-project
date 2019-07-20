<?php
include('header.php');
if(isset($_POST['submit'])){
    include('connection.php');
    $invoiceid=$_POST['invoiceid'];
    $subtotal=$_POST['subtotal'];
    $tax=$_POST['tax'];
    $discount=$_POST['discount'];
    $grandtotal=$_POST['grandtotal'];
    $reciept=$_SESSION['username'];
    $trid='2018'.$invoiceid;
    
    $sql="UPDATE invoices SET subtotal='$subtotal', tax='$tax', discount='$discount', total='$grandtotal', recieptby='$reciept', status=1, transactionid='$trid' WHERE id='$invoiceid'";
    
    if(mysqli_query($conn, $sql)){
       echo "<br><div class='alert alert-success'>";
  		 echo "Proccess Success!";
    	echo "</div>";
         echo "<a href='print-invoice.php?inv=".$invoiceid."' class='btn btn-primary'> Print Invoice</a>";
        echo "</div>";
    }
    else
        echo "Error!";
    
}


include('footer.php');

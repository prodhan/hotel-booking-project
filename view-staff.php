<?php
include('header.php');

echo "<div style='width:80%; margin-top:20px; padding:10px;'>";
	require('connection.php');
	
	$sql= "SELECT * From employee ";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
?>
<h2 align="center">কর্মচারীর  তালিকাঃ</h2>
	<table class="table table-bordered table-hover">
		<tr>
		
		<th>SL.</th>
		<th> নাম</th>
		<th>পদবী</th>
		<th>ঠিকানা</th>
		<th>মোবাইল নং</th>
		<th>যোগদানের তারিখ</th>
		<th>বেতন</th>
		</tr>
	
	

<?php
	$sl=0;
	
    while($row = mysqli_fetch_assoc($result)) {
       $sl=$sl+1;
		echo "<tr>";
		echo "<td> $sl </td>";
		echo "<td> $row[name] </td>";
		echo "<td> $row[designation] </td>";
		echo "<td> $row[address] </td>";
		echo "<td> $row[phone] </td>";
		echo "<td> $row[joiningdate] </td>";
		echo "<td> <a href='staffpayment.php?id=".$row['id']."' class='btn-sm btn-success'>Pay</a> </td>";

		echo "</tr>";
    }
	echo "</table>";
} else {
    echo "<h2 style='color:red;'>কিছুই নাই!</h2>";
}

mysqli_close($conn);	
	
echo "</div>";



include('footer.php');
?>

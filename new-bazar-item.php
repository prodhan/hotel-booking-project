<?php
include('header.php');
?>
<div style="width:500px">
<h2>Add new bazar item</h2>
<br />
<form action="" method="POST" enctype="multipart/form-data">
		
	<table class="table table-striped">

	<tr>
		<th>Item name</th>
		<td><input class="form-control" type="text" name="category" required/></td>
	</tr>
	
	
	
	<tr>
		<td>&nbsp;</td>
		<td><input class="btn btn-success btn-block" type="submit" name="submit" value="Add" /></td>
	</tr>
	
	</table>

</form>
</div>


<?php
include('connection.php');
if(isset($_POST['submit'])){
   $category=$_POST['category'];
  
    
    $sql="INSERT INTO bazar_items (item) VALUES ('$category')";
    
    
    if (mysqli_query($conn, $sql)) {
    echo "<br><div class='alert alert-success'>";
  		 echo "Item has been created!";
    	echo "</div></div>";
   
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sql. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}
}






include('footer.php');
?>
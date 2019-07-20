<?php 
include('header.php'); 
 
?>

<div style="width:60%; margin-top:20px; padding:10px;">
	
	<form class="form form-group" id="form" name="form" action="insert-staff.php" method="post">
	<h2 align="center">Add Staff</h2>
  <table class="table table-striped" width="50%" border="0" cellspacing="10" cellpadding="10">
  
	<tr>
      <td>Name of Staff</td>
      <td><input class="form-control" type="text" name="name" id="name"  ></td>
    </tr>
	
	<tr>
      <td>Designation</td>
      <td><input class="form-control" type="text" name="designation" id="designation"  ></td>
    </tr>
	
	<tr>
      <td>Phone Number</td>
      <td><input class="form-control" type="number" step="any" name="phone" id="phone"  ></td>
    </tr>
	
	<tr>
      <td>Address</td>
      <td><input class="form-control" type="text " step="any" name="address" id="address"  ></td>
    </tr>
	
	
	<tr>
      <td>Joining Date</td>
      <td><input class="form-control" type="date"  name="joiningdate" id="joiningdate"  ></td>
    </tr>
	
	<tr>
	<td>&nbsp;</td>
		<td><input class="btn btn-warning" type="reset" value="Reset" />
		<input class="btn btn-success" type="submit" value="Save" /></td>
		
	</tr>
  </table>
</form>
<p style="color:red; text-align:center">*  Please fill out all required fields</p>
</div>	

<?php include('footer.php'); ?>


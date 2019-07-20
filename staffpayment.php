<?php 
include('header.php');
include('connection.php');

$id=$_REQUEST['id'];

$query="SELECT * FROM employee WHERE id='".$id."'";
			
		 $resource=mysqli_query($conn,$query) or die ("An unexpected error occurred while <b>deleting</b> the record, Please try again!");
		 $result=mysqli_fetch_array($resource);
		 ?>
		 <h2 align="center"><u>কর্মচারীর প্রোফাইল</u></h2>
		 <hr />
		 <table width="90%">
			<tr>
				<th style="font-size:22px"><?php echo $result['name']. " (#".$result["id"].")"; ?></th>
				
			</tr>

			<tr>
				<td><?php echo "পদবী: ". $result['designation']; ?></td>
			</tr>
			
		 </table>
		 <hr />
		 <form action="insert-staffpayment.php" method="POST">
		 <div style="width:600px; margin-top:20px; padding:10px;">
		 <table class="table table-striped" width="50%" border="0" cellspacing="10" cellpadding="10">
    <tr>
      <td>তারিখ </td>
      <td><input class="form-control" type="date" name="date" id="date" required></td>
    </tr>
	
	<tr>
      <td>মাসের নাম </td>
      <td><select class="form-control" name="month" id="month">
		<option value="January">January</option>
		<option value="February">February</option>
		<option value="March">March</option>
		<option value="April">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
		<option value="August">August</option>
		<option value="September">September</option>
		<option value="October">October</option>
		<option value="November">November</option>
		<option value="December">December</option>
	  </select></td>
    </tr>
	
	<tr>
      <td>টাকার পরিমাণ</td>
      <td><input class="form-control" type="number" step="any" name="pay" id="pay" required></td>
    </tr>
	<tr>
      <td><input class="hidden" type="number" step="any" name="staffid" id="staffid" value="<?php echo $result['id']; ?>" required></td>
	  <td> <input class="btn btn-success" type="submit" name="submit" value="Submit" /></td>
      
    </tr>
	</table>
	</form>
	</div>
		 
<?php include('footer.php');?>
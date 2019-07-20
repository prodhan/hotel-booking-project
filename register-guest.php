<?php
include('header.php');
?>
<div style="width:80%">
<h2>Register Guest</h2>
<br />
<form action="" method="POST" enctype="multipart/form-data">
		
	<table class="table table-striped">
	
	<tr>
	    <td>Room No: <input type="text" name="roomno" value="<?php echo $_GET['r']; ?>" readonly></td>
	    <td>Room Rate: <input type="text" name="price" value="<?php echo $_GET['p']; ?>" readonly></td>
	    
	</tr>

	<tr>
		<th>Mobile No</th>
		<td><input class="form-control" type="text" name="mobile" placeholder="Mobile no" value="880" required autofocus/></td>
		<td><input class="btn btn-success btn-block" type="submit" name="search" value="Search" /></td>
	</tr>
	

	</table>

</form>



<?php

if(isset($_POST['search'])){
    include('connection.php');
   $mobile=$_POST['mobile'];
    
    $sql="SELECT * FROM guest_infos WHERE mobile='$mobile' LIMIT 1";
    $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
   while($row = mysqli_fetch_array($result)){
  $name=$row['guest_name'];
 
?>

<form action="insert-guest.php" method="post" enctype="multipart/form-data">
    <table class="table table-hover">
        <tr>
            <th style="width:35%">Name</th>
            <td style="width:65%"><input type="text" class="form-control" name="guest_name" value="<?php echo $row['guest_name']; ?>"></td>
        </tr>
        <tr>
            <th>Mobile Number </th>
            <td><input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>" readonly></td>
        </tr>
           <tr>
            <th>Father's/Husband Name </th>
            <td><input type="text" class="form-control" name="guest_father" value="<?php echo $row['guest_father']; ?>"></td>
        </tr>
           <tr>
            <th>Home Address</th>
            <td><input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>"></td>
        </tr>
           <tr>
            <th>Age</th>
            <td><input type="number" class="form-control" name="age" value="<?php echo $row['age']; ?>"></td>
        </tr>
           <tr>
            <th>Nationality</th>
            <td><input type="text" class="form-control" name="nationality" value="<?php echo $row['nationality']; ?>"></td>
        </tr>
           <tr>
            <th>Profession</th>
            <td><input type="text" class="form-control" name="profession" value="<?php echo $row['profession']; ?>"></td>
        </tr>
           <tr>
            <th>Office/Company Name</th>
            <td><input type="text" class="form-control" name="company" value="<?php echo $row['company']; ?>"></td>
        </tr>
           <tr>
            <th>Coming From</th>
            <td><input type="text" class="form-control" name="coming_from" value="<?php echo $row['coming_from']; ?>"></td>
        </tr>
           <tr>
            <th>Duration of Stay</th>
            <td><input type="text" class="form-control" name="duration" value="<?php echo $row['duration']; ?>"></td>
        </tr>
           <tr>
            <th>Purpose of Visit</th>
            <td>
            <select class="form-control" name="purpose" id="purpose">
                    <option value="<?php echo $row['purpose']; ?>">"><?php echo $row['purpose']; ?>"></option>
                    <option value="Tourism">Tourism</option>
                    <option value="Official">Official</option>
                    <option value="Company">Company</option>
                    <option value="Business">Business</option>
                    <option value="Another">Another</option>
                </select>
            </td>
        </tr>
<!--
           <tr>
            <th>Check in Date &amp; Time</th>
            <td><input type="text" class="form-control" name="check_in" ></td>
        </tr>
           <tr>
            <th>Check out Date &amp; Time</th>
            <td><input type="date" class="form-control" name="check_out"></td>
        </tr>
-->
           <tr>
            <th>Passport No</th>
            <td><input type="text" class="form-control" name="passportno" value="<?php echo $row['passportno']; ?>"></td>
        </tr>
           <tr>
            <th>Visa No</th>
            <td><input type="text" class="form-control" name="visano" value="<?php echo $row['visano']; ?>"></td>
        </tr>
           <tr>
            <th>Place &amp; Date of Issue</th>
            <td><input type="text" class="form-control" name="issue" value="<?php echo $row['issue']; ?>"></td>
        </tr>
           <tr>
            <th>Date of Entry in Bangladesh</th>
            <td><input type="date" class="form-control" name="entrybd" value="<?php echo $row['entrybd']; ?>"></td>
        </tr>   
           
        <tr>
            <th>Roomno</th>
            <td><input type="text" class="form-control" name="roomno" value="<?php echo $_POST['roomno']; ?>"></td>
        </tr>
       <tr>
           <td>&nbsp;</td>
           <td><input type="submit" style="width:300px; float:right" class="btn btn-success" name="submit" value="Save"></td>
       </tr>
        
    </table>
</form> 
 
  
<?php
       
       }
} else { ?>

 <form action="insert-guest.php" method="post" enctype="multipart/form-data">
    <table class="table table-hover">
        <tr>
            <th style="width:35%">Name </th>
            <td style="width:65%"><input type="text" class="form-control" name="guest_name"></td>
        </tr>
        
        <tr>
            <th>Mobile Number </th>
            <td><input type="text" class="form-control" name="mobile" value="<?php echo $_POST['mobile']; ?>" readonly></td>
        </tr>
        <tr>
            <th>Father's/Husband Name </th>
            <td><input type="text" class="form-control" name="guest_father"></td>
        </tr>
           <tr>
            <th>Home Address</th>
            <td><input type="text" class="form-control" name="address"></td>
        </tr>
           <tr>
            <th>Age</th>
            <td><input type="number" class="form-control" name="age"></td>
        </tr>
           <tr>
            <th>Nationality</th>
            <td><input type="text" class="form-control" name="nationality"></td>
        </tr>
           <tr>
            <th>Profession</th>
            <td><input type="text" class="form-control" name="profession"></td>
        </tr>
           <tr>
            <th>Office/Company Name</th>
            <td><input type="text" class="form-control" name="company"></td>
        </tr>
           <tr>
            <th>Coming From</th>
            <td><input type="text" class="form-control" name="coming_from"></td>
        </tr>
           <tr>
            <th>Duration of Stay</th>
            <td><input type="text" class="form-control" name="duration"></td>
        </tr>
           <tr>
            <th>Purpose of Visit</th>
            <td>
                <select class="form-control" name="purpose" id="purpose">
                    <option value="Tourism">Tourism</option>
                    <option value="Official">Official</option>
                    <option value="Company">Company</option>
                    <option value="Business">Business</option>
                    <option value="Another">Another</option>
                </select>
            </td>
        </tr>
<!--
           <tr>
            <th>Check in Date &amp; Time</th>
            <td><input type="text" class="form-control" name="check_in"></td>
        </tr>
           <tr>
            <th>Check out Date &amp; Time</th>
            <td><input type="date" style="width:50%px;" class="form-control" name="check_out"></td>
        </tr>
-->
           <tr>
            <th>Passport No</th>
            <td><input type="text" class="form-control" name="passportno"></td>
        </tr>
           <tr>
            <th>Visa No</th>
            <td><input type="text" class="form-control" name="visano"></td>
        </tr>
           <tr>
            <th>Place &amp; Date of Issue</th>
            <td><input type="text" class="form-control" name="issue"></td>
        </tr>
         <tr>
            <th>Date of Entry in Bangladesh</th>
            <td><input type="date" class="form-control" name="entrybd"></td>
        </tr>
         <tr>
            <th>Roomno</th>
            <td><input type="text" class="form-control" name="roomno" value="<?php echo $_POST['roomno']; ?>"></td>
        </tr>
       <tr>
           <td>&nbsp;</td>
           <td><input type="submit" style="width:300px; float:right" class="btn btn-success" name="submit" value="Save"></td>
       </tr>
        
        
        
    </table>
</form>   
    
<?php
}
}
    echo "</div>";
include('footer.php');
?>
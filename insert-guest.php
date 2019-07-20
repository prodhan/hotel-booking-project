<?php
include('header.php');

if(isset($_POST['submit'])){
include('connection.php');

$guest_name=$_POST['guest_name'];
$guest_father=$_POST['guest_father'];
$address=$_POST['address'];
$age=$_POST['age'];
$nationality=$_POST['nationality'];
$profession=$_POST['profession'];
$company=$_POST['company'];
$coming_from=$_POST['coming_from'];
$duration=$_POST['duration'];
$purpose=$_POST['purpose'];
//$check_in=$_POST['check_in'];
//$check_out=$_POST['check_out'];
$passportno=$_POST['passportno'];
$visano=$_POST['visano'];
$issue=$_POST['issue'];
$entrybd=$_POST['entrybd'];
$mobile=$_POST['mobile'];
$roomno=$_POST['roomno'];

$sql="INSERT INTO guest_infos (guest_name, guest_father, address, age, nationality, profession, company, coming_from, duration, purpose, mobile, passportno, visano, issue, entrybd) VALUES ('$guest_name', '$guest_father', '$address', '$age', '$nationality', '$profession', '$company', '$coming_from', '$duration', '$purpose', '$mobile', '$passportno', '$visano', '$issue', '$entrybd') ON DUPLICATE KEY UPDATE guest_name='$guest_name', guest_father='$guest_father', address='$address', age='$age', nationality='$nationality', profession='$profession', company='$company', coming_from='$coming_from', duration='$duration', purpose='$purpose', passportno='$passportno', visano='$visano', issue='$issue', entrybd='$entrybd';";
    
$sql .="UPDATE rooms SET guest_id='$mobile', status=1 WHERE roomno='$roomno'";

if(mysqli_multi_query($conn, $sql)){
    echo "New guest has been registered!";
}

else
    echo "Eror";
}
include('footer.php');
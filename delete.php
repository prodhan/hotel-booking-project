<?php

include('header.php');
include('connection.php');
$item=$_GET['i'];
$id=$_GET['id'];

if($item=='room'){
    $sql="DELETE FROM rooms WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
       echo "<br><div class='alert alert-danger'>";
  		 echo "Item has been Deleted!";
    	echo "</div></div>";
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sql. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}

mysqli_close($conn);
}

if($item=='food'){
    $sql="DELETE FROM foods WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
       echo "<br><div class='alert alert-danger'>";
  		 echo "Item has been Deleted!";
    	echo "</div></div>";
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sql. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}

mysqli_close($conn);
}


if($item=='bazar'){
    $sql="DELETE FROM bazars WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
       echo "<br><div class='alert alert-danger'>";
  		 echo "Item has been Deleted!";
    	echo "</div></div>";
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sql. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}

mysqli_close($conn);
}

if($item=='cat'){
    $sql="DELETE FROM room_category WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
       echo "<br><div class='alert alert-danger'>";
  		 echo "Category has been Deleted!";
    	echo "</div></div>";
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sql. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}

mysqli_close($conn);
}

if($item=='bi'){
    $sql="DELETE FROM bazar_items WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
       echo "<br><div class='alert alert-danger'>";
  		 echo "Item has been Deleted!";
    	echo "</div></div>";
} else {
    echo "<div class='alert alert-danger'>";
  		echo "<strong>Error!</strong>" . $sql. "<br>" . mysqli_error($conn) ;
    	echo "</div>";
}

mysqli_close($conn);
}



include('footer.php');
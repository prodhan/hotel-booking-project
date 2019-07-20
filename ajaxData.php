<?php
//Include the database configuration file
include 'connection.php';

if(!empty($_POST["food"])){
    //Fetch all state data
    $food=$_POST['food'];
    $query = mysqli_query($conn, "SELECT * FROM foods WHERE food = '$food'");
    
    //Count total number of rows
   
    //State option list
    if(mysqli_num_rows($query) > 0){
       
        while($row = mysqli_fetch_assoc($query)){ 
            $price= $row['price'];
            $id= $row['id'];
            
            $return_arr[]=array("id"=>$id,
                               "price"=>$price
            
            );
            
        }
    }else{
        $return_arr=0;
    }
    
    echo json_encode($return_arr);
    
}
?>
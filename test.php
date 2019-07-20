<?php
include('header.php');
include('connection.php');

$sql= "SELECT * From foods";
$result = mysqli_query($conn, $sql);
?>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

<input list="foods" type="text" name="food" id="food" >
<datalist id="foods">
   <?php
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option value='".$row['food']."'>";
    }
    }
    ?>


</datalist>

<input type="text" name="price" id="price">
<input type="text" name="price" id="id">



<script type="text/javascript">
$(document).ready(function(){
    $('#food').on('change',function(){
        var food = $(this).val();
        if(food){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                dataType: 'JSON',
                data:'food='+food,
                success:function(response){
                    $('#price').val(response[0].price);
                    $('#id').val(response[0].id);
                   
                }
            }); 
        }else{
          
        }
    });
    
});
</script>

<?php
include('footer.php');
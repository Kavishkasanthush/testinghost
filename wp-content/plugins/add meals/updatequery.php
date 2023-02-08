<?php
    require  'connection.php';
    $updateid= $_POST['updateid'];
    $mealname=$_POST['mealname'];
    $price=$_POST['price'];

    
    // echo $mealname;
    $sql="UPDATE `meals` SET `name`='$mealname',`price`='$price' WHERE `id`='$updateid'";

    $result=mysqli_query($conn,$sql);

    if($result){
        // $row=mysqli_fetch_assoc($result);
        // echo json_encode($row);
    }
    else{
        echo "error";
    }
?>
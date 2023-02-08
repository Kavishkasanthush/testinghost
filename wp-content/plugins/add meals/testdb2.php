<?php
    $deleteid=$_POST['deleteid'];
    require  'connection.php';

    $sql="DELETE FROM `meals` WHERE `id`=$deleteid";

    $result=mysqli_query($conn,$sql);

    if($result){
        echo "meal deleted successfully";
    }
    else{
      echo "no";
    }
?>
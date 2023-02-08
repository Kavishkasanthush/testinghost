<?php
    require  'connection.php';
    $updateid= $_POST['updateid'];

    $sql="SELECT `id`, `name`, `price`, `school_name`, `cata_name` FROM `meals` WHERE `id`='$updateid'";

    $result=mysqli_query($conn,$sql);

    if($result){
        $row=mysqli_fetch_assoc($result);
        echo json_encode($row);
    }
    else{
        echo "error";
    }
?>
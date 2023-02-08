<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "mealprogram";
    $conn= new mysqli($hostName,$userName,$password,$dbName);
    if($conn){
    //    echo "connected";
    }else{
       die(mysqli_error($conn));
    }
   
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $deleteid=$_GET['deleteid'];
        
        require 'connection.php';

        $sql="DELETE FROM `meals` WHERE `id`=$deleteid";

        $result=mysqli_query($conn,$sql);

        if($result){
            header("Location: index.php");  
        }
        else{
            die(mysqli_error($conn));
        }
    ?>
</body>
</html>
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
        $update_id=$_GET['id'];
         $con=mysqli_connect("localhost","root","","test1");
         $sql="UPDATE `news` SET `status`='1' WHERE 'user_id'=$update_id";
         $result=mysqli_query($con,$sql);
         if($result){
            header('Location: http://localhost/testing1/wordpress/wp-admin/admin.php?page=4');
         }
         else{
            die(mysqli_error($con));
         }
    ?>
</body>
</html>
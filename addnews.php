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
        $user_id=$_GET['id'];
         $con=mysqli_connect("localhost","root","","test1");
         $news=$_POST['news'];           
            $sql="SELECT `meta_value` FROM `wp_usermeta` WHERE 'meta_key'='school' and 'user_id'=$user_id";
            $result=mysqli_query($con,$sql);
            if($result){
                $row = mysqli_fetch_assoc($result);
                $school=$row['meta_value'];
                if($school=="blind school"){
                    $school_id=1;
                }
                if($school=="deaf school"){
                    $school_id=2;
                }
                if($school=="jaffna school"){
                    $school_id=3;
                }

                $sql="INSERT INTO `news`(`news`, `school_id` `user_id``) VALUES ('$news','$school_id','$user_id')";

                $result=mysqli_query($con,$sql);
                if($result){
                   
                    header('Location: http://localhost/testing1/wordpress/wp-admin/admin.php?page=4');
                }
                else{
                    die(mysqli_error($con));
                }
            }
            else{
                die(mysqli_error($con));
            }

       
    ?>
</body>
</html>
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

        require  'connection.php';

        $name=$_POST['meal'];
        $price=$_POST['price'];
        $category=$_POST['category'];
        $school=$_POST['school'];

        // echo $name;
        // echo $price;
        // echo $category;
        // echo $school;

        $sql="INSERT INTO `meals`(`name`, `price`,`cata_name`,`school_name`) VALUES ('$name','$price','$category','$school')";

        $result=mysqli_query($conn,$sql);

        if($result){
            // echo "data added successfully";
            // header("Location:index.php");  
        }
        else{
            echo "no";
        }
?>
</body>
</html>
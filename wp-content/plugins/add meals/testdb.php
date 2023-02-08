
    <?php

        // echo "found data:".$_POST['meal']."and".$_POST['price'];
    // echo "content";

        // echo $_POST['category'];
        require  home_url().'/wp-content/plugins/add meals/connection.php';

        $name=$_POST['meal'];
        $price=$_POST['price'];
        $category=$_POST['category'];
        $school=$_POST['school'];

        // echo $name.$price.$category.$school;

        // echo $name;
        // echo $price;
        // echo $category;
        // echo $school;

        $sql="INSERT INTO `meals`(`name`, `price`,`cata_name`,`school_name`) VALUES ('$name','$price','$category','$school')";

        $result=mysqli_query($conn,$sql);

        if($result){
            echo "data added successfully";
        }
        else{
           echo "no";
        }
    ?>

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

        require 'connection.php';
    // echo json_encode($_POST);
        $school=$_POST['school'];
        // echo $school;

        if($school==1){
            $school="Blind";
        }
        elseif($school==2){
            $school="Deaf";
        }
        elseif($school==3){
            $school="Jaffna";
        }

        echo $school;

        // $sql="SELECT `id`, `name`, `price`, `school_name`, `cata_name` FROM `meals` WHERE ";


    ?>
</body>
</html>
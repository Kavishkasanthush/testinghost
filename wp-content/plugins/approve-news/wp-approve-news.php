<?php

/*
Plugin Name: Approve news
Plugin URI: 
Description: 
Author: kavishka
Author URI: https://ideasilo.wordpress.com/
Text Domain: Approve-news
Domain Path: /languages/
Version: 1
*/


function htmlcontent1(){
    $con=mysqli_connect("localhost","root","","test1");
    $user_id = get_current_user_id();
    echo $user_id;
    $sql="SELECT 'meta_value' FROM `wp_usermeta` WHERE user_id=$user_id and meta_key='school'";
    $result=mysqli_query($con,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        echo $row['meta_value'];
    }
    else{
        die(mysqli_error($con));
    }
    if(isset($_POST['approve'])){
        echo "success";
    }

    
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">';
    if($con){
           
        $sql="SELECT * FROM `news`";
        $result=mysqli_query($con,$sql);
        if($result){
            echo ' <table>
            <thead>
                <tr>
                    <th>news</th>
                    <th>option</th>                       
                </tr>
            </thead>
            <tbody>';
            while($row=mysqli_fetch_assoc($result)){
                if($row['school_id']==0 && $row['status']==0){
                    echo '
                    <tr>
                     <td>'.$row['news'].'</td>
                     <td><a class="btn btn-primary" href='.'http://localhost/testingsite/newsapprove.php?id='.$row['id'].'>approve</a>
                     <button type="button" class="btn btn-primary">Reject</button>
                     </td>                
                    </tr>
                    
                    ';
                }             
                        
            }
            echo ' </tbody>
            </table>';
        }
        else{
            die(mysqli_error($con));
        }
    }
    else{
        die(mysqli_error($con));
    }
}




function add_my_news_approve_plugin(){
    add_menu_page(
        "1",
        "Approve news",
        "3",
        "4",
        "htmlcontent1"
    );
}


add_action( 'admin_menu', 'add_my_news_approve_plugin' );

?>

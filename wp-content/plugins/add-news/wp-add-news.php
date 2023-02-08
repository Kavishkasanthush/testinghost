<?php

/*
Plugin Name: Add news
Plugin URI: 
Description: 
Author: kavishka
Author URI: https://ideasilo.wordpress.com/
Text Domain: Add-news
Domain Path: /languages/
Version: 1
*/


function htmlcontent(){
    // $user_id = get_current_user_id();
    // $con=mysqli_connect("localhost","root","","test1");
    // $sql="SELECT `meta_value` FROM `wp_usermeta` WHERE 'meta_key'='school'";
    // $result=mysqli_query($con,$sql);
    // if($result){
    //     $row = mysqli_fetch_assoc($result);
    //     $school=$row['meta_value'];
        
    // }
    // else{
    //     die(mysqli_error($con));
    // }

//     $user_id = get_current_user_id();
//     echo $user_id;
  echo '
  <form action="http://localhost/testing1/wordpress/addnews.php" method="post">
  <label>news/label><br>
  <input type="text" name="news"><br><br>
  <input type="submit" value="Submit">
</form>';

}




function add_my_news_add_plugin(){
    add_menu_page(
        "1",
        "Add news",
        "3",
        "4",
        "htmlcontent"
    );
}


add_action( 'admin_menu', 'add_my_news_add_plugin' );

?>

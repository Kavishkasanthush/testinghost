<?php

/*
Plugin Name: Add meals
Plugin URI: 
Description: 
Author: kavishka
Author URI: https://ideasilo.wordpress.com/
Text Domain: Add-meals
Domain Path: /languages/
Version: 1
*/


function htmlcontent(){
    // require $_SERVER['SERVER_NAME'].'/testing1/wordpress/wp-admin/required/first.php';
    require 'first.php';

    // echo $_SERVER['SERVER_NAME'].'/testing1/wordpress/wp-admin/required/first.php';
   
}




function add_my_meals_add_plugin(){
    add_menu_page(
        "1",
        "Add meals",
        "3",
        "4",
        "htmlcontent"
    );
}


add_action( 'admin_menu', 'add_my_meals_add_plugin' );

?>

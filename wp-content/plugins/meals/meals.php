<?php
/**
 * Plugin Name: Meals Page
 * Plugin URI: https://example.com/meals-page
 * Description: A plugin that creates a custom page in the admin called "Meals".
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL2
 */

 function meals_page_menu() {
    add_menu_page(
      'Meals',
      'Meals',
      'manage_options',
      'meals-page',
      'meals_page_content',
      'dashicons-admin-generic',
      6
    );
  }
  add_action( 'admin_menu', 'meals_page_menu' );



  function meals_page_content() {
    if ( current_user_can( 'delete_others_pages' ) ) {
      echo '<div class="wrap">';
      echo '<h1>Meals Page</h1>';
      echo '<form action="" method="post">';
      echo '<table class="form-table">';
      echo '<tr>';
      echo '<th><label for="meal_name">Meal Name</label></th>';
      echo '<td><input type="text" name="meal_name" id="meal_name" class="regular-text"></td>';
      echo '</tr>';
      echo '<tr>';
      echo '<th><label for="meal_description">Meal Description</label></th>';
      echo '<td><textarea name="meal_description" id="meal_description" rows="5" cols="30"></textarea></td>';
      echo '</tr>';
      echo '</table>';
      echo '<input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">';
    }
    else{
      wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
   
}
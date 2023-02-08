<?php
/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */

if (version_compare(PHP_VERSION, '5.7.0', '<')) {
	require get_template_directory() . '/inc/php-fallback.php';
	return;
}

require get_template_directory() . '/inc/init.php';




function create_news_post_type() {
	register_post_type( 'news',
	  array(
		'labels' => array(
		  'name' => __( 'News' ),
		  'singular_name' => __( 'News' )
		),
		'public' => true,
		'has_archive' => true,
    'taxonomies'=>array('category'),
    'supports'=>array('title','editor','thumbnail'),
	  )
	);
  

  }
  add_action( 'init', 'create_news_post_type' );




// $args=array(
//   'post_type'=>'news',
//   'post_status'=>'publish'
// );

// $news_query=new WP_Query($args);

// if($news_query->have_posts()){
//   while($news_query->have_posts()){
//     $news_query->have_posts();
//   }
// }
// else{
//   echo "Error";
// }


// function remove_category_metabox(){
//   remove_taxonomy_metabox('category','news');
// }

// add_action('admin_menu','remove_category_metabox');


function filter_news($query){

  $user_id=get_current_user_id();
  // $school=get_user_meta($user_id,'schools',true);


  // $schools = array();
  // $realrow=$school['meta_value'];
  // foreach ($school as $item) {
  //     if($item=="b"){
  //         array_push($schools,"blind");
  //     }
  //     if($item=="d"){
  //         array_push($schools,"deaf");
  //     }
  //   }


  $school=get_user_meta($user_id,'school',true);
  if($school=='blind'){
    if(is_admin() && $query->is_main_query()){
      $query->set('category_name','blind');
    }  
  }
  if($school=='deaf'){
    if(is_admin() && $query->is_main_query()){
      $query->set('category_name','deaf');
    }  
  }
  if($school=='jaffna'){
    if(is_admin() && $query->is_main_query()){
      $query->set('category_name','jaffna');
    }  
  }

  // if(is_admin() && $query->is_main_query()){
  //       $query->set('category_name',$schools);
  //     }  
  
}

add_action('pre_get_posts','filter_news');






// function create_Needs_post_type() {
// 	register_post_type( 'needs',
// 	  array(
// 		'labels' => array(
// 		  'name' => __( 'Needs' ),
// 		  'singular_name' => __( 'Need' )
// 		),
// 		'public' => true,
// 		'has_archive' => true,
//     'taxonomies'=>array('category'),
//     'supports'=>array('title','editor','thumbnail'),
// 	  )
// 	);
  

//   }
//   add_action( 'init', 'create_Needs_post_type' );

  // function style_the_news_posts(){
  //   wp_enqueue_style('news',get_template_directory_url().'/css/news.css');
  // }

  // add_action('wp_enqueue_scripts','style_the_news_posts');


  function create_history_post_type() {
    register_post_type( 'history',
      array(
      'labels' => array(
        'name' => __( 'history' ),
        'singular_name' => __( 'history' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies'=>array('category'),
      'supports'=>array('title','editor','thumbnail'),
      )
    );
    
  
    }
    add_action( 'init', 'create_history_post_type' );




    //images custom post type

    

    function create_image_post_type() {
      register_post_type( 'image',
        array(
        'labels' => array(
          'name' => __( 'image' ),
          'singular_name' => __( 'image' )
        ),
        'public' => true,
        'has_archive' => true,
        'taxonomies'=>array('category'),
        'supports'=>array('thumbnail','editor','title'),
        )
      );
      
    
      }
      add_action( 'init', 'create_image_post_type' );



      function create_videos_post_type() {
        register_post_type( 'videos',
          array(
          'labels' => array(
            'name' => __( 'videos' ),
            'singular_name' => __( 'video' )
          ),
          'public' => true,
          'has_archive' => true,
          'taxonomies'=>array('category'),
          'supports'=>array('editor','title'),
          )
        );
        
      
        }
        add_action( 'init', 'create_videos_post_type' );



     




// function my_custom_categories_meta_box() {
//     remove_meta_box( 'categorydiv', 'post', 'side' );
//     add_meta_box( 'my-custom-categories', 'Categories', 'my_custom_categories_meta_box_callback', 'post', 'side', 'default' );
// }
// add_action( 'add_meta_boxes', 'my_custom_categories_meta_box' );

// function my_custom_categories_meta_box_callback( $post ) {
    
//      $user_id=get_current_user_id();

//      $school=get_user_meta($user_id,'school',true);




//     if ( $school=='blind' ) {
//         $args = array(
//             'taxonomy' => 'blind',
//             'hide_empty' => 0,
//             'slug' => 'blind'
//         );
//         $categories = get_categories( $args );
//         foreach ( $categories as $category ) {
//             echo '<input type="checkbox" name="category[]" value="' . $category->term_id . '">' . $category->name . '<br>';
//         }
//     } else if ( $school=='deaf' ) {
//         $args = array(
//             'taxonomy' => 'deaf',
//             'hide_empty' => 0,
//             'slug' => 'deaf'
//         );
//         $categories = get_categories( $args );
//         foreach ( $categories as $category ) {
//             echo '<input type="checkbox" name="category[]" value="' . $category->term_id . '">' . $category->name . '<br>';
//         }
//     }

//     else if ( $school=='jaffna' ) {
//       $args = array(
//           'taxonomy' => 'jaffna',
//           'hide_empty' => 0,
//           'slug' => 'jaffna'
//       );
//       $categories = get_categories( $args );
//       foreach ( $categories as $category ) {
//           echo '<input type="checkbox" name="category[]" value="' . $category->term_id . '">' . $category->name . '<br>';
//       }

//     }

// }
    


// function remove_category_support(){
//   unregister_taxonomy_for_object_type('category', 'news');
//   }
//   add_action('init', 'remove_category_support');
  



// function add_hello_world_to_custom_post_type( $content ) {
//   if ( is_singular( 'news' ) ) {
//       $content .= '<h1>Hello World</h1>';
//   }
//   return $content;
// }
// add_filter( 'the_content', 'add_hello_world_to_custom_post_type' );


// function add_hello_to_custom_post_type() {
//   global $post;
//   if ( 'news' === $post->post_type ) {
//     $categories = get_categories();

//     foreach($categories as $category) {
//       print_r($category);
//     // print_r($categories);
//   }
// }
// }
// add_action( 'post_submitbox_misc_actions', 'add_hello_to_custom_post_type' );


function show_categories_for_user() {


  $user_id=get_current_user_id();

  $school=get_user_meta($user_id,'school',true);


  $categories = get_categories();
  foreach($categories as $category) {
  if($school == 'blind') {
       if($category->name == 'blind') {
              echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
          }
  }
   if($school == 'deaf') {
       if($category->name == 'deaf') {
              echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
          }
  }
   if($school == 'jaffna') {
       if($category->name == 'jaffna') {
              echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
          }
  }
}
}



add_action( 'restrict_manage_posts', 'show_categories_for_user' );



function create_other_post_type() {
	register_post_type( 'other',
	  array(
		'labels' => array(
		  'name' => __( 'other' ),
		  'singular_name' => __( 'other' )
		),
		'public' => true,
		'has_archive' => true,
    'taxonomies'=>array('category'),
    'supports'=>array('title','editor','thumbnail'),
	  )
	);
  

  }
  add_action( 'init', 'create_other_post_type' );



//   function remove_needs_capability_for_contributors() {
//     error_log("remove_needs_capability_for_contributors function is ");
//     $role = get_role( 'contributor' );
//     $role->remove_cap( 'edit_needs' );
//     $role->remove_cap( 'edit_published_needs' );
//     $role->remove_cap( 'delete_needs' );
//     $role->remove_cap( 'delete_published_needs' );
// }
// add_action( 'admin_init', 'remove_needs_capability_for_contributors' );



// function remove_needs_capability_for_contributors() {
//   error_log("remove_needs_capability_for_contributors function is running");
//       $role = get_role( 'contributor' );
//           $role->remove_cap( 'edit_needs' );
//               $role->remove_cap( 'edit_published_needs' );
//                   $role->remove_cap( 'delete_needs' );
//                       $role->remove_cap( 'delete_published_needs' );
//                       }
//                       add_action( 'admin_init', 'remove_needs_capability_for_contributors' );
                      


// function create_secret_post_type() {
//     register_post_type( 'secret',
//             array(
//                         'labels' => array(
//                                         'name' => __( 'Secrets' ),
//                                                         'singular_name' => __( 'Secret' )
//                                                                     ),
//                                                                                 'public' => true,
//                                                                                     'show-ui'=>true,
//                                                                                             'has_archive' => true,
//                                                                                                         'capability_type' => 'page',
//                                                                                                                     'supports' => array( 'title', 'thumbnail', 'comments' )
//                                                                                                                             )
//                                                                                                                                 );
//                                                                                                                                 }
//                                                                                                                                 add_action( 'init', 'create_secret_post_type' );

                                                                                                                                

// function custom_secret_post_type() {
//   $args = array(
//           'capability_type' => 'post',
//                   'capabilities' => array(
//                               'create_posts' => 'do_not_allow',
//                                           'edit_posts' => 'do_not_allow',
//                                                       'delete_posts' => 'do_not_allow',
//                                                                   'edit_others_posts' => 'do_not_allow',
//                                                                               'publish_posts' => 'do_not_allow',
//                                                                                           'read_private_posts' => 'do_not_allow',
//                                                                                                       'edit_post' => 'do_not_allow',
//                                                                                                                   'delete_post' => 'do_not_allow',
//                                                                                                                               'read_post' => 'do_not_allow',
//                                                                                                                                       ),
//                                                                                                                                               'map_meta_cap' => true,
//                                                                                                                                                       'public' => true,
//                                                                                                                                                               'show_ui' => true,
//                                                                                                                                                                   );
//                                                                                                                                                                       register_post_type( 'secret', $args );
//                                                                                                                                                                       }
//                                                                                                                                                                       add_action( 'init', 'custom_secret_post_type' );
                                                                                                                                                                      
                                                                                                                      
                                                                                                                                                          
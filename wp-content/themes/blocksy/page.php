<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blocksy
 */

get_template_part( 'single' );

if(is_page('deaf-school')){
  echo  "<h1 style='text-align:center;'>News for Deaf school</h1>";
  $args=array(
    'post_type'=>'news',
    'post_status'=>'publish',
    'category_name'=>'deaf'
  );   
  $deaf_news=new WP_Query($args);

  if($deaf_news->have_posts()){
    while($deaf_news->have_posts()){
      $deaf_news->the_post();
      ?>
      <h1 style="text-align:center;"><?php 
        the_title();
      ?>
      <?php
        the_post_thumbnail();
      ?>
      </h1>
      <p style="text-align:center;"><?php
        the_content();
      ?></p>
      <?php
    }
  }
}


if(is_page('blind-school')){
  echo  "<h1 style='text-align:center;'>News for Blind school</h1>";
  $args=array(
    'post_type'=>'news',
    'post_status'=>'publish',
    'category_name'=>'blind'
  );   
  $blind_news=new WP_Query($args);

  if($blind_news->have_posts()){
    while($blind_news->have_posts()){
      $blind_news->the_post();
      ?>
      <h1 style="text-align:center;"><?php 
        the_title();
      ?>
       <?php
        the_post_thumbnail();
      ?>
      </h1>
      <p style="text-align:center;"><?php
        the_content();
      ?></p>
      <?php
    }
  }
}


add_filter( 'the_content', 'limit_history_content_on_homepage' );
function limit_history_content_on_homepage( $content ) {
    if ( is_front_page() && get_post_type() == 'history' ) {
            $content = substr( $content, 0, strpos( $content, ' ', strlen( $content ) / 7 ) ) . '...';
                    $content .= ' <a href="' . get_the_permalink() . '">Read More</a>';
                        }
                            return $content;
                            }


if(is_front_page()){
  echo  "<h1 style='text-align:center;'>News for Blind school</h1>";
  $args=array(
    'post_type'=>'news',
    'post_status'=>'publish',
  );   
  $Home_news=new WP_Query($args);

  if($Home_news->have_posts()){
    while($Home_news->have_posts()){
      $Home_news->the_post();
      ?>
      <h1 style="text-align:center;"><?php 
        the_title();
      ?>
       <?php
        the_post_thumbnail();
      ?>
      </h1>
      <p style="text-align:center;"><?php
        the_content();
      ?></p>
       <a href="<?php the_permalink()?>">read more</a>
      <?php
    }
  }

  echo  "<h1 style='text-align:center;'>Needs</h1>";
  $args=array(
    'post_type'=>'needs',
    'post_status'=>'publish',
  );

  $needs=new WP_Query($args);

  if($needs->have_posts()){
    while($needs->have_posts()){
      $needs->the_post();
      ?>
      <!-- <h1 style="text-align:center;"><?php 
        the_title();
      ?> -->
      </h1>
      <p style="text-align:center;"><?php
        the_content();
      ?></p>
      <a href="<?php the_permalink()?>">read more</a>
      <?php
    }
  }


  echo  "<h1 style='text-align:center;'>History</h1>";
  echo  "<h1 style='text-align:center;'>Blind school history</h1>";
  $args=array(
    'post_type'=>'history',
    'post_status'=>'publish',
    'category_name'=>'blind'
  );

  $needs=new WP_Query($args);

  if($needs->have_posts()){
    while($needs->have_posts()){
      $needs->the_post();
      ?>
      <!-- <h1 style="text-align:center;"><?php 
        the_title();
      ?> -->
      </h1>
      <p style="text-align:center;"><?php
        the_content();
      ?></p>
      <a href="<?php the_permalink()?>">read more</a>
      <?php
    }
  }


  echo  "<h1 style='text-align:center;'>Deaf school history</h1>";
  $args=array(
    'post_type'=>'history',
    'post_status'=>'publish',
    'category_name'=>'deaf'
  );

  $needs=new WP_Query($args);

  if($needs->have_posts()){
    while($needs->have_posts()){
      $needs->the_post();
      ?>
      <!-- <h1 style="text-align:center;"><?php 
        the_title();
      ?> -->
      </h1>
      <p style="text-align:center;"><?php
        the_content();
      ?></p>
      <a href="<?php the_permalink()?>">read more</a>
      <?php
    }
  }


  echo  "<h1 style='text-align:center;'>Jaffna school history</h1>";
  $args=array(
    'post_type'=>'history',
    'post_status'=>'publish',
    'category_name'=>'jaffna'
  );

  $needs=new WP_Query($args);

  if($needs->have_posts()){
    while($needs->have_posts()){
      $needs->the_post();
      ?>
      <!-- <h1 style="text-align:center;"><?php 
        the_title();
      ?> -->
      </h1>
      <p style="text-align:center;"><?php
        the_content();
      ?></p>
      <a href="<?php the_permalink()?>">read more</a>
      <?php
    }
  }

  echo '<footer id="footer" class="ct-footer" data-id="type-1" itemscope="" itemtype="https://schema.org/WPFooter"><div data-row="bottom"><div class="ct-container" data-columns-divider="md:sm"><div data-column="copyright">
  <div class="ct-footer-copyright" data-id="copyright">
  
    Copyright © 2023 - WordPress Theme by <a href="https://creativethemes.com">CreativeThemes</a></div>
  </div></div></div></footer>';
}
?>


<?php
  //image gallary

  if(is_page('image-gallary-for-the-blind-school')){
  //  echo "<script>console.log('vwvgwrg');</script>";
   echo  "<h1 style='text-align:center;'>Image gallary for the blind school</h1>";
   $args=array(
     'post_type'=>'image',
     'post_status'=>'publish',
     'category_name'=>'blind'
   );   
   $blindimages=new WP_Query($args);
 
   if($blindimages->have_posts()){
    // $result=$blindimages->have_posts();
    //style
    while($blindimages->have_posts()){
      echo '
      <style>
      * {
        box-sizing: border-box;
      }
      
      body {
        margin: 0;
        font-family: Arial;
      }
      
      /* The grid: Four equal columns that floats next to each other */
      .column {
        float: left;
        width: 25%;
        padding: 10px;
      }
      
      /* Style the images inside the grid */
      .column img {
        opacity: 0.8; 
        cursor: pointer; 
      }
      
      .column img:hover {
        opacity: 1;
      }
      
      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      
      /* The expanding image container */
      .container {
        position: relative;
        display: none;
      }
      
      /* Expanding image text */
      #imgtext {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
        font-size: 20px;
      }
      
      /* Closable button inside the expanded image */
      .closebtn {
        position: absolute;
        top: 10px;
        right: 15px;
        color: white;
        font-size: 35px;
        cursor: pointer;
      }
      </style>
    
      ';
      $blindimages->the_post();
      // echo '<script>console.log('.$result.');</script>';
      // the_post_thumbnail();
      $image_id = get_post_thumbnail_id();
      $image_src = wp_get_attachment_image_src( $image_id, 'full' );
      // echo $image_src[0];
      // $title=the_title();

      // echo '<img src="http://localhost/testing1/wordpress/wp-content/uploads/2023/01/download-1.png"/>';
      echo '
      <div class="row">
        <div class="column">
        <img src="'.$image_src[0].'" alt="Nature" style="width:100%" onclick="myFunction(this);">
      </div>
      </div>
      
      <div class="container">
        <span onclick="this.parentElement.style.display='.'none'.'" class="closebtn">&times;</span>
        <img id="expandedImg" style="width:100%">
        <div id="imgtext"></div>
      </div>
      ';
      //styles

      

    }

    $argsv=array(
      'post_type'=>'videos',
      'post_status'=>'publish',
      'category_name'=>'blind'
    );   
    $blindimages=new WP_Query($argsv);
  
    if($blindimages->have_posts()){
     // $result=$blindimages->have_posts();
     //style
     echo '
      <style>
        iframe{
          width:500px;
          height:400px;
        }
        video{
          width:500px;
          height:400px;
        }
      </style>
     ';
     while($blindimages->have_posts()){
        
      $blindimages->the_post();
    
      the_content();
     

     }}



   }
  }



  if(is_page('testing-gallary-with-slide-show')){
    echo '
      
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>


<h2 style="text-align:center">Slideshow Gallery</h2>

<div class="container">';
$args=array(
  'post_type'=>'image',
  'post_status'=>'publish',
  'category_name'=>'blind'
);   
$blindimages=new WP_Query($args);

if($blindimages->have_posts()){
 // $result=$blindimages->have_posts();
 //style
 while($blindimages->have_posts()){
  $blindimages->the_post();
  $image_id = get_post_thumbnail_id();
  $image_src = wp_get_attachment_image_src( $image_id, 'full' );
echo '
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="'.$image_src[0].'" style="width:100%">
  </div>';
 }
}

 
  echo '


    
  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">';
  $args=array(
    'post_type'=>'image',
    'post_status'=>'publish',
    'category_name'=>'blind'
  );   
  $blindimages=new WP_Query($args);
  
  if($blindimages->have_posts()){
   // $result=$blindimages->have_posts();
   //style
   $i=1;
   while($blindimages->have_posts()){
    $blindimages->the_post();
    
    ob_start();
      the_title();
    $caption = ob_get_clean();

    $image_id = get_post_thumbnail_id();
    $image_src = wp_get_attachment_image_src( $image_id, 'full' );
  echo'
    <div class="column">
      <img class="demo cursor" src="'.$image_src[0].'" onclick="currentSlide('.$i.')" alt="'.$caption.'">
    </div>';
    $i++;
   }

    echo'
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    



    ';
  }
  $args=array(
    'post_type'=>'videos',
    'post_status'=>'publish',
    'category_name'=>'blind'
  );   
  $blindvideos=new WP_Query($args);

  if($blindvideos->have_posts()){
   // $result=$blindimages->have_posts();
   //style
   echo '
    <style>
      iframe{
        width:500px;
        height:400px;
      }
      video{
        width:500px;
        height:400px;
      }
    </style>
   ';
   while($blindvideos->have_posts()){
      
    $blindvideos->the_post();
  
    the_content();
   

   }}
  }


  if(is_page('blind-school')){
    echo  "<h1 style='text-align:center;'>Other content goes here</h1>";
    $args=array(
      'post_type'=>'other',
      'post_status'=>'publish',
    );   
    $Home_news=new WP_Query($args);
  
    if($Home_news->have_posts()){
      while($Home_news->have_posts()){
        $Home_news->the_post();
        ?>
        <h1 style="text-align:center;"><?php 
          the_title();
        ?>
         <?php
          the_post_thumbnail();
        ?>
        </h1>
        <p style="text-align:center;"><?php
          the_content();
        ?></p>
         
        <?php
      }
    }
  }














<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<p id="deleteele"></p>
<?php
    // echo $_POST['school'];

    require  'connection.php';
    
    $school=$_POST['school'];

    
    

    echo '<h1 id="choosen_school">Current meals for '.$school.'</h1>';

    $sql="SELECT `id`, `name`, `price`, `school_name`, `cata_name` FROM `meals` WHERE `school_name`='$school' and `cata_name`='breakfirst'";

    $result=mysqli_query($conn,$sql);

    if($result){
       
    echo '<h2>Breakfirst</h2>';
    echo ' <table>
    <tr>
      <th>Meal</th>
      <th>Price</th>
      <th>option</th>
    </tr>';
        while($row=mysqli_fetch_assoc($result)){
            $deleteid=$row['id'];
            $updateid=$row['id'];
            echo '<tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['price'].'</td>
            <td><button class="update myBtn" id="'.$updateid.'">update</button><button class="delete" id="'.$deleteid.'">delete</button></td>
            </tr>';

        }
        echo ' </table>';
        // echo "done";
    }
    else{
        echo "error";
    }

    $sql="SELECT `id`, `name`, `price`, `school_name`, `cata_name` FROM `meals` WHERE `school_name`='$school' and `cata_name`='lunch'";

    $result=mysqli_query($conn,$sql);

    if($result){
       
    echo '<h2>Lunch</h2>';
    echo ' <table>
    <tr>
      <th>Meal</th>
      <th>Price</th>
      <th>option</th>
    </tr>';
        while($row=mysqli_fetch_assoc($result)){
          $deleteid=$row['id'];
          $updateid=$row['id'];
            // echo $row['name'];
            // echo "<br>";
            // echo $row['price'];
            // echo "<br>";
            // echo $row['school_name'];
            // echo "<br>";
            // echo $row['cata_name'];
            echo '<tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['price'].'</td>
            <td><button class="update myBtn" id="'.$updateid.'">update</button><button class="delete" id="'.$deleteid.'">delete</button></td>
          </tr>';

        }
        echo ' </table>';
        // echo "done";
    }
    else{
        echo "error";
    }




    $sql="SELECT `id`, `name`, `price`, `school_name`, `cata_name` FROM `meals` WHERE `school_name`='$school' and `cata_name`='dessert'";

    $result=mysqli_query($conn,$sql);

    if($result){
       
    echo '<h2>Dessert/Tea</h2>';
    echo ' <table>
    <tr>
      <th>Meal</th>
      <th>Price</th>
      <th>option</th>
    </tr>';
        while($row=mysqli_fetch_assoc($result)){
          $deleteid=$row['id'];
          $updateid=$row['id'];
            // echo $row['name'];
            // echo "<br>";
            // echo $row['price'];
            // echo "<br>";
            // echo $row['school_name'];
            // echo "<br>";
            // echo $row['cata_name'];
            echo '<tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['price'].'</td>
            <td><button class="update myBtn" id="'.$updateid.'">update</button><button class="delete" id="'.$deleteid.'">delete</button></td>
          </tr>';

        }
        echo ' </table>';
        // echo "done";
    }
    else{
        echo "error";
    }

    $sql="SELECT `id`, `name`, `price`, `school_name`, `cata_name` FROM `meals` WHERE `school_name`='$school' and `cata_name`='dinner'";

    $result=mysqli_query($conn,$sql);

    if($result){
        
    echo '<h2>Dinner</h2>';
    echo ' <table>
    <tr>
      <th>Meal</th>
      <th>Price</th>
      <th>option</th>
    </tr>';
        while($row=mysqli_fetch_assoc($result)){
          $deleteid=$row['id'];
          $updateid=$row['id'];
            // echo $row['name'];
            // echo "<br>";
            // echo $row['price'];
            // echo "<br>";
            // echo $row['school_name'];
            // echo "<br>";
            // echo $row['cata_name'];
            echo '<tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['price'].'</td>
            <td><button class="update myBtn" id="'.$updateid.'">update</button><button class="delete" id="'.$deleteid.'">delete</button></td>
          </tr>';

        }
        echo ' </table>';
        // echo "done";
    }
    else{
        echo "error";
    }

//     echo '<script>
//     $(document).ready(function() {
//        $( ".delete" ).click(function() {

//       console.log($(this).attr("id").);
          
//        });
   
// });
//    </script>';
    
?>

<script>
   var base= window.location.origin;
   jQuery(document).ready(function() {
    jQuery( ".delete" ).click(function() {

      console.log(jQuery(this).attr("id"));

    // console.log("thhjrj");
    jQuery.ajax({
            type: "POST",
            url:  base+'/testing1/wordpress/wp-admin/required/testdb2.php',
            data: {
                deleteid:jQuery(this).attr("id"),
            },
            success: function(result){
              
              jQuery('#deleteele').html(result);
                alert("meal deleted successfully");
                window.location.reload();
            }
});
   
    });



    jQuery( ".update" ).click(function() {

            // console.log($(this).attr("id"));


            // console.log("thhjrj");
            jQuery.ajax({
                  type: "POST",
                  url:  base+'/testing1/wordpress/wp-admin/required/testdb3.php',
                  data: {
                      updateid:jQuery(this).attr("id"),
                  },
                  dataType: "json",
                  success: function(result){
                    
                      
                      var updatemeal = document.getElementById("updatemeal");
                      var updateprice = document.getElementById("updateprice");
                      var mealid = document.getElementById("mealid");
                      updatemeal.value=result['name'];
                      updateprice.value=result['price'];
                      mealid.value=result['id'];


                  }
            });

            });
           
          });
          

          var modal = document.getElementById("myModal");
  
          // Get the button that opens the modal
          var btn = document.getElementsByClassName('myBtn');
          
          // Get the <span> element that closes the modal
          var span = document.getElementsByClassName("close")[0];
          
          for(i=0;i<btn.length;i++){
            btn[i].onclick = function() {
            modal.style.display = "block";
          }
          }
          
          // When the user clicks on <span> (x), close the modal
          span.onclick = function() {
            modal.style.display = "none";
          }
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
  
    </script>



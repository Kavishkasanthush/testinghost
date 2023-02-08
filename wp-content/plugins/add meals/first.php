<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
  <style>
    .section{
      /* border: 2px black solid; */
      padding: 20px;
      margin-bottom: 20px;
      margin-top: 20px;
    }
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto auto auto 200px;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.deletebtn{
    display:inline;
}

  </style>
</head>
<body>










  <div class="section">
    <!-- <form action="addmeal.php" method="post"> -->
    <h1>Add a meal</h1>
    Enter the meal<input type="text" name="meal" id="meal"/>
    Enter the price<input type="text" name="price" id="price"/>
    category: 
    <select name="category" id="category">
      <option value="breakfirst">Breakfirst</option>
      <option value="lunch">Lunch</option>
      <option value="dessert">Dessert/tea</option>
      <option value="dinner">Dinner</option>
    </select>
    school
    <select name="school" id="school">
      <option value="blind">blind</option>
      <option value="deaf">Deaf</option>
      <option value="jaffna">Jaffna</option>
    </select>
    <button id="add">Add</button>
    <!-- </form> -->
  </div>





  <div class="section">
    
    <h1>Please choose the school</h1>
    <select id="schoolname">
      <option value="blind">Blind</option>
      <option value="deaf">Deaf</option>
      <option value="jaffna">Jaffna</option>
    </select>
    <button id="ok">ok</button>

    <p id="demo"></p>
</div>
 
  <!-- <div class="section"> -->
    


  <!-- The Modal -->
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <?php
    // if(isset[$_GET['updatesubmit']]){
       
    // }
  ?>
  <div class="modal-content">
    <span class="close">&times;</span>
      <h1>Update a meal</h1>
      meal id <input type="text" id="mealid" readonly><br>
      Enter the meal<input type="text" name="catagory" id="updatemeal"/>
      Enter the price<input type="text" name="catagory" id="updateprice"/>
      <button id="updatethemeal">Update</button>
  </div>

</div>

<script>
   var base= window.location.origin;
  // Get the modal
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

  jQuery(document).ready(function() {
    jQuery( "#add" ).click(function() {
    //  var baseurl =$_SERVER['SERVER_NAME'];
          jQuery.ajax({
            type: "POST",
            url:base+'/testing1/wordpress/wp-admin/required/addmeal.php',
            data: {
                add:"true",
                meal:jQuery('#meal').val(),
                price:jQuery('#price').val(),
                category:jQuery('#category').val(),
                school:jQuery('#school').val()
            },
            success: function(result){
              jQuery('#meal').val(''),
              jQuery('#price').val('')
                 alert("data addd successfully");
                 window.location.reload();
              
            }
});
        });


    });


    jQuery(document).ready(function() {
      jQuery( "#ok" ).click(function() {
        jQuery.ajax({
            type: "POST",
            url:  base+'/testing1/wordpress/wp-admin/required/testdb1.php',
            data: {
                school:jQuery('#schoolname').val()
            },
            success: function(result){
              
              jQuery('#demo').html(result);
            }
});
           
        });




        jQuery( "#updatethemeal" ).click(function() {
            $.ajax({
            type: "POST",
            url: base+'/testing1/wordpress/wp-admin/required/updatequery.php',
            data: {
                // school:$('#schoolname').val()
                updateid:$('#mealid').val(),
                mealname:$('#updatemeal').val(),
                price:$('#updateprice').val(),
            },
            success: function(result){
              
                // $('#demo').html(result);
                // console.log(result);
                // console.log(result);
                // console.log(result);
                alert("data updated successfully");
                window.location.reload();
            }
});

           
        });
    
});

// $(document).ready(function() {
//         $( "#delete" ).click(function() {
// //             $.ajax({
// //             type: "POST",
// //             url: "testdb1.php",
// //             data: {
// //                 school:$('#schoolname').val()
// //             },
// //             success: function(result){
              
// //                 $('#demo').html(result);
// //             }
// // });
// console.log("httgh");
           
//         });


    
// });






  </script>
  
</body>
</html>
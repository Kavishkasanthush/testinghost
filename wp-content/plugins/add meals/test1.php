<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
    .section{
      border: 2px black solid;
      padding: 20px;
      margin-bottom: 20px;
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
  margin: auto;
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
    
    <h1>Please choose the school</h1>
    <select name="school" id="school">
      <option value="blind">Blind</option>
      <option value="deaf">Deaf</option>
      <option value="jaffna">Jaffna</option>
    </select>
    <button id="ok">ok</button>

    <p id="demo"></p>
</div>
    
  <script>

$(document).ready(function() {
        $( "#ok" ).click(function() {
            $.ajax({
            type: "POST",
            url: "testdb1.php",
            data: {
                school:$('#school').val(),
            },
            success: function(result){
                // console.log(result);
                $('#demo').html(result);
            }
});
        });
    });
    
    </script>
</body>
</html>
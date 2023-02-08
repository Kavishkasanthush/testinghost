<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    
  <div class="section">
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

    <p id="demo"></p>
  </div>
  <script>
    // meal=document.getElementById('meal');
    // price=document.getElementById('price');
    // demo=document.getElementById('demo');
    // function loadDoc(){
    //     let postObj = { 
    //         Meal: meal, 
    //         Price:price,
    //             }

    //             // let post = JSON.stringify(postObj)
    //             const url = "testdb.php"
    //             let xhr = new XMLHttpRequest()
    //             xhr.open('POST', url, true)
    //             xhr.send(postObj);
    //             xhr.onload = function (data) {
    //                 // if(xhr.status === 201) {
    //                 //     console.log("Post successfully created!") 
    //                 // }
    //                 demo.innerHTML=data;
    //             }
    // }

    $(document).ready(function() {
        $( "#add" ).click(function() {
            $.ajax({
            type: "POST",
            url: "testdb.php",
            data: {
                meal:$('#meal').val(),
                price:$('#price').val(),
                category:$('#category').val(),
                school:$('#school').val()
            },
            success: function(result){
               $('#demo').html(result);
            }
});
        });
    });
    </script>
</body>
</html>
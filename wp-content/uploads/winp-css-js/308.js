/******* Do not edit this file *******
Woody Code Snippets CSS and JS
Saved: Jan 23 2023 | 06:17:57 */
<script>
function myFunction(imgs) {
          var expandImg = document.getElementById("expandedImg");
          var imgText = document.getElementById("imgtext");
          expandImg.src = imgs.src;
          imgText.innerHTML = imgs.alt;
          expandImg.parentElement.style.display = "block";
        }
        </script>
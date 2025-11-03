<!DOCTYPE html>
<html lang="en">
<?php
$page_title= "Gallery";
include 'includes/header.php';
include 'includes/nav.php';
?>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap');
  .gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  align-content: center;
  object-position: center;
  transition: transform ease-in-out 0.5s;
}
.top-button{
  text-align: center;
  font-size: 25px;
  text-decoration:none;
}
#fullpage {
  display: none;
  position: absolute;
  z-index: 9999;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-size: contain;
  background-repeat: no-repeat no-repeat;
  background-position: center center;
  background-color: black;


}
.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.body{
  font-family: 'Lato', sans-serif;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 25px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 30px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<body>
<h2 class="white underlined margin-left"></h2>

<br>
<!--Back to top-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div class="gallery">

<div class="container" style="max-width:93%;">
  <div class="row">
    <div class="col grow">
   <img src="Image/Gallery10.jpg" class="hover-shadow preview" alt="Toy car on the road." />
    </div>
    <div class="col grow">
    <img src="Image/Gallery9.jpg"  class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery3.jpg" class="img-fluid" alt="Image could not load">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <img src="Image/Gallery2.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery5.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery1.jpg" class="img-fluid" alt="Image could not load">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <img src="Image/Gallery7.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery8.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery6.jpg" class="img-fluid" alt="Image could not load">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <img src="Image/Gallery12.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery13.jpg" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery13.png" class="img-fluid" alt="Image could not load">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <img src="Image/Gallery14.webp" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery11.webp" class="img-fluid" alt="Image could not load">
    </div>
    <div class="col grow">
    <img src="Image/Gallery15.jpg" class="img-fluid" alt="Image could not load">
    </div>
  </div>
    <div class="col"></div>
  </div>
</div>
</div>
<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
<?php
include 'includes/footer.php';
?>

</html>
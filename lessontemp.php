<!-- Call up the header and navbar and set page title-->
<?php
$page_title= "Lessons";
include 'includes/header.php';
include 'includes/nav.php';
?>
<style>
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
<!-- Title image and text -->
<img class="lessonimg" src="image/lessons.jpg" alt="Image could not load">
<h1 class="image-centered title reverse-colour">Lessonname</h1>

<br>
<!-- Description of lesson page -->
<p class=" centered">Lesson descreption</p>

<br>

<p>
lesson
</p>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
</div>


<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>
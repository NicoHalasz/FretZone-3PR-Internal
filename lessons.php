<!-- Call up the header and navbar and set page title-->
<?php
$page_title= "Lessons";
include 'includes/header.php';
include 'includes/nav.php';
?>
<!-- Title image and text -->
<img class="lessonimg" src="image/lessons.jpg" alt="Image could not load">
<h1 class="image-centered title reverse-colour">Lessons</h1>

<br>
<!-- Description of lesson page -->
<p class=" centered">Follow these lessons through to gain a good beginner understanding of how to play the guitar. Keep in mind that you are always able to skip lessons if you already know something or go back if you forgot or need practise. Its always good to practise the thing you just learned inbetween lessons so that you have it really good before learning the next thing.</p>

<!-- Lessons-->
<div class="row row-cols-1 row-cols-md-3 g-4" style="padding:10px;">
  <div class="col">
    <div class="card">
      <img src="image/lesson1.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Getting to know your guitar</h5>
        <p class="card-text">Learn the parts of the guitar and how to hold it properly.</p>
        <a href="lesson1.php" class="btn btn-dark">Go</a>
      </div>
    </div>
  </div>
    <div class="col">
    <div class="card">
      <img src="image/lesson2.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Tuning Your Guitar</h5>
        <p class="card-text">Learn how to tune your guitar so it sounds correct.</p>
        <a href="lesson2.php" class="btn btn-dark">Go</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/lesson3.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Basic Guitar Strumming</h5>
        <p class="card-text">Learn how to strum properly and keep rhythm.</p>
        <a href="lesson3.php" class="btn btn-dark">Go</a>
      </div>
    </div>
  </div>
    <div class="col">
    <div class="card">
      <img src="image/lesson4.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Playing Your First Chords</h5>
        <p class="card-text">Learn 3 basic open chords to start playing songs.</p>
        <a href="lesson4.php" class="btn btn-dark">Go</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/lesson5.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Combining Strumming and Chords</h5>
        <p class="card-text">Learn how to play simple chord progressions with strumming.</p>
        <a href="lesson5.php" class="btn btn-dark">Go</a>
      </div>
    </div>
  </div>
    <div class="col">
    <div class="card">
      <img src="image/lesson6.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Finger Placement and Hand Strength</h5>
        <p class="card-text">Learn exercises to strengthen fingers and improve accuracy.</p>
        <a href="lesson6.php" class="btn btn-dark">Go</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/lesson7.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Reading Simple Guitar Tabs</h5>
        <p class="card-text">Learn to read tablature and play a simple melody.</p>
        <a href="lesson7.php" class="btn btn-dark">Go</a>
      </div>
    </div>
  </div>
    <div class="col">
    <div class="card">
      <img src="image/lesson8.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Introduction to Basic Songs</h5>
        <p class="card-text">Combine chords and strumming to play your first song.</p>
        <a href="lesson8.php" class="btn btn-dark">Go</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/lesson9.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Playing and Practicing Effectively</h5>
        <p class="card-text">Learn strategies to practice efficiently and track progress.</p>
        <a href="lesson9.php" class="btn btn-dark">Go</a>
      </div>
    </div>
  </div>
  
</div>
<script>
<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>
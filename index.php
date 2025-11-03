<!-- Call up the header, navbar, and carousel-->
<?php
$page_title= "Home";
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/carousel.php';
?>
<h2 class="white centered bg-dark">  

The best website for beginner guitar players


<br>


</h2> <!-- Header -->




<!-- Cards -->
<div class="row row-cols-1 row-cols-md-2 g-4">
  <!-- Music page card -->
  <div class="col">
    <div class="card text-bg-dark mb-3">
      <img src="image/card1.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body bg-dark">
        <h5 class="card-title">First Lessons</h5>
        <p class="card-text">Brand new to guitar? Dive straight into your first lesson here starting of with the basics before moving into the more fun stuff.</p>
        <a href="music.php" class="btn btn-light">Lesson 1</a>
      </div>
    </div>
  </div>
  <!-- Fashion page card -->
  <div class="col">
    <div class="card text-bg-dark mb-3">
      <img src="image/card2.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body bg-dark">
        <h5 class="card-title">Lessons</h5>
        <p class="card-text">Already know how a bit? Dont waste time re-learning old stuff, go to the lessons list to find the perfect place for you to start.</p>
        <a href="yeezy.php" class="btn btn-light">Lessons Page</a>
      </div>
    </div>
  </div>
  <!-- Timeline page card -->
  <div class="col">
    <div class="card text-bg-dark mb-3">
      <img src="image/card3.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body bg-dark">
        <h5 class="card-title">Players</h5>
        <p class="card-text">If you ever need motivation to keep going take a look at some of these players. These guys are the best of the best and are sure to encourage you to keep learning.</p>
        <a href="timeline.php" class="btn btn-light">Players Page</a>
      </div>
    </div>
  </div>
  <!-- Gallery page card -->
  <div class="col">
    <div class="card text-bg-dark mb-3">
      <img src="image/card4.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body bg-dark">
        <h5 class="card-title">Guitars</h5>
        <p class="card-text">Dont have a guitar? look here to find your favorite instrument to get you started on your guitar playing journey.</p>
        <a href="gallery.php" class="btn btn-light">Guitars Page</a>
      </div>
    </div>
  </div>
</div>
<br>



<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>
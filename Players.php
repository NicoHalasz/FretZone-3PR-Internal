<!-- Call up the header and navbar-->
<?php
$page_title= "Music";
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
<div style="position: absolute; z-index: -99; width: 100%; height: 760px">
  <iframe
    frameborder="0"
    height="100%"
    width="100%"
    src="https://youtube.com/embed/_ABk7TmjnVk?mute=1&autoplay=1&controls=0&showinfo=0&autohide=1&loop=1"
  >
  </iframe>
</div>

<div class="video-content">
  <h1 class="white">Kanye West: A Trailblazer in Musical Innovation</h1>
  <p class="white">In the vast realm of contemporary music, there exists an artist whose name has become synonymous with boundary-pushing innovation and unapologetic artistry: Kanye West. With a career spanning decades, West has continually defied expectations and carved his own path, leaving an indelible mark on the sonic landscape. From his early days as a producer to his meteoric rise as a solo artist, his journey has been a transformative odyssey that redefines the very essence of musical expression.</p>
  
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--Back to top-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div class="container" style="max-width:93%;">
  <div class="row">
    <div class="col grow">
    <a href="TCD.php"><img src="image/TCDcover.webp" class="img-fluid" alt="Image could not load"></a>
    </div>
    <div class="col grow">
    <a href="LR.php"><img src="image/LRcover.jpg" class="img-fluid" alt="Image could not load"></a>
    </div>
    <div class="col grow">
    <a href="Graduation.php"><img src="image/GraduationCover.jpg" class="img-fluid" alt="Image could not load"></a>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <a href="heartbreak.php"><img src="image/808sCover.jpeg" class="img-fluid" alt="Image could not load"></a>
    </div>
    <div class="col grow">
    <a href="MBDTF.php"><img src="image/MBDTFcover.jpeg" class="img-fluid" alt="Image could not load"></a>
    </div>
    <div class="col grow">
    <a href="WTT.php"><img src="image/WTTcover.jpeg" class="img-fluid" alt="Image could not load"></a>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <a href="KWPGMCS.php"><img src="image/KWPGMCScover.jpeg" class="img-fluid" alt="Image could not load"></a>
    </div>
    <div class="col grow">
    <a href="yeezus.php"><img src="image/YeezusCover.jpeg" class="img-fluid" alt="Image could not load"></a>
    </div>
    <div class="col grow">
    <a href="TLOP.php"><img src="image/TLOPcover.jpeg" class="img-fluid" alt="Image could not load"></a>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <a href="Ye.php"><img src="image/YeCover.jpeg" class="img-fluid" alt="Image could not load"></a>
    </div>
    <div class="col grow">
    <a href="KSG.php"><img src="image/KSGcover.jpeg" class="img-fluid" alt="Image could not load"></a>
    </div>
    <div class="col grow">
    <a href="JIK.php"><img src="image/JIKcover.jpeg" class="img-fluid" alt="Image could not load"></a>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col grow">
    <a href="Donda.php"><img src="image/DondaCover.jpeg" class="img-fluid" alt="Image could not load"></a>
    </div>
    <div class="col grow">
    <a href="Donda2.php"><img src="image/Donda2Cover.webp" class="img-fluid" alt="Image could not load"></a>
    </div>
    <div class="col"></div>
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
<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>
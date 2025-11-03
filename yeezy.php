<!-- Call up the header and navbar and set page title-->
<?php
$page_title= "Fashion";
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
<img class="yeezyimg" src="image/Yeezy.jpg" alt="Image could not load">
<h1 class="image-centered title reverse-colour">Yeezy</h1>

<br><br>
<!--Back to top-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<!-- Description of yeezy -->
<p class="white centered">Yeezy is a clothing brand founded by Kanye West in 2015. Known for its unique and innovative designs that blend streetwear with high fashion, Yeezy collaborates with Adidas and other fashion brands to offer a wide range of products, including footwear, apparel, and accessories. The brand has gained a significant following for its distinctive style and aesthetic that reflects West's artistic vision.</p>

<!-- Cards about fashion items-->
<div class="row row-cols-1 row-cols-md-3 g-4" style="padding:10px;">
  <div class="col">
    <div class="card">
      <img src="image/yeezy1.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy Boost 350</h5>
        <p class="card-text">The Yeezy Boost 350 is a popular sneaker known for its sleek and minimalist design, Primeknit upper, and full-length Boost midsole. The shoe features distinctive "SPLY-350" branding and is available in various colorways. It has become a staple in sneaker culture and streetwear fashion.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy2.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy Boost 700</h5>
        <p class="card-text">The Yeezy Boost 700 is a highly sought-after sneaker known for its chunky and retro-inspired design, full-length Boost midsole, and unique outsole tread pattern. It's available in various colorways and has gained popularity in both sneaker culture and streetwear fashion.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy3.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy 500</h5>
        <p class="card-text">The Yeezy 500 is a popular chunky sneaker with a minimalist design and a full-length adiPRENE+ midsole, making it a comfortable and supportive shoe. Its unique outsole tread pattern and range of colorways have made it a favorite among sneaker enthusiasts and a staple in streetwear fashion.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy4.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy Foam Runner</h5>
        <p class="card-text">The Yeezy Foam Runner is a highly sought-after slip-on shoe made from sustainable materials, featuring a one-of-a-kind sculpted design. It's lightweight, durable, and available in a variety of eye-catching colors, making it a must-have for both sneaker enthusiasts and fashion-forward individuals.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy5.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy 450</h5>
        <p class="card-text">The Yeezy 450 is a distinctive sneaker designed by Kanye West and Adidas, featuring a stretchy mesh upper, unique lace-up closure, and Boost technology sole. It's available in various monochromatic colorways and has gained popularity among sneaker enthusiasts and fashion-conscious individuals.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy6.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy Slide</h5>
        <p class="card-text">The Yeezy Slide is a minimalist sandal designed by Kanye West in collaboration with Adidas, featuring a one-piece foam construction for comfort and durability. Available in a range of neutral colorways, it's gained popularity for its stylish simplicity and versatility as both an indoor and outdoor option.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy7.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy Calabasas Knit Hoodie</h5>
        <p class="card-text">The Yeezy Calabasas Knit Hoodie is a fashion-forward staple designed by Kanye West, featuring a comfortable, oversized fit, and the iconic Calabasas logo embroidered on the chest. Perfect for layering or wearing on its own, it's a must-have for any Yeezy fan's wardrobe.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy8.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy Season 1 Camo Tee</h5>
        <p class="card-text">The Yeezy Season 1 Camo Tee is a stylish and versatile piece, featuring a unique camo print design and made from high-quality materials that ensure both comfort and durability. With its signature oversized fit and attention to detail, this tee is a must-have for any streetwear enthusiast looking to elevate their wardrobe.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy9.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">"I Feel Like Pablo" Long Sleeve Tee</h5>
        <p class="card-text">The "I Feel Like Pablo" Long Sleeve Tee from Yeezy is a must-have item for fans of Kanye West's music and fashion. The simple but bold design features a graphic print of the phrase "I Feel Like Pablo" on the front, with a comfortable fit and soft fabric that's perfect for everyday wear.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy10.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy Calabasas Track Pants</h5>
        <p class="card-text">The Yeezy Calabasas Track Pants are a fashion-forward yet functional addition to any wardrobe. Made from a comfortable and breathable material, these pants feature a signature tapered leg design and bold branding on the leg, making them a standout piece that's perfect for any occasion.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy11.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy Season 6 Sweatpants</h5>
        <p class="card-text">Yeezy Season 6 Sweatpants are a comfortable and stylish addition to any wardrobe, featuring a relaxed fit, tapered legs, and a drawstring waistband. Made from high-quality materials, these sweatpants are both soft and durable, perfect for lounging or hitting the streets in style.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/yeezy12.jpg" class="card-img-top" alt="Image could not load">
      <div class="card-body">
        <h5 class="card-title">Yeezy Season 5 Calabasas Sweatpants</h5>
        <p class="card-text">The Yeezy Season 5 Calabasas Sweatpants are a stylish. comfortable addition to any streetwear wardrobe, featuring a tapered fit and made from high-quality materials. The Calabasas branding on the leg adds a touch of style, making these sweatpants perfect for both lounging at home and running errands in style.</p>
      </div>
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
<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>
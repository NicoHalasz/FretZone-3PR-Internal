<!-- Call up the header and navbar and set page title-->
<?php
$page_title= "Shop";
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/connection.php';
?>

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/ShopCarousel1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <button type="button" class="btn btn-secondary" href='#Shoes';>Shoes</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/ShopCarousel2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <button type="button" class="btn btn-secondary" href='#tops';>Tops</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/ShopCarousel3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <button type="button" class="btn btn-secondary"href='#Bottoms';>Bottoms</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/ShopCarousel4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <button type="button" class="btn btn-secondary" href='#Music';>Other</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>



<div class="content" id="Shoes">
<h1 class="white centered underlined">Shoes</h1>
<div class="row row-cols-1 row-cols-md-4 g-4"  style="margin:10px;">
<?php
$sql = "SELECT ItemID, Name,Price,Image FROM store_tbl WHERE Category = 'Shoes';";
$result = $conn->query($sql);

$item = mysqli_fetch_all($result);

foreach ($item as $item){
$id=$item[0];
$name=$item[1];
$price=$item[2];
$image=$item[3];

echo '<div class="col">';
echo '<a style="text-decoration:none;" href="product.php?product=' . $id . '">';
echo '<div class="card h-100">';
echo '  <img class="card-img-top" src="image/' . $image . '" alt="Card image cap">';
echo '  <div class="card-body">';
echo '    <h5 class="card-title">' . $name . '</h5>';
echo '    <p class="card-text">$' . $price . '</p>';
echo '  </div>';
echo '</div>';
echo '</a>';
echo '</div>';

}
?>
</div>
<div class="content" id="tops"></div>
<h1 class="white centered underlined">Tops</h1>
<div class="row row-cols-1 row-cols-md-4 g-4"  style="margin:10px;">
<?php
$sql = "SELECT ItemID, Name,Price,Image FROM store_tbl WHERE Category = 'Tops';";
$result = $conn->query($sql);

$item = mysqli_fetch_all($result);

foreach ($item as $item){
$id=$item[0];
$name=$item[1];
$price=$item[2];
$image=$item[3];

echo '<div class="col">';
echo '<a style="text-decoration:none;" href="product.php?product=' . $id . '">';
echo '<div class="card h-100">';
echo '  <img class="card-img-top" src="image/' . $image . '" alt="Card image cap">';
echo '  <div class="card-body">';
echo '    <h5 class="card-title">' . $name . '</h5>';
echo '    <p class="card-text">$' . $price . '</p>';
echo '  </div>';
echo '</div>';
echo '</a>';
echo '</div>';

}
?>
</div>
<div class="content" id="Bottoms"></div>
<h1 class="white centered underlined">Bottoms</h1>
<div class="row row-cols-1 row-cols-md-4 g-4"  style="margin:10px;">
<?php
$sql = "SELECT ItemID, Name,Price,Image FROM store_tbl WHERE Category = 'Bottoms';";
$result = $conn->query($sql);

$item = mysqli_fetch_all($result);

foreach ($item as $item){
$id=$item[0];
$name=$item[1];
$price=$item[2];
$image=$item[3];

echo '<div class="col">';
echo '<a style="text-decoration:none;" href="product.php?product=' . $id . '">';
echo '<div class="card h-100">';
echo '  <img class="card-img-top" src="image/' . $image . '" alt="Card image cap">';
echo '  <div class="card-body">';
echo '    <h5 class="card-title">' . $name . '</h5>';
echo '    <p class="card-text">$' . $price . '</p>';
echo '  </div>';
echo '</div>';
echo '</a>';
echo '</div>';

}
?>
</div>
<div class="content" id="Music"></div>
<h1 class="white centered underlined">Music</h1>
<div class="row row-cols-1 row-cols-md-4 g-4"  style="margin:10px;">
<?php
$sql = "SELECT ItemID, Name,Price,Image FROM store_tbl WHERE Category = 'Music';";
$result = $conn->query($sql);

$item = mysqli_fetch_all($result);

foreach ($item as $item){
$id=$item[0];
$name=$item[1];
$price=$item[2];
$image=$item[3];

echo '<div class="col">';
echo '<a style="text-decoration:none;" href="product.php?product=' . $id . '">';
echo '<div class="card h-100">';
echo '  <img class="card-img-top" src="image/' . $image . '" alt="Card image cap">';
echo '  <div class="card-body">';
echo '    <h5 class="card-title">' . $name . '</h5>';
echo '    <p class="card-text">$' . $price . '</p>';
echo '  </div>';
echo '</div>';
echo '</a>';
echo '</div>';

}
?>
</div>

<h1 class="white centered underlined">Other</h1>
<div class="row row-cols-1 row-cols-md-4 g-4"  style="margin:10px;">
<?php
$sql = "SELECT ItemID, Name,Price,Image FROM store_tbl WHERE Category = 'Other';";
$result = $conn->query($sql);

$item = mysqli_fetch_all($result);

foreach ($item as $item){
$id=$item[0];
$name=$item[1];
$price=$item[2];
$image=$item[3];

echo '<div class="col">';
echo '<a style="text-decoration:none;" href="product.php?product=' . $id . '">';
echo '<div class="card h-100">';
echo '  <img class="card-img-top" src="image/' . $image . '" alt="Card image cap">';
echo '  <div class="card-body">';
echo '    <h5 class="card-title">' . $name . '</h5>';
echo '    <p class="card-text">$' . $price . '</p>';
echo '  </div>';
echo '</div>';
echo '</a>';
echo '</div>';

}
?>
</div>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>

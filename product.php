<!-- Call up the header and navbar and set page title-->
<?php
$page_title= "Product page";
include 'includes/header.php';
include 'includes/nav.php';

include_once('includes/connection.php');

$id = $_GET["product"];

$sql = "SELECT Name, Price, Category, Year, Image, Description FROM store_tbl WHERE ItemID = $id;";
$result = $conn->query($sql);

$info = mysqli_fetch_array($result);

$name = $info[0];
$price = $info[1];
$category = $info[2];
$year = $info[3];
$image = $info[4];
$description = $info[5];



?>
<style>
/* Split the screen in half */
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
  background-color: #111;
}

/* Control the right side */
.right {
  right: 0;
  background-color: grey;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;

}


</style>

<div class="split left">
  <div class="centered">
    <img style="height:300px" src="Image/<?php echo $image; ?>" alt="Image not available">
    <h2 style="color: white;"><?php echo $name; ?></h2>
    <p style="color: white;"><?php echo $category; ?></p>
  </div>
</div>

<div class="split right">
  <div class="centered">
    
    <h2>$<?php echo $price; ?></h2>
    <p><?php echo $description; ?></p>

<a style='font-size:24px; background:black; color:antiquewhite;' href="includes/wishlist_add_inc.php?itemID=<?php echo $_GET["product"] ?>">Wishlist <i class='far fa-heart'></i></a>
  </div>
</div>
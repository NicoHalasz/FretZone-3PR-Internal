<!-- Call up the header and navbar and set page title-->
<?php
session_start();
$page_title= "Wishlist";
include 'includes/header.php';
include 'includes/nav.php';

include_once('includes/connection.php')
?>

<h1 style="color: white;  text-align: center;">Wishlist</h1>
<!-- Cards -->
<div class="row row-cols-1 row-cols-md-2 g-2"  style="margin:10px;">
<?php
if (isset($_SESSION['AdminID'])) {
$AdminID = $_SESSION['AdminID'];
$sql = "SELECT ItemID, ID FROM wishlist_tbl WHERE AdminID = $AdminID;";
$result = $conn->query($sql);

$item = mysqli_fetch_all($result);

foreach ($item as $item){
$itemID = $item[0];
$ID = $item[1];

$sql = "SELECT ItemID, Name,Price,Image FROM store_tbl WHERE ItemID = $itemID;";
$result = $conn->query($sql);

$item = mysqli_fetch_all($result);

foreach ($item as $item){
$productid=$item[0];
$name=$item[1];
$price=$item[2];
$image=$item[3];

echo '<div class="col">';
echo '<div class="card h-100">';
echo '  <img class="card-img-top" src="image/' . $image . '" alt="Card image cap">';
echo '  <div class="card-body">';
echo '    <h5 class="card-title">' . $name . '</h5>';
echo '    <p class="card-text">$' . $price . '</p>';
echo '<a style="text-decoration:none;" href="product.php?product=' . $productid . '">View</a>';
echo '<br>';
echo '<a style="text-decoration:none;" href="includes/wishlist_remove_inc.php?ID=' . $ID . '">Remove</a>';
echo '  </div>';
echo '</div>';
echo '</div>';

}

}

} else {
  echo '<p class="white cenered">Please log in to see your wishlist<?P>';
}
?>
</div>





<?php
include 'includes/footer.php';
?>
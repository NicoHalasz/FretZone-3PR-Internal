<!-- Call up the header and navbar and set page title-->
<?php
$page_title= "Shop";
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/connection.php';
?>
</style>
<!-- Title image and text -->
<img class="yeezyimg" src="image/lessons.jpg" alt="Image could not load">
<h1 class="image-centered title reverse-colour">Lessons</h1>

<?php
$sql = "SELECT ItemID, ItemName, ItemDesc,Itemimg FROM lessons_tbl ;";
$result = $conn->query($sql);

$item = mysqli_fetch_all($result);

foreach ($item as $item){
$id=$item[0];
$name=$item[1];
$descr=$item[2];
$image=$item[3];

echo '<div class="col">';
echo '<a style="text-decoration:none;" href="product.php?product=' . $id . '">';
echo '<div class="card h-100">';
echo '  <img class="card-img-top" src="image/' . $image . '" alt="Card image cap">';
echo '  <div class="card-body">';
echo '    <h5 class="card-title">' . $name . '</h5>';
echo '    <p class="card-text">$' . $descr . '</p>';
echo '  </div>';
echo '</div>';
echo '</a>';
echo '</div>';

}
?>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>

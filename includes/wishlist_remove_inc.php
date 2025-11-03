<?php 

//Calling the connections page
require('connection.php');
//Calling the functions_inc page
require('functions_inc.php');

session_start();    
$ID = $_GET["ID"];

$sql = "DELETE FROM wishlist_tbl WHERE ID = $ID;";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
header("Location: ../wishlist.php");
exit();

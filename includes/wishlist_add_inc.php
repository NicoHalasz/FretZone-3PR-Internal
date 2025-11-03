<?php 

//Calling the connections page
require('connection.php');
//Calling the functions_inc page
require('functions_inc.php');

session_start();    
$itemID = $_GET["itemID"];

    if (isset($_SESSION['AdminID'])) {
        $AdminID = $_SESSION['AdminID'];
    } else {
        header("Location: ../product.php?product=" . $_GET["itemID"]);
    }


    //Validate email
    
    
    /*
    if (emptyInputStoreAdd($name, $price, $category, $year, $image, $description)!== false){
        header("Location: ../store_add.php?error=empty_fields");
        exit();
    }
    if (longname($name)!== false){
        header("Location: ../store_add.php?error=long_name");
        exit();
    }
    if (longprice($price)!== false){
        header("Location: ../store_add.php?error=long_price");
        exit();
    }
    if (longimg($image)!== false){
        header("Location: ../store_add.php?error=long_image");
        exit();
    }
    if (longdesc($description)!== false){
        header("Location: ../store_add.php?error=long_description");
        exit();
    }
    */



addWishlist($conn, $AdminID, $itemID);



?>

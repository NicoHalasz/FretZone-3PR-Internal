<?php 

//Calling the connections page
require('connection.php');
//Calling the functions_inc page
require('functions_inc.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);



    //Validate email
    
    
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

createItem($conn, $name, $price, $category, $year, $image, $description);

} else {
    header("Location: ../store_add.php");
    exit();

}


?>

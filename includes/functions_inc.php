<?php
 
//-------------------Signup Functions-----------



//Function for checking empty text fields
function emptyInputSignup($email,$pwd,$repeat_pwd){
$result = false;


//Check fields are empty using built-in functions
if(empty($email)||empty($pwd)||empty($repeat_pwd))
{
    $result = true;}
else {
    $result = false;
}
return $result;
} 



function invalidEmail($email)
{
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;

    }
    else {
       $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $repeat_pwd)
{
$result=false;
if ($pwd!== $repeat_pwd){
$result= true;
}
else{
    $result = false;
    return $result;
}
}
function longPwd($pwd){
    $result = false;
    $max = 100;
    $len = strlen($pwd);
    if ($len>$max){
        $result = true;

    } else{
        $result = false;
    }
    return $result;
}
function shortPwd($pwd){
    $min = 8;
    $result = false;
    $len = strlen($pwd);
    if ($len < $min){
        $result = true;
    }
    else {
        $result=false;
    }
return $result;
}
// Function for email is in database ? is a placeholder for email address
function emailExists($conn, $email)
{
$sql = "SELECT * FROM admin_tbl WHERE email=?;";
//Intialize prepared statement 
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:../signup.php?error=fail");
}
//If there are no error ,pass the data from the user
//by using  a built in parameter
mysqli_stmt_bind_param($stmt, "s", $email);

/*Execute it use & pass in $stmt parameter We do not want to sign up the user if email exists already in the database using the built in php function */

mysqli_stmt_execute($stmt);

//Grab the data from the database & store it in a variable
//and pass in the $stmt parameter

$resultData = mysqli_stmt_get_result($stmt);

//Check if there is any result data/email using built-in php function
//if there is data/email it will true 
//& stores the result in a variable called $row

if($row = mysqli_fetch_assoc($resultData)){
    return $row;
} else {
    $result = false;
    return $result;
}
// Closed the prepared statement

mysqli_stmt_close($stmt);
}


//Function to create a new user 
// Recieves 3 parameters
function createUser($conn, $email, $pwd){
// Create basic sql statment & stores the result in a variable 
$sql = "INSERT INTO admin_tbl (email, password) VALUES(?,?)";
//Intialiaze prepeared statmen
$stmt = mysqli_stmt_init($conn);




//Check if there are any errors & return error message
//on the signup page

if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location:../signup.php?error=stmt_failed");
    exit();
}
$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPwd);

//Execute the SQL statement and pass the parameter
//We do not want to sign up to the user if ther are any erros
mysqli_stmt_execute($stmt);
//Close the connection
mysqli_stmt_close($stmt);

header("Location:../signup.php");
exit();
}
//Login function to deal with empty fields
// 1 Parameter
function emptyInputLogin($username, $pwd){
if (empty($username)|| empty($pwd)){
    $result = true;

}
else{
    $result = false;
}
return $result;
}


//Login Function
function loginUser($conn, $email, $pwd){
    $emailExists =emailExists($conn,$email);
    
if(($emailExists)===false){
Header ('Location:../login.php?error=wrong_username');
exit();
}





$pwdHashed = $emailExists["Password"];
$checkPwd = password_verify($pwd, $pwdHashed);
if ($checkPwd=== false
){
    Header ('Location:../login.php?error=wrong_password');
    exit();
}
else if($checkPwd === true){
    session_start();
    $_SESSION['AdminID']=$emailExists['AdminID'];   
    $_SESSION['Email']=$emailExists['Email'];   
    $_SESSION['Password']=$emailExists['Password'];   
    $_SESSION['Datereg']=$emailExists['Datereg'];   
    header('Location:../control_panel.php');
    exit();
}
}

// Get AdminID function
function AdminID ($conn, $email) {
    $sql = "SELECT AdminID FROM admin_tbl WHERE Email = $email";
    $result = $conn->query($sql);

    return $result;
}

// Create store item function
function createItem($conn, $name, $price, $category, $year, $image, $description){
    $sql = "INSERT INTO store_tbl (Name, Price, Category, Year, Image, Description) VALUES(?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt, "sdsdss", $name, $price, $category, $year, $image, $description);
    mysqli_stmt_execute($stmt);
    //Close the connection
    mysqli_stmt_close($stmt);

    header("Location: ../store_add.php");
    exit();
}

//Store item error checks

function emptyInputStoreAdd($Name, $Price, $Category, $Year, $Image, $Description){
    $result = false;
    
    
    //Check fields are empty using built-in functions
    if(empty($Name)||empty($Price)||empty($Category)||empty($Year)||empty($Image)||empty($Description))
    {
        $result = true;}
    else {
        $result = false;
    }
    return $result;
    } 

function longname($name){
    $result = false;
    $max = 50;
    $len = strlen($name);
    if ($len>$max){
        $result = true;

    } else{
        $result = false;
    }
    return $result;
}

function longprice($price){
    $result = false;
    $max = 15;
    $len = strlen($price);
    if ($len>$max){
        $result = true;

    } else{
        $result = false;
    }
    return $result;
}

function longimg($image){
    $result = false;
    $max = 500;
    $len = strlen($image);
    if ($len>$max){
        $result = true;

    } else{
        $result = false;
    }
    return $result;
}

function longdesc($description){
    $result = false;
    $max = 500;
    $len = strlen($description);
    if ($len>$max){
        $result = true;

    } else{
        $result = false;
    }
    return $result;
}


// Add to the wishlist
function addWishlist ($conn, $AdminID, $ItemID) {
    $sql = "INSERT INTO wishlist_tbl (AdminID, ItemID) VALUES(?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt, "dd", $AdminID, $ItemID);
    mysqli_stmt_execute($stmt);
    //Close the connection
    mysqli_stmt_close($stmt);

    header("Location: ../wishlist.php");
    exit();
}
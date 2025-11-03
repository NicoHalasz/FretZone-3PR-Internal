<?php

// Declaring Variable
$page_title = "admin_update";

// Calling Header & Nav Page
include 'includes/header.php';
include 'includes/nav.php';



// Calling Connection Page
include_once('includes/connection.php');


//gets the adminID from the admin list page , witch was passed teh ure pramater 
// in a varibel called $admiID this will be unwraped to asses the corrosponding 
// adminID global$_ get varible is used to access the admin id 
$adminID = mysqli_real_escape_string($conn, $_GET['adminID']);

// check if the user got her legitimitle when the updateA_btn id clicked
// the dat awil be stoped in varible

if (isset($_post['update_btn'])){
    $email = mysqli_real_escape_string($conn, $_post['email']);

    //query the database and store the results in a varible 
    $sql_query = "UPDATE admin_tbl SET
                adminID =$ADMINID;
                email= $email
                password= $pwd    
                where adminid= $adminID ";
    if(mysqli_query($conn, $sqil_query)){
        //ERROR MESSAGE IS RETURNED IF THER IS A ERROR 
    }else{
        echo 'error: ' . mysqli_errno($conn);
    }

}
?>

<!-- Start of Content 1 -->
<div class="container">
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
    <H2 style="color: white;">Admin update</H2>

    </div>
    <div class="col-sm-6 pt-5 pb-5">
        <h2 style="color: white;">Sign Up</h2>
            <form class="form-control-lg" action="signup_inc.php" method="POST">
                <div class="form-group row pt-4">
                    <label for="email" class="col-sm-2 col-form-label" style="color: white;">E-mail</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                
                </div>
                <div class="form-group row pt-4">
                    <label for="password" class="col-sm-2 col-form-label" style="color: white;">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="pwd" class="form-control" placeholder="Password">
                    </div>
                </div>
            
                <div class="form-group row pt-5">
                    <div class="col-sm-10">
                        <button type="submit" name="update_btn">Sign up</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-1">

        </div>
    </div>
</div>
<!-- End of Content 1 -->

<!-- Start of Content 2 -->
<div class="container">
    <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-10">

        </div>
        <div class="col-sm-1">

        </div>
    </div>
</div>
<!-- End of Content 2 -->
<!-- Calling Footer Page -->
<?php
include 'includes/footer.php';
?>
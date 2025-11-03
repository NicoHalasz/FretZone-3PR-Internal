<?php 
$page_title= "Signup";
include 'includes/header.php';
include 'includes/nav.php';

//include_once 'includes/protect_admin_pages,php';
include_once('includes/connection.php')
?>
<body>
<div class="container fluid pt-5 pb-5">
    <div class="row">
        <div class="col-sm-3">
        <div class="col-sm-6">
        <h2>
            Sign Up
        </h2>
<?php
if (isset($_GET['error'])) {
if($_GET['error']== "empty_fields"){
    echo '<div class="alert alert-danger" role="alert">
    Fill in all fields
    </div>';
}
if($_GET['error']== "invalid_email"){
    echo '<div class="alert alert-danger" role="alert">
    Invalid email
    </div>';
}
if($_GET['error']== "passwords_does_not_match"){
    echo '<div class="alert alert-danger" role="alert">
    passwords_does_not_match
    </div>';
}
if($_GET['error']== "password_is_too_long"){
    echo '<div class="alert alert-danger" role="alert">
    password_is_too_long maximum 10
    </div>';
}
if($_GET['error']== "password_is_too_short"){
    echo '<div class="alert alert-danger" role="alert">
    password_is_too_short minimum 8
    </div>';
}
if($_GET['error']== "email_is_in_use"){
    echo '<div class="alert alert-danger" role="alert">
    email_is_in_use
    </div>';
}if($_GET['error']== "invalid_email"){
    echo '<div class="alert alert-danger" role="alert">
    Invalid email
    </div>';
}
}
?>
<style>    
.body{
    text-align: center;
    color: white;
}

</style>

        <form class="form-control-lg" action="includes/signup_inc.php" method="POST">
            <div class="form-group row pt-3">
            <label for="email"class="col-sm-2 col-form-label" style="color: white;">E-mail</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-cotnrol" placeholder="Email">
            </div>
            <div class="form-group row pt-4">
            <label for="password"class="col-sm-2 col-form-label" style="color: white;">Password</label>
            <div class="col-sm-10">
                <input type="password" name="pwd" class="form-cotnrol" placeholder="Password">
            </div>
            </div>
            <div class="form-group row pt-4">
            <label for="password"class="col-sm-2 col-form-label" style="color: white;"> Repeat Password</label>
            <div class="col-sm-10">
                <input type="password" name="repeat_pwd" class="form-cotnrol" placeholder="Repeat Password">
            </div>
            </div>
           
            <div class="form-group row pt-5">
           
            <div class="col-sm-10">
                <button type="signup" name="signup_btn" class="form-cotnrol" placeholder="Signup">Signup</button>
            </div>
            </div>
            </div>
        </form>
        </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body> 






<?php
include 'includes/footer.php';
?>
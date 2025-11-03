<?php 

//include_once 'includes/protect_admin_pages,php';
include_once('includes/connection.php');


session_start();
if (isset($_SESSION['AdminID'])) {
    $id = $_SESSION['AdminID'];
    $sql = "SELECT Admin FROM admin_tbl WHERE AdminID = $id;";
    $result = $conn->query($sql);

    if ($result !== false) {
        $row = $result->fetch_assoc(); // Fetch a row from the result set
        if ($row && $row['Admin'] == 1) {
            // Admin exists and has an 'Admin' value equal to 1
            // You can add your logic here
        } else {
            header("Location: index.php");
        }
    } else {
                    header("Location: index.php");
    }
} else {
    header("Location: store.php");
}



$page_title= "Store Add";
include 'includes/header.php';
include 'includes/nav.php';




if (isset($_GET['error'])) {
if($_GET['error']== "empty_fields"){
    echo '<div class="alert alert-danger" role="alert">
    Fill in all fields
    </div>';
}
if($_GET['error']== "long_name"){
    echo '<div class="alert alert-danger" role="alert">
    Name is too long
    </div>';
}
if($_GET['error']== "long_price"){
    echo '<div class="alert alert-danger" role="alert">
    Price is too long
    </div>';
}
if($_GET['error']== "long_image"){
    echo '<div class="alert alert-danger" role="alert">
    Image name is too long
    </div>';
}
if($_GET['error']== "long_description"){
    echo '<div class="alert alert-danger" role="alert">
    Description is too long
    </div>';
}

}
?>

 <div class="centered">
        <form class="form-control-lg" action="includes/store_add_inc.php" method="POST">
            <div class="form-group row pt-3">
            <label for="Name"class="col-sm-2 col-form-label"style="color: white;">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-cotnrol" placeholder="Name">
            </div>
            </div>
            <div class="form-group row pt-4">
            <label for="Price"class="col-sm-2 col-form-label"style="color: white;">Price</label>
            <div class="col-sm-10">
                <input type="float" name="price" class="form-cotnrol" placeholder="Price">
            </div>
            </div>
            <div class="form-group row pt-4">
            <label for="Category"class="col-sm-2 col-form-label"style="color: white;">Category</label>
            <div class="col-sm-10">
            <select class="form-control" name="category" id="exampleFormControlSelect1">
                <option>Shoes</option>
                <option>Tops</option>
                <option>Bottoms</option>
                <option>Music</option>
                <option>Other</option>
            </select>
            </div>
            </div>
            <div class="form-group row pt-4">
            <label for="Year"class="col-sm-2 col-form-label" style="color: white;">Year</label>
            <div class="col-sm-10">
            <select class="form-control" name="year" id="exampleFormControlSelect1">
                <option>2023</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>
                <option>2011</option>
                <option>2010</option>
                <option>2009</option>
            </select>
            </div>
            <div class="form-group row pt-4">
            <label for="Image"class="col-sm-2 col-form-label"style="color: white;">Image</label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-cotnrol" placeholder="Image">
            </div>
            </div>
            <div class="form-group row pt-3">
            <label for="Description"class="col-sm-2 col-form-label"style="color: white;">Description</label>
            <div class="col-sm-10">
                <textarea type="text" name="description" class="form-cotnrol" placeholder="description" style="width:500px; height:300px">
                
                </textarea>
            </div>
            </div>
            <div class="form-group row pt-5">
            <div class="col-sm-10">
                <button type="submit" name="submit_btn" class="form-cotnrol" placeholder="Signup">Submit</button>
            </div>
            </div>
            </div>
        </form>
        </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</div>






<?php
include 'includes/footer.php';
?>
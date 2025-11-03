<?php
//start session 
 session_start();
//Declaring variable
$page_title = "Admin List";

//<!-- Calling header page -->

$page_title = "Admin List";
include 'includes/header.php';
include 'includes/nav.php';

include_once('includes/connection.php');

//Create query
$query = "SELECT * FROM admin_tbl";

//run query in the database using built-in php function 
//Pass 2 parameters
$result = mysqli_query($conn, $query);

//Fetch data from database
$admins = mysqli_fetch_all($result, MYSQLI_ASSOC);


//Fress result from database
mysqli_free_result($result);

//Close connection. Pass in $conn variable
mysqli_close($conn)

?>

<div>
<!-- Start of content 1 -->
<div class="container">
    <div class="row">


        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h2 style="color: white;">Admin List</h2>
            <table class="table">
                <thead>
                <th style="color: white;">ID</th>
                <th style="color: white;">Email</th>
                <th style="color: white;">Password</th>
                <th style="color: white;">Date Registered</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($admins as $admin) : ?>
                    <tr>
                        <!--prints out the data-->
                        <td style="color: white;"><?php echo $admin['AdminID']; ?></td>
                        <td style="color: white;"><?php echo $admin['Email']; ?></td>
                        <td style="color: white;"><?php echo $admin['Password']; ?></td>
                        <td style="color: white;"><?php echo $admin['Datereg']; ?></td>
                        <td style="color: white;"><a href= "admin_update.php?adminID<?php echo $admin['AdminID']; ?>">Modify</td>
                        <td style="color: white;"><a herf= "admin_delete.php?adminID<?php echo $admin['Email']; ?>">Delete</td>
                        </tr>
                        </tbody>
                        <!--close forheadloop -->
                       <?php endforeach; ?>
                        </table>

        </div>
        <div class="col-sm-1">


        </div>
    </div>
</div>
</div>

<!-- Calling footer page -->
<?php
include 'includes/footer.php';
?>
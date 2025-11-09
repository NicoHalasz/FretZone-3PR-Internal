<!-- Call up the header and navbar and set page title-->
<?php
$page_title = "Guitar";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- set the splitscreen -->
<div class="container" style="max-width:100%;">
    <div class="row split">
        <div class="col left" style="background-color:black;"> <!-- left col -->
            <div id="leftM"> <!-- middle section of left col -->

                
<img class="lessonimg" src="image/guitar.jpg" alt="Image could not load">


            </div>
            <div class=leftB > <!-- bottom section of left col -->
            </div>

        </div>
        <!-- right col -->
        <div class="col right" style="background-color:cream;"> 
            <br>
            <br>
            <h3 class="playername">Name</h3> <!-- Name of the guitar -->
            <!-- Description/background of guitar -->
            <p class="playerdesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum soluta eius praesentium amet odio assumenda. Suscipit aut reiciendis reprehenderit ipsum mollitia doloremque, voluptatibus autem officiis accusantium id, dolorum commodi vitae!</p>
            
        </div>
    </div>
</div>

<!-- Call up the footer-->
<?php
include 'includes/footer.php';
?>
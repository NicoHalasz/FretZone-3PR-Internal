<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg bg-dark no-padding z50">
  <div class="container-fluid z50" style="background-color: rgba(0, 0, 0, 0.2);">

  <!-- Logo Image/Home page link -->
  <a href="index.php" title="Home"><img src="image/logo.png" style="width:70px;height:80px;" alt="home"></a>

  <!-- Dropdown menu or when on phones -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Page links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item " >
          <a class="nav-link " href="lessons.php" style=" color:white">Lessons</a>
        </li>
        <li class="nav-item " >
          <a class="nav-link " href="players.php" style=" color:white">Players</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="timeline.php" style="color:white">Guitars</a>
        </li>
          <li  style=" color:white">
          <a>
          <!--<?php       
          echo $_SESSION["Email"];
          ?>-->
          </a>
          </li>
          
        <!--
        <li class="nav-item " >
          <a class="nav-link " href="feedback.php" style=" color:white">Enquire</a>
        </li>
-->
        
     
      </ul>
    </div>
    <!-- Page links on right of nav bar -->

    <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fas fa-user "></i>
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="signup.php">Signup</a></li>
    <li><a class="dropdown-item" href="login.php">Login</a></li>
    <li><a class="dropdown-item" href="admin_list.php">Admin List</a></li>
    <li><a class="dropdown-item" href="control_panel.php">Control Panel</a></li>
 
  </ul>
</div>

 
      
 
      


   


  
</nav>
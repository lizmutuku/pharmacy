<?php
require_once "header.php";

 ?>

<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
          <div class="float-left image">
            <img src="images/user.png" class="rounded-circle" alt="User Image" id="panel-image">
          </div>
          <div>
            <p><?php echo $_SESSION['username']; ?></p>
            <a href="#"><i class="text-success">Online</i></a>
          </div>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">
                  Register
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">
                  Login
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="prescription.php">
                  Enter details
                </a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="order.php">
                  View orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  Logout
                </a>
              </li>


            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
           <h1 class="cover-heading">ONLINE PHARMACY</h1>

    <p class="lead"><strong><b>WELCOME USER!</b></strong></p>
    <p class="lead">  
    </p>
  </main>
     <footer class="mastfoot mt-auto">
    <div class="inner">
      <p><a href="#">ONLINE PHARMACY</a>.</p>
    </div>
  </footer>

     

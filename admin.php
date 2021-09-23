<?php
require_once "header.php";

// dashboard details count
// count users
// $sql = "SELECT count(userId) as users FROM users ORDER BY userId DESC";
// $query = mysqli_query($conn, $sql) or die('Error while processing');
// $users_count = mysqli_fetch_assoc($query);


// // count medicine
// $sql1 = "SELECT count(medicineId) as totalmedicine FROM medicine";
// $query1 = mysqli_query($conn,$sql1) or die('Error while processing');
// $medicine_count = mysqli_fetch_array($query1);

// exchange count here
//  exchange
    // $sql1 = "SELECT COUNT(`ordersexchanged`.`exchangeId`) AS exchange,`orderexchange`.`timeexchanged`,`orderexchanged`.`status`,`order`.`orderName`,`order`.`orderDuration`,`order`.`orderFee`,`user`.`fullName`,`user`.`email`,`user`.`phoneNo` FROM `orderexchanged`,`user`,`order` WHERE `user`.`userId`=`orderexchanged`.`userId` AND `order`.`orderId`=`orderexchanged`.`orderId` ORDER BY `orderexchanged`.`exchangeId` DESC";
    // $query = mysqli_query($conn, $sql2) or die("Error while processing");
    // $count_exchange = mysqli_fetch_assoc($query);
 ?>

<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
          <div class="float-left image">
            <img src="images/user.jpg" class="rounded-circle" alt="User Image" id="panel-image">
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
                <a class="nav-link" href="view-user.php">
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="show.php">
                 Show orders
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
        

      </div>
    </div>

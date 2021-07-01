<?php
    // Start from getting the hader which contains some settings we need
    require_once 'header.php';
$sql = "SELECT count(`user`.`userId`) AS users,`user`,
 `user`.`fullName`,`user`.`email`,`user`.`phoneNo` FROM `user` ORDER BY `user`.`userId` DESC
";
$query = mysqli_query($conn, $sql) or die('Error while processing');
$user_count = mysqli_fetch_assoc($query);


// count orders
$sql = "SELECT count(`order`.`orderId`) AS order FROM `order`";
$query1 = mysqli_query($conn,$sql1) or die('Error while processing');
$orders_count = mysqli_fetch_array($query1);

// exchange count here
 exchange
    $sql1 = "SELECT COUNT(`ordersexchanged`.`exchangeId`) AS exchange,`orderexchange`.`timeexchanged`,`orderexchanged`.`status`,`order`.`orderName`,`order`.`orderDuration`,`order`.`orderFee`,`user`.`fullName`,`user`.`email`,`user`.`phoneNo` FROM `orderexchanged`,`user`,`order` WHERE `user`.`userId`=`orderexchanged`.`userId` AND `order`.`orderId`=`orderexchanged`.`orderId` ORDER BY `orderexchanged`.`exchangeId` DESC";
    $query = mysqli_query($conn, $sql2) or die("Error while processing");
    $count_exchange = mysqli_fetch_assoc($query);
 

    

?>
<html>
    <head>
        <title>Online Pharmacy System | Admin Panel</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
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
                <a class="nav-link" href="users.php">
                  USERS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="order.php">
                  ORDERS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="exchange.php">
                  EXCHANGE ORDERS
                </a>
              </li>

            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card text-white" style="max-width: 18rem;">
          <div class="card-header">Users</div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $users_count['users'];?></h5>
          </div>
        </div>
            </div>
            <div class="col-md-4">
              <div class="card text-white" style="max-width: 18rem;">
          <div class="card-header">Orders</div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $orders_count['orders'];?></h5>
          </div>
        </div>
            </div
            <div class="col-md-4">
              <div class="card text-white" style="max-width: 18rem;">
          <div class="card-header">Exchange orders</div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $exchange_count['orders'];?></h5>
            <h6 class="card-title"></h6>
          </div>
        </div>
            </div>



        </main>
      </div>
    </div>

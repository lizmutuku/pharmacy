
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
                <a class="nav-link" href="view-user.php">
                  View Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="order.php">
                  View Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="exchange.php">
                  Exchange Orders
                </a>
              </li>

            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">User details</h1>
          </div>
          <div class="row">
            <?php 
            //include config file
            //
            require_once "config.php";

            
            $sql="SELECT * FROM users";
            if($result=mysqli_query($conn,$sql)){
                if (mysqli_num_rows($result) > 0) {
                   echo "<table class= 'table table-bordered table-stripped'>";
                   echo "<thead>";
                   echo "<tr>";
                   echo "<th>#</th>";
                   echo "<th>Name</th>";
                   echo "<th>Email</th>";
                   // echo "<th>Password</th>";
                   echo "<th>Gender</th>";
                   echo "<th>Address</th>";
                   echo "<th>PhoneNo.</th>";
                   echo "<th>action</th>";
                   echo "</tr>";
                   echo "</thead>";
                   echo "<tbody>";

                   while ( $row=mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['userId'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    // echo "<td>" . $row['password'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['PhoneNo'] . "</td>";
                    echo "<td>";
                     echo "<a href='pharmacy/crud/retrieve.php?id=".$row['userId'] ."'' title='View record' data-toggle='tooltip'>View</a> &nbsp";
                    echo "<a href='pharmacy\crud\update.php?id=".$row['userId'] ."' title='Update record' data-toggle='tooltip'>Update</a> &nbsp";
                    echo "<a href='crud/delete.php?id=".$row['userId'] ."'' title='Delete record' data-toggle='tooltip'>Delete</a> &nbsp";
                    echo "</td>";
                    echo "</tr>";
                    
                   }
                   echo "</<tbody>";
                   echo "</table>";

                   //free result set
                   mysqli_free_result($result);
               }else{
                echo "<p class='lead'><em>No records were found</em></p>";
               }

            }else{
                echo "Error: could not execute the sql". mysqli_error($conn);

                 }
                 // close db
                 
                 mysqli_close($conn);




             ?>
        </div>
        
    </div>

     </div> 
  </div>
          
            </div>



        </main>
      </div>
    </div>

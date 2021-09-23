
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
                   echo "<th>Telephone</th>";
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
                    echo "<td>" . $row['telephone'] . "</td>";
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

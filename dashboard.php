<?php
require_once "header.php";

// dashboard details count
// count students
// $sql = "SELECT count(`student`.`studentId`) AS students,`student`.`timeRegistered`,
//  `student`.`fullName`,`student`.`regNo`,`student`.`phoneNo` FROM `student` ORDER BY `student`.`studentId` DE
// ";
// $query = mysqli_query($conn, $sql) or die('Error while processing');
// $student_count = mysqli_fetch_assoc($query);


// // count courses
// $sql1 = "SELECT count(`course`.`courseId`) DESC courses FROM `course`";
// $query1 = mysqli_query($conn,$sql1) or die('Error while processing');
// $courses_count = mysqli_fetch_array($query1);

// applications count here
 //applications
//     $sql2 = "SELECT COUNT(`courseapplied`.`appliedId`) AS applications,`courseapplied`.`timeApplied`,`courseapplied`.`status`,`course`.`courseName`,`course`.`courseDuration`,`course`.`courseFee`,`student`.`fullName`,`student`.`regNo`,`student`.`phoneNo` FROM `courseapplied`,`student`,`course` WHERE `student`.`studentId`=`courseapplied`.`studentId` AND `course`.`courseId`=`courseapplied`.`courseId` ORDER BY `courseapplied`.`appliedId` DESC
// ";
//     $query2 = mysqli_query($conn, $sql2) or die("Error while processing");
//     $count_applics = mysqli_fetch_assoc($query2);
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
                <a class="nav-link" href="courses.php">
                  Courses
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  students(coming soon)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                  course application(coming soon)
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
          <div class="card-header">Students(coming soon)</div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $student_count['students'];?></h5>
          </div>
        </div>
            </div>
            <div class="col-md-4">
              <div class="card text-white" style="max-width: 18rem;">
          <div class="card-header">Courses</div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $courses_count['courses'];?></h5>
          </div>
        </div>
            </div
            <div class="col-md-4">
              <div class="card text-white" style="max-width: 18rem;">
          <div class="card-header">Applications(coming soon)</div>
          <div class="card-body">
            <h5 class="card-title"></h5>
          </div>
        </div>
            </div>



        </main>
      </div>
    </div>
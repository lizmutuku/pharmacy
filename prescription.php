<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="icon" type="image/png/ico" href="icons/ePharmacy.ico">
    <title>E-Pharmacy - Upload Prescription</title>
</head>

<body>
    <!-- Header Section -->
    <?php include "header.php" ?>

    <?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "pharmacy";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if(isset($_POST['btn'])) {
            $name = $_FILES['myfile']['name'];
            $type = $_FILES['myfile']['type'];
            $data = file_get_contents($_FILES['myfile']['tmp_name']);
            $category = "prescription";

            $query = "INSERT INTO files (Name, Type, Data, Category) VALUES(?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $null = NULL;
            $stmt->bind_param("ssbs", $name, $type, $null, $category);
            $stmt->send_long_data(2, $data);
            $stmt->execute();
        }

    ?>

    <!-- Priscription Section -->
    <div class="login-section">
        <div class="login-form">
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="myfile"> <br><br>
                <button name="btn"> Upload </button>
            </form>
            
            <?php 
                $query = "SELECT * FROM files";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($id, $name, $type, $data, $category);
                
                echo "<ol>";
                while($stmt->fetch()) {
                    echo "<li><a target='_blank' href='view.php?id=".$id."'>".$name."</a> ".$type."</li><br>";
                }

                
            ?>
            <?php
                
            ?>
        </div>
    </div>







    <!-- Footer Section -->
    <?php include "footer.php" ?>
    
</body>

</html>
<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    
    <!-- Navbar Start -->
    <?php
        include('nav.php');
    ?>
    <!-- Navbar end -->
    <div class="container-fluid bg-light">


        <!-- About Us -->
        <div class="row pt-5 pb-5">
            <div class="col-sm-12">
                <div class="container">
                    <div class="ms-5 me-5">
                        <p class="display-5 text-center text-secondary">About Us</p>
                        <span class="text-secondary about" style="font-size: 26px; text-align: justify;">
                            <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'student_management');
                                $sql = "select PageDescription from about_contact_page WHERE PageType = 'aboutus'";
                                $result = mysqli_query($conn, $sql);                            
                                if(mysqli_num_rows($result) == 1){
                                }
                                $row = mysqli_fetch_array($result);
                                echo $row['PageDescription'];
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start-->
    <?php
        include('footer.php');
    ?>
    <!-- Footer End-->
  
</body>
</html>
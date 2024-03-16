<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System || Student Profile</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <script src="../bootstrap/bootstrap.min.js"></script>
    <script src="../bootstrap/popper.min.js"></script>
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php include_once('includes/student_header.php'); ?>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-sm-2 bg-dark">
                <div class="row">
                    <div class="col-sm-12 bg-dark">
                        <?php include_once('includes/student_aside.php'); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 card_bg bg-light">
                <div class="row m-5">
                    <div class="col-sm-12">
                        <h4 class="float-start">View Notice</h4>
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="studentdb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Notice</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="card table">
                        <table class="table-responsive table-hover table-bordered m-3">
                            
                            <?php

                                $student = $_SESSION['username'];
                                $conn = mysqli_connect('localhost', 'root', '', 'student_management');
                                // $sql = "SELECT * FROM add_students where User_Name = '$student'";

                                $sql = "SELECT add_students.Student_Name, add_students.Email, add_students.Class, add_students.Gender, add_students.Date_of_Birth, 
                                add_students.Student_ID, add_students.Father_Name, add_students.Mother_Name, add_students.Contact_Number, add_students.Alternate_Contact_Number, 
                                add_students.Address, add_students.User_Name, add_students.Password, add_students.Photo, add_students.Admissin_Date, add_class.Class_Name, 
                                add_class.Section from add_students join add_class on add_class.S_No = add_students.Class where User_Name = '$student'";
                                
                                if($result = mysqli_query($conn, $sql)){
                                    if(mysqli_num_rows($result)>0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<table class='table table-bordered table-responsive'>";
                                           
                                            echo "<tr class='table-warning'>";
                                            echo "<th colspan = '4' class='text-center'><h3>Students Details</h3></th>";
                                            echo "</tr>";

                                            echo "<tr class='table-info'>";
                                            echo "<th>Student Name</th>";
                                            echo "<td>" .$row['Student_Name']. "</td>";

                                            echo "<th>Student Email</th>";
                                            echo "<td>" .$row['Email']. "</td>";
                                            echo "</tr>";

                                            echo "<tr class='table-warning'>";
                                            echo "<th>Student Class</th>";
                                            echo "<td>" .$row['Class_Name']."-".$row['Section']. "</td>";

                                            echo "<th>Gender</th>";
                                            echo "<td>" .$row['Gender']. "</td>";
                                            echo "</tr>";

                                            echo "<tr class='table-danger'>";
                                            echo "<th>Date of Birth</th>";
                                            echo "<td>" .$row['Date_of_Birth']. "</td>";

                                            echo "<th>Student ID</th>";
                                            echo "<td>" .$row['Student_ID']. "</td>";
                                            echo "</tr>";

                                            echo "<tr class='table-success'>";
                                            echo "<th>Father Name</th>";
                                            echo "<td>" .$row['Father_Name']. "</td>";

                                            echo "<th>Mother Name</th>";
                                            echo "<td>" .$row['Mother_Name']. "</td>";
                                            echo "</tr>";

                                            echo "<tr class='table-primary'>";
                                            echo "<th>Contact Number</th>";
                                            echo "<td>" .$row['Contact_Number']. "</td>";

                                            echo "<th>Altenate Number</th>";
                                            echo "<td>" .$row['Alternate_Contact_Number']. "</td>";
                                            echo "</tr>";

                                            echo "<tr class='table-progress'>";
                                            echo "<th>Address</th>";
                                            echo "<td>" .$row['Address']. "</td>";

                                            echo "<th>User Name</th>";
                                            echo "<td>" .$row['User_Name']. "</td>";
                                            echo "</tr>";

                                            echo "<tr class='table-info'>";
                                            echo "<th>Profile Pics</th>";
                                            echo "<td><img src=../Images/$row[Photo] class='rounded-circle' width='40px' height='50px'></td>";

                                            echo "<th>Date of Admission</th>";
                                            echo "<td>" .$row['Admissin_Date']. "</td>";
                                            echo "</tr>";

                                            echo "</table>";
                                        }
                                    }
                                    else{
                                        echo "<h4>No Results Found!</h4>";
                                    }
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
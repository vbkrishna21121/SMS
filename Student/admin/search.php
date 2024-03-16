<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <script src="../bootstrap/bootstrap.min.js"></script>
    <script src="../bootstrap/popper.min.js"></script>
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>  
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php include_once('includes/header.php'); ?>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-sm-2 bg-dark">
                <div class="row">
                    <div class="col-sm-12 bg-dark">
                        <?php include_once('includes/aside.php'); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 bg-light">
                <div class="row m-5">
                    <div class="col-sm-12">
                        <h5 class="float-start">Search Student</h5>
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admindb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Search Student</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form class="row g-3" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Search Student:</label>
                                    <input class="form-control" type="text" name="id" placeholder="Search by Student ID">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" name="submit">Search</button>
                                </div>
                            </form>

                            <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'student_management');
                            if(isset($_POST['submit'])){
                                $id = $_POST['id'];
                                // echo $id;
                                echo "<h4>Requested Student Details</h4>";

                                $sql = "select add_students.Student_ID, 
                                        add_students.S_No, 
                                        add_students.Student_Name, 
                                        add_students.Email, 
                                        add_students.Admissin_Date,
                                        add_class.Class_name, 
                                        add_class.Section 
                                        from add_students 
                                        inner join add_class 
                                        on add_class.S_No = add_students.Class 
                                        where add_students.Student_ID='$id' and 
                                        add_students.Deleted = '0'";

                                // $sql = "select * from add_students where Student_ID = '$id' and Deleted = '0'";

                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        $cls= $row['Class_name'];
                                        $sec = $row['Section'];

                                        echo "<table class='table table-bordered table-responsive'>";

                                        echo "<tr>";
                                        echo "<th>Student ID</th>";
                                        echo "<td>" .$row['Student_ID']. "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th>Student Class</th>";
                                        echo "<td>" .$cls."-".$sec. "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th>Student Name</th>";
                                        echo "<td>" .$row['Student_Name']. "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th>Student Email</th>";
                                        echo "<td>" .$row['Email']. "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th>Admissin Date</th>";
                                        echo "<td>" .$row['Admissin_Date']. "</td>";
                                        echo "</tr>";

                                        echo "<tr class='table-light'>";
                                        echo"<td>";echo '<a class="text-decoration-none" href="update_student_details.php?S_No='.$row['S_No'].'">View Details <i class="bi bi-eye"></i></a>';echo "</td>";
                                        echo"<td>";echo '<a class="text-decoration-none" href="delete_students.php?S_No='.$row['S_No'].'">Delete <i class="bi bi-trash3"></i></a>';echo "</td>";
                                        echo "</tr>";

                                        echo "</table>";
                                    }
                                }
                                else{
                                    echo "<h4>No Results Found!</h4>";
                                }
                            }
                            ?>
                            <div class="float-start">
                                <ul class="pagination">
                                    <li><a href="?pageno=1" class="p-2 text-decoration-none">First&gt;</a></li>
                                    <li class="disabled">
                                        <a href="#" class="p-2 text-decoration-none">Prev&gt;</a>
                                    </li>
                                    <li class="disabled">
                                        <a href="#" class="p-2 text-decoration-none">Next&gt;</a>
                                    </li>
                                    <li><a href="?pageno=1" class="p-2 text-decoration-none">Last</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</body>
</html>


    
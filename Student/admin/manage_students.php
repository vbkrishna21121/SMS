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
                        <h5 class="float-start">Manage Students</h5>
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admindb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Manage Students</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="bg-white mt-3">
                            <h5 class="float-start">Manage Students</h5>
                            <p class="float-end"><a href="" class="text-decoration-none text-dark">View all Students</a></p>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-responsive">
                                <tr class="text-center">
                                    <th>S.No</th>
                                    <th>Student ID</th>
                                    <th>Student Class</th>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                    <th>Admissin Date</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'student_management');
                                    $sql = "SELECT add_students.Student_ID, add_students.S_No, add_students.Student_Name, add_students.Email, add_students.Admissin_Date, add_class.Class_Name, add_class.Section from add_students join add_class on add_class.S_No=add_students.Class where add_students.Deleted = '0'";
                                    // SELECT * FROM add_students where Deleted = '0'
                                    // SELECT add_students.Student_ID, add_students.S_No, add_students.Student_Name, add_students.Email, add_students.Admissin_Date, add_class.Class_Name, add_class.Section from add_students join add_class on add_class.ID=tblstudent.StudentClass
                                    if($result = mysqli_query($conn, $sql)){
                                        if(mysqli_num_rows($result)>0){ //3>0
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo "<tr class='primary'>";
                                                echo "<td>" .$row['S_No']. "</td>";
                                                echo "<td>" .$row['Student_ID']. "</td>";
                                                echo "<td>" .$row['Class_Name']."-".$row['Section']. "</td>";
                                                echo "<td>" .$row['Student_Name']. "</td>";
                                                echo "<td>" .$row['Email']. "</td>";
                                                echo "<td>" .$row['Admissin_Date']. "</td>";
                                                echo"<td>"; 
                                                echo '<a href="update_student_details.php?S_No='.$row['S_No'].'"><i class="bi bi-eye"></i></a>';
                                                echo "</td>";
                                                echo"<td>";
                                                echo '<a href="delete_students.php?S_No='.$row['S_No'].'"><i class="bi bi-trash3"></i></a>';
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        }else{
                                            echo "No Data";
                                        }
                                    }else{
                                        echo "Query Wrong";
                                    }
                                ?>
                            </table>
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
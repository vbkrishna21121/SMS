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
                        <table class="table-responsive table-hover table-bordered m-5">
                            <thead class="text-center table-warning">
                                <td colspan="3" class='p-2'>Notice</td>
                            </thead>
                            <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'student_management');
                                // $sql = "SELECT * FROM add_notice";

                                $student = $_SESSION['student_class'];

                                $sql="SELECT add_class.S_No, add_class.Class_name, add_class.Section, add_notice.Notice_Title, 
                                add_notice.Notice_Date, add_notice.ClassId, add_notice.Notice_Message, add_notice.S_No from 
                                add_notice join add_class on add_class.S_No=add_notice.ClassId where add_notice.ClassId = '$student'";

                                if($result = mysqli_query($conn, $sql)){
                                    if(mysqli_num_rows($result)>0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<tr class='table-info'>";
                                            echo "<th class='p-2'>Notice Announced Date</th>";
                                            echo "<td class='p-2'>" .$row['Notice_Date']. "</td>";
                                            echo "</tr>";
                                            echo "<tr class='table-info'>";
                                            echo "<th class='p-2'>Noitice Title</th>";
                                            echo "<td class='p-2'>" .$row['Notice_Title']. "</td>";
                                            echo "</tr>";
                                            echo "<tr class='table-info'>";
                                            echo "<th class='p-2'>Message</th>";
                                            echo "<td class='p-2'>" .$row['Notice_Message']. "</td>";
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
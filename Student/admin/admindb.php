<?php
session_start();
?>

<?php
if(isset($_GET['log'])){
    session_destroy();
    header('location:admin.php');
}
?>

<?php
// Classes count
    $conn = mysqli_connect('localhost', 'root', '', 'student_management');
    $sql = "select * from add_class";
    $result = mysqli_query($conn, $sql);
    $class_count = mysqli_num_rows($result);

// Students Count
    $count = "select * from add_students";
    $res = mysqli_query($conn, $count);
    $student_count = mysqli_num_rows($res);

// Notices Count
    $manage = "select * from add_notice";
    $manag_res = mysqli_query($conn, $manage);
    $notice_count = mysqli_num_rows($manag_res);

// Public Notices Count
    $pnotice_count = "select * from public_notice";
    $public_res = mysqli_query($conn, $pnotice_count);
    $public_count = mysqli_num_rows($public_res);
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
            <div class="col-sm-10 m-0 p-0 bg-light">
                <div class="row m-5">
                    <div class="card">
                        <div class="card-header bg-white mt-3">
                            <p class="float-start">Report Summary</p>
                            <p class="float-end">Updated Report<i class="bi bi-arrow-clockwise ps-2"></i></p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3 border-end">
                                    <div class="float-start">
                                        <p>Total Classes <br> <?php echo $class_count ?><br><a href="manage_class.php" class=" text-decoration text-decoration-none">View Classes</a></p>
                                    </div>
                                    <div class="float-end mt-2 rocket d-flex justify-content-center align-items-center">
                                        <i class="bi bi-rocket-takeoff text-white icon"></i>
                                    </div>
                                </div>
                                <div class="col-sm-3 border-end">
                                    <div class="float-start">
                                        <p>Total Students <br> <?php echo $student_count ?> <br><a href="manage_students.php" class=" text-decoration text-decoration-none">View Students</a></p>
                                    </div>
                                    <div class="float-end mt-2 person d-flex justify-content-center align-items-center">
                                        <i class="bi bi-person text-white icon"></i>
                                    </div>
                                </div>
                                <div class="col-sm-3 border-end">
                                    <div class="float-start">
                                        <p>Total Class Notice <br> <?php echo $notice_count ?> <br><a href="manage_notice.php" class=" text-decoration text-decoration-none">View Notices</a></p>
                                    </div>
                                    <div class="float-end mt-2 file_ear bg-warning d-flex justify-content-center align-items-center">
                                        <i class="bi bi-file-earmark text-white icon"></i>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="float-start">
                                        <p>Total Public Notice <br> <?php echo $public_count ?> <br><a href="manage_public_notice.php" class=" text-decoration text-decoration-none">View Public Notices</a></p>
                                    </div>
                                    <div class="float-end mt-2 file bg-info d-flex justify-content-center align-items-center">
                                        <i class="bi bi-file-earmark text-white icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





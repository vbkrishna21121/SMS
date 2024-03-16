<?php
session_start();
?>

<?php 
$conn = mysqli_connect('localhost', 'root', '', 'student_management');

if(isset($_POST['update'])){
    $pass = $_REQUEST['oldpass'];
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $newpassword = $_POST['newpassword'];

    if($pass == $oldpass){
        if($oldpass != $newpass){
            if($newpass == $newpassword){
                $sql = "UPDATE `add_students` SET `Password`='$newpassword' Where Password = '$pass'";
                $result = mysqli_query($conn, $sql);
                if($result){

                }
                else{
                    echo "connection Error...";
                }
            }
        }
    }
}
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
            <div class="col-sm-10 card_bg">
                <div class="row m-5">
                    <div class="col-sm-12">
                        <h5 class="float-start">Change Password</h5>
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admindb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="bg-white mt-3 text-center">
                            <h5>Change Password</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Old Password</label>
                                    <input class="form-control" type="password" name="oldpass" value="" placeholder="Enter old password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New Password</label>
                                    <input class="form-control" type="password" name="newpass" value="" placeholder="Enter new password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Re-enter New Password</label>
                                    <input class="form-control" type="password" name="newpassword" value="" placeholder="Re-enter new password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" name="update">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
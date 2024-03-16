<?php
session_start();
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');
    $view = "select * from admin_login";
    $result = mysqli_query($conn, $view);
        
    
$row = mysqli_fetch_array($result);
?>

<?php
if(isset($_POST['update'])){
    $serial = $_REQUEST['S_No'];

    $name = $_REQUEST['name'];
    $user = $_REQUEST['user'];
    $mobile = $_REQUEST['mobile'];
    $mail = $_REQUEST['mail'];
    $regdate = $_REQUEST ['regdate'];

    $_SESSION['mail'] = $mail;

    // echo $_SESSION['mail'];

    $sql = "UPDATE `admin_login` SET `Name`='$name', `User_Name`='$user', `Mobile_Number`='$mobile',
    `Email`='$mail', `AdminRegdate`='$regdate'";

    if(mysqli_query($conn, $sql)){
        // echo "Values inserted successfully";
    }else{
        // echo "Error";
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
                        <h5 class="float-start">Admin Profile</h5>
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admindb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="bg-white mt-3 text-center">
                            <h5>Admin Profile</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Admin Name</label>
                                    <input class="form-control" type="text" name="name" value="<?php echo $row['Name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">User Name</label>
                                    <input class="form-control" type="text" name="user" value="<?php echo $row['User_Name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input class="form-control" name="mobile" value="<?php echo $row['Mobile_Number'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="email" name="mail" value="<?php echo $row['Email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Admin Registration Date</label>
                                    <input class="form-control" type="text" name="regdate" value="<?php echo $row['AdminRegdate'] ?>">
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
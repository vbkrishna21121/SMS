
<?php
session_start();
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');

if(isset($_POST['submit'])){
    $type = $_POST['type'];
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $mail = $_POST['mail'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO `about_contact_page`(`PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`) 
            VALUES ('$type','$title','$desc','$mail','$mobile')";

    if(mysqli_query($conn, $sql)){
        // echo "Values inserted successfully";
    }else{
        // echo "error";
    }
}
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
    <link rel="stylesheet" href="dashboard.css">
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
            <div class="col-lg-10 bg-light">
                <div class="row m-5">
                    <div class="col-sm-12">
                        <h5 class="float-start">Pages</h5>
                        <p class="float-end"><a href="admindb.php" class="text-decoration-none">Dashboard </a>/ Admin Profile</p>
                    </div>
                    <div class="card">
                        <div class="bg-white mt-3 text-center">
                            <h5>Admin Profile</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Page Type</label>
                                    <input class="form-control" type="text" name="type">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Page Title</label>
                                    <input class="form-control" type="text" name="title">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Page Description</label>
                                    <input class="form-control" name="description">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="email" name="mail">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Mobile Number</label>
                                    <input class="form-control" type="text" name="mobile">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
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
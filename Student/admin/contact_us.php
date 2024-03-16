<?php
session_start();
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');
    $view = "select * from about_contact_page where PageType = 'contactus'";
    $result = mysqli_query($conn, $view);
        if(mysqli_num_rows($result) == 1){
            
        }
    $row = mysqli_fetch_array($result);
?>


<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');
if(isset($_POST['update'])){

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $mail = $_POST['mail'];
    $mobile = $_POST['mobile'];
    // $message = $_POST['message'];

    $sql = "UPDATE `about_contact_page` SET `PageTitle`='$title',`PageDescription`='$desc',`Email`='$mail',`MobileNumber`='$mobile' WHERE PageType = 'contactus'";

    if(mysqli_query($conn, $sql)){
        // echo "Values inserted successfully";
        header('location:admindb.php');
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
                        <h5 class="float-start">Add Notice</h5>
                        <p class="float-end"><a href="admindb.php" class="text-decoration-none">Dashboard </a>/ Add Notice</p>
                    </div>
                    <div class="card">
                        <div class="bg-white mt-3 text-center">
                            <h5>Add Notice</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Page Title:</label>
                                    <input class="form-control" type="text" name="title" value="<?php echo $row['PageTitle'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Page Description:</label>
                                    <textarea class="form-control" name="desc"><?php echo $row['PageDescription'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email:</label>
                                    <input class="form-control" type="email" name="mail" value="<?php echo $row['Email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Mobile Number:</label>
                                    <input class="form-control" type="integer" name="mobile" value="<?php echo $row['MobileNumber'] ?>">
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


    
<?php 
session_start();
?>

<?php 
include_once('../nav.php');
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
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <div class="row">
        <?php 
            // include_once('includes/header.php');
        ?>
    </div>
    <div class="container-fluid p-5">

        <div class="row text-center d-flex justify-content-evenly">
            <div class="col-lg-3">
                <div class="card text-center">
                    <div class="card-header display-6">
                        <p>Staff</p>
                    </div>
                    <div class="card-body bg-light">
                        <img src="../Images/face8.jpg" class="rounded-circle">
                    </div>
                    <div class="card-footer">
                    <button type="button" class="btn btn-success w-100">Enter</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-center">
                    <div class="card-header display-6">
                        <p>Students</p>
                    </div>
                    <div class="card-body bg-light">
                        <img src="../Images/face8.jpg" class="rounded-circle">
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-success w-100">Enter</button>
                    </div>
                </div>
            </div>
        </div>
   </div>
</body>
</html>

<?php 
include_once('../footer.php');
?>
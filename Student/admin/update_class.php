<?php
session_start();
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');
if(isset($_POST['update'])){
    $serial = $_REQUEST['S_No'];

    $class = $_POST['name'];
    $section = $_POST['section'];

    $sql = "UPDATE `add_class` SET `Class_name`='$class',`Section`='$section' WHERE S_No = '$serial'";

    if(mysqli_query($conn, $sql)){
        // echo "Values inserted successfully";
    }else{
        // echo "Error";
    }
}
?>


<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');
if(isset($_REQUEST['S_No'])){
    $retrieve = $_REQUEST['S_No'];
    $view = "select * from add_class where S_No = $retrieve";
    if($result = mysqli_query($conn, $view)){
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $_SESSION['section'] = $row['Section'];
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
            <div class="col-sm-10 card_bg">
                <div class="row m-5">
                    <div class="col-sm-12">
                        <h5 class="float-start">Update Class</h5>
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admindb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update Class</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="bg-white mt-3 text-center">
                            <h5>Update Class</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Class Name</label>
                                    <input class="form-control" type="text" name="name" value="<?php echo $row['Class_name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Section</label>
                                    <select class="form-control" type="text" name="section" value="<?php echo $row['Section'] ?>">
                                        <option><?php echo $_SESSION['section'] ?></option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                        <option>F</option>
                                    </select>
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
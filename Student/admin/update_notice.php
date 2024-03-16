<?php
session_start();
?>


<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');
if(isset($_REQUEST['S_No'])){
    $retrieve = $_REQUEST['S_No'];
    // $view = "select * from add_notice where S_No = $retrieve";

    $view = "SELECT add_class.S_No, add_class.Class_Name, add_class.Section, add_notice.Notice_Title,
        add_notice.Notice_Date, add_notice.ClassId, add_notice.Notice_Message, add_notice.S_No from
        add_notice join add_class on add_class.S_No=add_notice.ClassId where add_notice.S_No = $retrieve";
    
    if($result = mysqli_query($conn, $view)){
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $_SESSION['class'] = $row['Class_Name']."-".$row['Section'];
        }
    }
}
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');
if(isset($_POST['update'])){
    $serial = $_REQUEST['S_No'];
    $title = $_POST['title'];
    // $notice = $_POST['class'];

    if(empty($_POST['class'])){
        $class = $row['ClassId'];
    }
    else{
        $class = $_POST['class'];
    }

    $message = $_POST['message'];

    $sql = "UPDATE `add_notice` SET `Notice_Title`='$title',`ClassId`='$class', `Notice_Message`='$message' WHERE S_No = '$serial'";

    if(mysqli_query($conn, $sql)){
        // echo "Values inserted successfully";
        header('location:manage_notice.php');
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
                        <h5 class="float-start">Update Notice</h5>
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admindb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update Notice</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="bg-white mt-3 text-center">
                            <h5>Update Notice</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Notice Title</label>
                                    <input class="form-control" type="text" name="title" value="<?php echo $row['Notice_Title'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Notice For</label>
                                    <select class="form-control form-select" name="class">
                                        <option value="<?php echo $row['ClassId']; ?>"><?php echo $_SESSION['class'] ?></option>
                                        <option value="1">10-A</option>
                                        <option value="2">10-B</option>
                                        <option value="3">10-C</option>
                                        <option value="4">11-A</option>
                                        <option value="5">11-B</option>
                                        <option value="6">11-C</option>
                                        <option value="7">11-D</option>
                                        <option value="8">12-A</option>
                                        <option value="9">12-B</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Notice Message</label>
                                    <input class="form-control" type="text" name="message" value="<?php echo $row['Notice_Message'] ?>">
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
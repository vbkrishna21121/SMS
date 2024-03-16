<?php
session_start();
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');

if (isset($_POST['submit'])) {
    $class = $_POST['class'];
    $section = $_POST['section'];

    $sql = "INSERT INTO `add_class`(`Class_name`, `Section`) VALUES ('$class','$section')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Insertion was successful
        $_SESSION['class'] = $class;
        $_SESSION['section'] = $section;
        // echo "Values inserted successfully";
    } else {
        // Insertion failed
        echo "Error: " . mysqli_error($conn);
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
                        <h5 class="float-start">Add Class</h5>
                        <!-- <p class="float-end"><a href="admindb.php" class="text-decoration-none">Dashboard </a>/ Add Class</p> -->
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admindb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Class</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="bg-white mt-3 text-center">
                            <h5>Add Class</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Class Name</label>
                                    <input class="form-control" type="text" name="class">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Section</label>
                                    <select class="form-control" type="text" name="section">
                                        <option>----Select----</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                        <option>F</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" name="submit">Add</button>
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
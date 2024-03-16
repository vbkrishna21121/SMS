<?php
session_start();
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $class = $_POST['class']; 
    $gen = $_POST['gen'];
    $dob = $_POST['dob'];
    $id = $_POST['id'];
    $photo = $_FILES['photo']['name'];
    $tmpname= $_FILES['photo']['tmp_name'];
    $image = "../Images/" .$photo;
    move_uploaded_file($tmpname,$image);
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $mobile = $_POST['mobile'];
    $acmob = $_POST['acmobile'];
    $address = $_POST['address'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $_SESSION['mail'] = $mail;


    $sql = "INSERT INTO `add_students`(`Student_Name`, `Email`, `Class`, `Gender`, `Date_of_Birth`, `Student_ID`, `Photo`, 
    `Father_Name`, `Mother_Name`, `Contact_Number`, `Alternate_Contact_Number`, `Address`, `User_Name`, `Password`) VALUES 
    ('$name','$mail','$class','$gen','$dob','$id','$photo','$father','$mother','$mobile','$acmob','$address','$user','$pass')";

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
                        <h5 class="float-start">Add Students</h5>
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admindb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Students</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="bg-white mt-3 text-center">
                            <h5>Add Students</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Student Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Student Email</label>
                                    <input class="form-control" type="text" name="mail">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Student Class</label>
                                    <select class="form-control form-select" name="class">
                                        <option>----Select----</option>
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
                                    <label class="form-label">Gender</label>
                                    <select class="form-control form-select" name="gen">
                                        <option value="">----Select----</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Date of Birth</label>
                                    <input class="form-control" type="date" name="dob">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Student ID</label>
                                    <input class="form-control" type="text" name="id">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Student Photo</label>
                                    <input class="form-control" type="file" name="photo">
                                </div>

                                <h2>Parents/Guardian's details</h2>

                                <div class="form-group">
                                    <label class="form-label">Father's Name</label>
                                    <input class="form-control" type="text" name="father">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Mother's Name</label>
                                    <input class="form-control" type="text" name="mother">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input class="form-control" type="integer" name="mobile">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alternate Contact Number</label>
                                    <input class="form-control" type="integer" name="acmobile">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input class="form-control" type="text" name="address">
                                </div>

                                <h2>Login details</h2>

                                <div class="form-group">
                                    <label class="form-label">User Name</label>
                                    <input class="form-control" type="text" name="user">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" type="password" name="pass">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <p>Student Management System</p>
            </div>
        </div>
    </div>
</body>
</html>
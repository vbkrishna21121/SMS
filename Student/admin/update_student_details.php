<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'student_management');

if (isset($_REQUEST['S_No'])) {
    $read = $_REQUEST['S_No'];

    // $view = "SELECT * from add_students where S_No = $read";

    $view = "SELECT add_students.Student_Name, add_students.Email, add_students.Class, add_students.Gender,
                add_students.Date_of_Birth, add_students.Student_ID, add_students.Father_Name,
                add_students.Mother_Name, add_students.Contact_Number, add_students.Alternate_Contact_Number,
                add_students.Address, add_students.User_Name, add_students.Password, add_students.Photo,
                add_students.Admissin_Date, add_class.Class_Name, add_class.Section
            FROM add_students
            JOIN add_class ON add_class.S_No = add_students.Class
            WHERE add_students.S_No = $read";

    $result = mysqli_query($conn, $view);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['class'] = $row['Class_Name'] . "-" . $row['Section'];
        $_SESSION['gen'] = $row['Gender'];
    }
}


if (isset($_POST['update'])) {
    $serial = $_REQUEST['S_No'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    

    if(empty($_POST['class'])){
        $class = $row['Class'];
    }
    else{
        $class = $_POST['class'];
    }
    // echo $row['Class'];
    // echo $_POST['class'];
    $gen = $_POST['gen'];
    $dob = $_POST['dob'];
    $id = $_POST['id'];

    if ($_FILES['photo']['name'] == "") {
        $photo = $row['Photo'];
    } else {
        $photo = $_FILES['photo']['name'];
        $tmp_img = $_FILES['photo']['tmp_name'];
        $image = "Images/" . $photo;
        move_uploaded_file($tmp_img, $image);
    }

    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $mobile = $_POST['mobile'];
    $acmob = $_POST['acmobile'];
    $address = $_POST['address'];

    $sql = "UPDATE `add_students` SET 
            `Student_Name`='$name', 
            `Email`='$mail', 
            `Class`='$class', 
            `Gender`='$gen',
            `Date_of_Birth`='$dob',
            `Student_ID`='$id',
            `Photo`='$photo',
            `Father_Name`='$father', 
            `Mother_Name`='$mother',
            `Contact_Number`='$mobile',
            `Alternate_Contact_Number`='$acmob',
            `Address`='$address'
            WHERE S_No = '$serial'";

    if (mysqli_query($conn, $sql)) {
        header('location: manage_students.php');
    } else {
        
        echo "Error: " . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System || Update Students</title>
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
            <div class="col-sm-10 card_bg bg-light">
                <div class="row m-5">
                    <div class="col-sm-12">
                        <h4 class="float-start">Update Students</h4>
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admindb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update Students</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row m-5">
                <div class="card">
                        <div class="bg-white mt-3 text-center">
                            <h5>Update Students</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Student Name</label>
                                    <input class="form-control" type="text" name="name" value="<?php echo $row['Student_Name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Student Email</label>
                                    <input class="form-control" type="text" name="mail" value="<?php echo $row['Email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Student Class</label>
                                    <select class="form-control form-select" name="class" value="">
                                        <option value="<?php $row['Class']; ?>"><?php echo $_SESSION['class'] ?></option>
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
                                    <select class="form-control form-select" name="gen" value="<?php echo $row['Gender'] ?>">
                                        <option value="<?php echo $_SESSION['gen']; ?>"><?php echo $_SESSION['gen']; ?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Date of Birth</label>
                                    <input class="form-control" type="date" name="dob" value="<?php echo $row['Date_of_Birth'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Student ID</label>
                                    <input class="form-control" type="text" name="id" value="<?php echo $row['Student_ID'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Student Photo</label>
                                    <input class="form-control" type="file" name="photo" value="<?php echo $row['Photo'] ?>">
                                    <img src="../Images/<?php echo $row['Photo']; ?>" width="50px" height="70px">
                                </div>

                                <h2>Parents/Guardian's details</h2>

                                <div class="form-group">
                                    <label class="form-label">Father's Name</label>
                                    <input class="form-control" type="text" name="father" value="<?php echo $row['Father_Name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Mother's Name</label>
                                    <input class="form-control" type="text" name="mother" value="<?php echo $row['Mother_Name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input class="form-control" type="integer" name="mobile" value="<?php echo $row['Contact_Number'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alternate Contact Number</label>
                                    <input class="form-control" type="integer" name="acmobile" value="<?php echo $row['Alternate_Contact_Number'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input class="form-control" type="text" name="address" value="<?php echo $row['Address'] ?>">
                                </div>

                                <h2>Login details</h2>

                                <div class="form-group">
                                    <label class="form-label">User Name</label>
                                    <input class="form-control" type="text" name="user" value="<?php echo $row['User_Name'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" type="password" name="pass" value="<?php echo $row['Password'] ?>" readonly>
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














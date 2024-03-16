<?php
session_start();
?>

<?php
// include('nav.php');
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
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid bg-dark text-light mt-5 mb-5 p-5 w-25 rounded">
        <img class="img img-fluid mb-5" src="../Images/logo.svg">
        <h4 >Hello! let's get started</h4>
        <p>Sign in to continue</p>
        <form class="row g-3 pt-3" method="post" name="login">
            <div class="form-group">
                <label class="form-label">User Name:</label>
                <input type="text" class="form-control form-control" placeholder="Enter your username" required="true" name="username">
            </div>
            <div class="form-group">
                <label class="form-label">Password:</label>
                <input type="password" class="form-control form-control" placeholder="Enter your password" name="password" required="true">
            </div>
            <div>
                <div class="form-check">
                    <label class="form-check-label text-muted">
                    <input type="checkbox" id="remember" class="form-check-input" name="remember"><span class="text-light">Keep me signed in </span><i class="input-helper"></i></label>
                </div>
                <div>
                    <a href="forgot-password.php" class="text-light text-decoration-none">Forgot password?</a>
                </div>
            </div>
            <div class="mt-3 m-auto row d-flex justify-content-center">
                <div class="row">
                    <button class="btn btn-success loginbtn" name="login" type="submit">Login</button>
                </div>
                <div class="row mt-3">
                    <button class="btn btn-primary btn-block" name="home" type="submit"><a href="../index.php" class="text-light text-decoration-none">Back Home</a></button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>


<?php
$conn = mysqli_connect('localhost', 'root', '', 'student_management');

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $_SESSION['username'] = $user;
    // echo $_SESSION['user'];
    

$sql = "select * from add_students where User_Name = '$user' and Password = '$pass'";

   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result);
   if(mysqli_num_rows($result)){
    // echo "Logged in successfully";
    header('location:studentdb.php');
   }else{
    // echo "User doesn't exist";
   }

   $_SESSION['name'] = $row['Student_Name'];
   $_SESSION['mail'] = $row['Email'];
   $_SESSION['student_class'] = $row['Class'];
//    echo $_SESSION['name'];
//    echo $_SESSION['mail'];
}

?>
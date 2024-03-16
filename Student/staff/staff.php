<?php
session_start();

// Check if the user is already logged in, redirect to homepage if true
if(isset($_SESSION['username'])){
    header("Location: index.php");
    exit;
}

// Include database connection file
// require_once "db_connection.php";

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize user input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Prepare SQL statement to check if the credentials are valid
    $sql = "SELECT * FROM faculty WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // If user exists, set session variables and redirect to homepage
    if(mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        // If login fails, show error message
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Login</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <script src="../bootstrap/bootstrap.min.js"></script>
    <script src="../bootstrap/popper.min.js"></script>
    <link rel="stylesheet" href="../dashboard.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Faculty Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary btn-block">
                            </div>
                        </form>
                        <?php if(isset($error)) echo '<p class="text-danger">' . $error . '</p>'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

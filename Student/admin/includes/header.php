<!-- <!DOCTYPE html>
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
    <style>
      
    </style>
</head>
<body>
  <div class="container-fluid"></div> -->
    <div class="row bg-dark">
        <div class="col-sm-2 text-white">
            <h3 class="mt-3 ps-3">SMS</h3>
        </div>
        <div class="col-sm-10">
            <nav class="navbar navbar-expand-sm navbar-dark text-white">
                <div class="container-fluid">
                    <h5><?php echo $_SESSION['name']; ?>, Welcome dashboard!</h5>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2">
                      <li class="nav-item">
                        <img src="../Images/face8.jpg" class="img-fluid float-end rounded-circle img_width">
                      </li>
                      <li class="nav-item dropdown dropdown_content">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true"><?php echo $_SESSION['name']; ?></a>
                        <ul class="dropdown-menu dropdown_item" aria-labelledby="navbarDropdown">
                            <li class="m-2"><img src="../Images/face8.jpg" class="rounded-circle" alt=""></li>
                            <li class="text-center"><p><?php echo $_SESSION['name']; ?><br><?php echo $_SESSION['Mail']; ?></p></li>
                            <li><a class="dropdown-item" href="admin_profile.php">My Profile</a></li>
                            <li><a class="dropdown-item" href="change_pass.php">Settings</a></li>
                            <li><a class="dropdown-item" href="admindb.php?log='1'">Sign Out</a></li>
                        </ul>
                      </li>
                  </div>
                </div>
            </nav>
        </div>
    <!-- </div> -->
<!-- </body>
</html> -->
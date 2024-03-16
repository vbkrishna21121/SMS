<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid">
    <!-- Navbar Start -->
        <div class="row">
            <nav class="navbar navbar-expand-lg text-light navbar_bg">
                <div class="container">
                    <a class="navbar-brand text-light" href="#"><p class="display-6">SMS</p></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item ps-5">
                                <a class="nav-link active text-light nav_link" aria-current="page" href="index.php"><span data-hover="Home">Home</span></a>
                            </li>
                            <li class="nav-item dropdown ps-5">
                                <a class="nav-link dropdown-toggle text-light nav_link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Facilities
                                </a>
                                <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Transport</a></li><hr>
                                    <li><a class="dropdown-item" href="#">Hostels</a></li><hr>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item ps-5">
                                <a class="nav-link text-light nav_link" href="about.php"><span data-hover="About">About</span></a>
                            </li>
                            <li class="nav-item ps-5">
                                <a class="nav-link text-light nav_link" href="contact.php"><span data-hover="Contact">Contact</span></a>
                            </li>
                            <!-- <li class="nav-item ps-5">
                                <a class="nav-link text-light nav_link" href="admin/admin.php"><span data-hover="Admin">Admin</span></a>
                            </li>
                            <li class="nav-item ps-5">
                                <a class="nav-link text-light nav_link" href="student/student.php"><span data-hover="Students">Students</span></a>
                            </li> -->
                            <!-- <li class="nav-item ps-5">
                                <a class="nav-link text-light nav_link" href="login.php"><span data-hover="Faculty">Login</span></a>
                            </li> -->
                            <li class="nav-item ps-5">
                                <a class="nav-link text-light nav_link" href="login.php"><span data-hover="Faculty">Login</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar end -->
    </div>
</body>
</html>
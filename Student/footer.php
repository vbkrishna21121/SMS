<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid bg-dark text-white">
        <div class="bg-dark">
            <div class="container">
                <div class="row me-5 ms-5">
                    <div class="col-sm-6 mt-5">
                        <ul class="d-flex list-unstyled">
                            <li class="pe-5"><a href="index.php" class="text-decoration-none text-white">Home</a></li>
                            <li class="pe-5"><a href="about.php" class="text-decoration-none text-white">About</a></li>
                            <li class="pe-5"><a href="contact.php" class="text-decoration-none text-white">Contact</a></li>
                            <li class="pe-5"><a href="admin/admin.php" class="text-decoration-none text-white">Admin</a></li>
                            <li class="pe-5"><a href="student/student.php" class="text-decoration-none text-white">Student</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6 mt-5 mb-5">
                                <p class="foot">ADDRESS</p>
                                <div class="d-flex">
                                    <i class="bi bi-geo-alt-fill pe-3"></i><p class="text-secondary">890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)</p>
                                </div>
                                <div class="d-flex ">
                                    <i class="bi bi-telephone-fill pe-3"></i><p class="text-secondary">7896541236</p>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <p class="foot">SMS</p>
                                <p class="text-secondary">Proin eget ipsum ultrices, aliquet velit eget, tempus tortor. Phasellus non 
                                velit sit amet diam faucibus molestie tincidunt efficitur nisi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright section -->
    <div class="container-fluid copyright" style="background-color: #4d4d4d;">
        <div class="container">
            <div class="row me-5 ms-5">
                <div class="col-sm-6 mt-3 mb-1">
                    <div class="copyright-left">
                        <p class="text-white">© <?php echo date('Y');?> Student Management System </p>
                    </div>
                </div>
                <div class="col-sm-6 mt-3 mb-1">
                    <div class="float-right">
                        <ul class="list-unstyled d-flex float-right">
                            <li><a href="#" class="bi bi-twitter text-white pe-5"> </a></li>
                            <li><a href="#" class="bi bi-facebook text-white pe-5"> </a></li>
                            <li><a href="#" class="bi bi-google text-white pe-5"> </a></li>
                            <li><a href="#" class="bi bi-pinterest text-white pe-5"> </a></li>
                            <li><a href="#" class="bi bi-linkedin text-white pe-5"> </a></li>
                            <li><a href="#" class="bi bi-dribbble text-white pe-5"> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
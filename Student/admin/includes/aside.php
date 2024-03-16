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
</head> -->
<!-- <body class="aside_body"> -->
<!-- <aside class="bg-dark"> -->
    <div class="row">
        <div class="col-sm-12 bg-dark">
            <div class="row mt-4">
                <div class="col-sm-3">
                    <img src="../Images/face8.jpg" class="img-fluid rounded-circle">
                </div>
                <div class="col-sm-9 text-white">
                    <p style="font-size: 15px;"><?php echo $_SESSION['name']; ?> <br><span style="font-size: 12px;"><?php echo $_SESSION['Mail']; ?></span></p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-12">
                    <h6 class="mb-3">DASHBOARD</h6>
                </div>
            </div>
            <div class="col-sm-12 pb-5">
                <div class="accordion bg-dark accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="admindb.php" class="text-decoration-none"><button class="accordion-button collapsed bg-dark text-white" type="button"><span class="float-start">Dashboard</span><span class="float-end"><i class="bi bi-laptop ms-1"></i></span></button></a>
                        </h2>
                    </div>

                    <div class="accordion-item text-white">
                        <h2 class="accordion-header bg-dark">
                            <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Class <span class=""><i class="bi bi-database-fill ms-1"></i></span></button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-dark text-white">
                                <p><i class="bi bi-chevron-right"></i><a href="add_class.php" class="text-white text-decoration-none">Add Class</a></p>
                                <p><i class="bi bi-chevron-right"></i><a href="manage_class.php" class="text-white text-decoration-none">Manage Class</a></p>
                            </div>
                        </div>
                    </div>    
                                    
                    <div class="accordion-item">
                        <h2 class="accordion-header btn_bg bg-dark">
                            <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Students <i class="bi bi-people ms-2"></i></button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-dark text-white">
                                <p><i class="bi bi-chevron-right"></i><a href="add_students.php" class="text-white text-decoration-none">Add Students</a></p>
                                <p><i class="bi bi-chevron-right"></i><a href="manage_students.php" class="text-white text-decoration-none">Manage Students</a></p>
                            </div>
                        </div>
                    </div>    
 
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Notice <i class="bi bi-file-earmark-fill ms-2"></i></button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-dark text-white">
                                <p><i class="bi bi-chevron-right"></i><a href="add_notice.php" class="text-white text-decoration-none">Add Notice</a></p>
                                <p><i class="bi bi-chevron-right"></i><a href="manage_notice.php" class="text-white text-decoration-none">Manage Notice</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">Public Notice <i class="bi bi-file-earmark-fill ms-2"></i></button>
                        </h2>
                        <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-dark text-white">
                                <p><i class="bi bi-chevron-right"></i><a href="public_notice.php" class="text-white text-decoration-none">Add Public Notice</a></p>
                                <p><i class="bi bi-chevron-right"></i><a href="manage_public_notice.php" class="text-white text-decoration-none">Manage Public Notice</a></p>
                            </div>
                        </div>
                    </div>
            
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-dark text-white btn_bg" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">Pages <i class="bi bi-file-earmark-fill ms-2"></i></button>
                        </h2>
                        <div id="flush-collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body bg-dark text-white">
                            <p><i class="bi bi-chevron-right"></i><a href="about_us.php" class="text-white text-decoration-none">About Us</a></p>
                            <p><i class="bi bi-chevron-right"></i><a href="contact_us.php" class="text-white text-decoration-none">Contact Us</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="report.php" class="text-decoration-none"><button class="accordion-button collapsed bg-dark text-white btn_bg" type="button">Reports<i class="bi bi-journal ms-2"></i></button></a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="search.php" class="text-decoration-none"><button class="accordion-button collapsed bg-dark text-white btn_bg" type="button">Search<i class="bi bi-search ms-2"></i></button></a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>                 
<!-- </aside> -->
<!-- </body>
</html> -->
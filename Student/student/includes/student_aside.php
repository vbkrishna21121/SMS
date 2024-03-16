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
                    <p style="font-size: 15px;"><?php echo $_SESSION['name']; ?> <br> <span style="font-size: 12px;"><?php echo $_SESSION['mail']; ?></span></p>
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
                            <a href="studentdb.php" class="text-decoration-none"><button class="accordion-button collapsed bg-dark text-white btn_bg" type="button">Dashboard<i class="bi bi-laptop ms-2"></i></button></a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <a href="student_notice.php" class="text-decoration-none"><button class="accordion-button collapsed bg-dark text-white btn_bg" type="button">View Notice<i class="bi bi-book-half ms-2"></i></button></a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>                 
<!-- </aside> -->
<!-- </body>
</html> -->
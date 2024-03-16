<?php
session_start();
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
                        <h4 class="float-start">Between Dates Reports</h4>
                        <nav aria-label="breadcrumb" class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admindb.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Between Dates Reports</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card m-4 bg-light" style="border-radius: 15px;">
                    <div class="card-body">
                       <h3 class="text-center ">Reports</h3>
                      <form method="post">
                            <div class="m-3">
                                <label for="add">From:</label>
                                <input type="date" class="form-control" placeholder="Enter student id without any spaces" name="d1" >
                            </div>
                            <div class="m-3">
                                <label for="add">From:</label>
                                <input type="date" class="form-control" placeholder="Enter student id without any spaces" name="d2" >
                            </div>
                            <button type="submit" name="report" class="btn btn-info px-4 m-3">Search</button>
                        </form>

                        <?php
                            $_SESSION["date1"]="";
                            $_SESSION["date2"]="";
                            if(isset($_POST['report'])){
       
                                $date1 = new DateTime($_POST['d1']); 
                                $date2 = new DateTime($_POST['d2']);
                                $_SESSION["date1"] = $date1;
                                $_SESSION["date2"] = $date2;
                            }
          
                            $conn = mysqli_connect('localhost', 'root', '', 'student_management');
                            $get  ="select * from add_students";
                            // $get = "SELECT add_student.Student_ID,add_student.S_No,add_student.Student_Name,add_student.Email,add_student.Admissin_Date,add_class.Class_Name,add_class.Section from add_student join add_class on add_class.S_No = add_student.Class where date(add_student.Admission_Date) between '$date1' and '$date2'"; //LIMIT $offset, $no_of_records_per_page
                            $result = mysqli_query($conn, $get);


                            $first_time = true;
                            while($row = mysqli_fetch_array($result)){
                                // $_SESSION['class'] = $row['Class_Name'] . "-" . $row['Section'];

                                $doa=new DateTime($row['Admissin_Date']);
                                $doa=date_format($doa,"Y-m-d");
                                $doa=new DateTime($doa);
          
                            $case1=0;
                            $case2=0;
                            $case1=($doa>=$_SESSION["date1"]);
                            $case2=($_SESSION["date2"]>=$doa);


                            if($case1 && $case2){
                                if($first_time){
                                    echo "<table class='table table-hover table-responsive table-border table-bordered table-stripped'>";
                                    echo"<tr class='text-center'>";
                                    echo "<th>S.No</th>";
                                    echo "<th>Student ID</th>";
                                    echo " <th>Student Class</th>";
                                    echo "<th>Student Name</th>";
                                    echo "<th>Student Email</th>";
                                    echo "<th>Admission Date</th>";
                                    echo "<th colspan='2'>Actions</th>";
                                    echo "</tr>";
                                    $first_time=false;
                                }
               
                                echo "<tr>"; 
                                $date1=date_format($doa,"Y-m-d");
                                $date2=date_format($_SESSION['date1'],"Y-m-d");
                                echo "<td>".$row['S_No']."</td>";
                                echo "<td>".$row['Student_ID']."</td>";
                                echo "<td>" .$row['Class']."</td>";//$_SESSION['class']
                                echo "<td>" .$row['Student_Name'] ."</td>";
                                echo "<td>" .$row['Email'] ."</td>";
                                echo "<td>" .$row['Admissin_Date'] ."</td>";
                                echo '<td><a href="update_student_details.php?S_No='. $row['S_No'].'"> View </a> </td>';
                                echo '<td><a href="delete_students.php?S_No='. $row['S_No'].'"> Delete </a> </td>';
                                echo "</tr>";
                            }
                        }
                        echo "</table>";
                        ?>
                    </div>
                </div>
            </div>

</body>
</html>
<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'student_management');

if (isset($_REQUEST['S_No'])) {
    $s_no = $_REQUEST['S_No'];
    
    $delete = "SELECT * FROM add_students WHERE Deleted = 0";
    $sql = "UPDATE add_students SET Deleted = 1 WHERE S_No = $s_no";
    
    if(mysqli_query($conn, $sql)){
        header("Location: manage_students.php"); 
        exit();
    }else{
        echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
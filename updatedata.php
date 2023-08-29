
<?php
    require_once "conn.php";
    
    if(isset($_POST["employee_name"]) && isset($_POST["address"]) && isset($_POST["gender"]) && isset($_POST["jobs_types"])  && isset($_POST["phone_number"])){
       
        $emp_name = $_POST['employee_name'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $job_type = $_POST['jobs_types'];
        $pho_num = $_POST['phone_number'];
        // $file_up = $_POST['file_upload'];
        
        $sql = "UPDATE employees SET 
        `employee_name`='$emp_name',
        `address`= '$address',
        `gender` = '$gender',
        `jobs_types`= '$job_type',
        `phone_number`='$pho_num' WHERE id= ".$_GET["id"];
        
        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>






     
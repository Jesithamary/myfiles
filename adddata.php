<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){
        print_r($_POST);

        $emp_name = $_POST['employee_name'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $job_type = $_POST['jobs_types'];
        $pho_num = $_POST['phone_number'];
        // $file_up= $_POST['file_upload'];
         // $file_up=$_FILES['file_upload']['name'];



         if(isset($_FILES['file_upload'])){
      $errors= array();
      $file_name = $_FILES['file_upload']['name'];
      $file_size =$_FILES['file_upload']['size'];
      $file_tmp =$_FILES['file_upload']['tmp_name'];
      $file_type=$_FILES['file_upload']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file_upload']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"fileupload/".$file_name);
         
      }else{
         print_r($errors);
      }
   }
      $file_up=$file_name;




        if( $emp_name != "" &&  $address != "" && $gender != "" && $job_type != "" && $pho_num != "" && $file_up ){
            $sql = "INSERT INTO employees (employee_name, address, gender, jobs_types, phone_number,file_upload) VALUES ('$emp_name', '$address', '$gender', '$job_type', '$pho_num','$file_up')";
            if (mysqli_query($conn, $sql)) {
                header("location: index.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        } else {
            echo "Name, Address, Gender, Job Type,File upload and Phone Number cannot be empty!";
        }
    }
?>



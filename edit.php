<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>


<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Update Data</h1>
        <div class="container">
            <?php 
                require_once "conn.php";
                $sql_query = "SELECT * FROM employees WHERE id = ".$_GET["id"];
                if ($result = $conn ->query($sql_query)) {
                    while ($row = $result -> fetch_assoc()) { 
                        $Id = $row['id'];
                        $emp_name = $row['employee_name'];
                        $address = $row['address'];
                        $gender = $row['gender'];
                        $job_type = $row['jobs_types'];
                        $pho_num = $row['phone_number'];
                         
                        
            ?>
                            <form action="updatedata.php?id=<?php echo $Id; ?>" method="post">
                                <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label for="">Employee Name</label>
                                            <input type="text" name="employee_name" id="name" class="form-control" value="<?php echo $emp_name ?>" required>

                                        
                                       
                                            <label for="">Address</label>
                                            <select name="address" id="Address" class="form-control" required >
                                                   <option value="" <?php if($address == "Select a Address"){ echo "Selected"; }?>>Select a Address</option>
                                                   <option value="Chennai" <?php if($address == "Chennai"){ echo "Selected"; }?>>Chennai</option>
                                                   <option value="Osur" <?php if($address == "Osur"){ echo "Selected"; }?>>Osur</option>
                                                   <option value="Mumbai" <?php if($address == "Mumbai"){ echo "Selected"; }?>>Mumbai</option>
                                                   <option value="Delhi" <?php if($address == "Delhi"){ echo "Selected"; }?>>Delhi</option>
                                                   <option value="Yelagiri" <?php if($address == "Yelagiri"){ echo "Selected"; }?>>Yelagiri</option>
                                             

                                            </select>
                                        
                                            <label for="">Gender</label>
                                            <input type="radio" name="gender" value="Male"<?php echo ($gender == 'Male')?'checked':''?> >Male
                                           <input type="radio" name="gender" value="Female"<?php echo ($gender == 'Female')?'checked':''?> >Female
                                          <input type="radio" name="gender" value="Other"<?php echo ($gender == 'Other')?'checked':''?> >Other<br><br>
                                
                        <label for="">Jobs types</label>
                        <select name="jobs_types" id="Jobs types" class="form-control" required>
                            <option value="Choose a Jobs" <?php if($job_type == "Choose a Jobs"){ echo "Selected"; }?>>Choose a Jobs</option>
                            <option value="Software Developer" <?php if($job_type == "Software Developer"){ echo "Selected"; }?>>Software Developer</option>
                            <option value="BPS" <?php if($job_type == "BPS"){ echo "Selected"; }?>>BPS</option>
                            <option value="Teching" <?php if($job_type == "Teching"){ echo "Selected"; }?>>Teching</option>
                            <option value="Full stack Developer" <?php if($job_type == "Full stack Developer"){ echo "Selected"; }?>>Full stack Developer</option>
                            <option value="Testing" <?php if($job_type == "Testing"){ echo "Selected"; }?>>Testing</option>
                        </select>

                            <div class="row">
                            <div class="form-group col-lg-4">
                             <label for="">Phone Number </label>
                              <input type="tel" name="phone_number" id="phone_number" class="form-control" value="<?php echo $pho_num ?>" required><br><br>
                        </div>


                                <lable for="">Upload file:</lable>
                              <form action="upload" method="post" enctype="multipart/form-data">
                               
                               <input type="file" name="file_upload" id="fileToUpload"><br><br> 


                                        <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                                        <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update"><br><br>
                                        <input type="button"  class="btn btn-dark" value="Go Back!" onclick="history.go(-1)">
                                        </div>
                                </div>
                            </form>
            <?php 
                    }
                }
            ?>
        </div>
    </section>
</body>

</html>
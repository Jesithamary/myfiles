<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>PHP - MYSQL - CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous">
        </script>
        <style>
            .two{
                padding-top: 20px;
            }
        </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2">
    <a href="addview.php" tite="Add" class="btn btn-success"><i style="font-size:24px" class="fa">&#xf067;</i><a>
        &nbsp&nbsp<a href="logout.php" tite="logout" class="btn btn-danger">logout</a></div></div>
        <!-- <a href="logout.php" tite="Logout">Logout.<a>   -->


    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-primary">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Jobs Types</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">File Upload</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">View</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM employees";
                        if ($result = $conn ->query($sql_query)) {
                            
                            while ($row = $result -> fetch_assoc()) { 
                                $Id = $row['id'];
                                $employee_name = $row['employee_name'];
                                $address = $row['address'];
                                $gender = $row['gender'];
                                $jobs_types=$row['jobs_types'];
                                $phone_number=$row['phone_number'];
                                $file_upload=$row['file_upload'];
                                
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $employee_name; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $gender; ?></td>
                        <td><?php echo $jobs_types;?></td>
                        <td><?php echo $phone_number;?></td>
                
                        <td><img width="20%"height="20%"src="fileupload/<?php echo $file_upload ?>"/></td>

                        <td><a href="edit.php?id=<?php echo $Id; ?>" ><span class="glyphicon">&#x270f;</span></a></td>
                        <td><a href="deletedata.php?id=<?php echo $Id; ?>" ><i class="fa fa-trash-o" style="font-size:30px;color:red"></i></a></td>
                        <td><a href="view.php?id=<?php echo $Id; ?>" ><i class="fa fa-eye" style="font-size:30px;color:blue"></i></a></td>
                    </tr>
                    <?php
                            } 
                        } 
                    ?>
                </tbody>


              </table>
        </div>
    </section>
</body>

</html>
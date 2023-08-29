<!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    </head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-2"><input type="button"  class="btn btn--radius-2 btn-dark" value="Back!" onclick="history.go(-1)" > </div>
<br>
    <div class="row">
        <div class="col-sm-12">
  <table class='table table-secondary'>
      <thead>
          <tr>
              
                    <th scope="col">Field</th>
                    <th scope="col">Value</th>
                    
          </tr>

      </thead>
</div>
</div>
</div>
      <?php
        require_once "conn.php";
         $query = "SELECT * FROM `employees` WHERE id= ".$_GET['id'];
           $result = $conn->query($query);
 
         while ($row = mysqli_fetch_array($result)) {
             ?>
             <tr>
                <td>Id</td>
                 <td><?php echo $row['id'] ?></td>
                 </tr>
<tr>
    <td>Employee name </td>
                 <td><?php echo $row['employee_name'] ?></td>
                 </tr>
<tr>
                 <td>Address</td>
                 <td><?php echo $row['address'] ?></td> 
                 </tr>
<tr>
                <td>JobsTypes</td>
                 <td><?php echo $row['jobs_types'] ?></td>
                 </tr>
<tr>
                <td>Gender</td>
                 <td><?php echo $row['gender'] ?></td>
                </tr>
<tr>
                <td>Phone Number</td>
                 <td><?php echo $row["phone_number"] ?></td>
                </tr>
<tr>
    <td>Image</td>
    <td><img width="10%" height="10%" src="images/<?php echo $row['file_uploaad'] ?>"></td>
         </tr>

        <?php
         }
      ?>
  </table>

  <a href="intro.php" tite="add" class="btn btn-primary">Back</a>
</body>
</html>
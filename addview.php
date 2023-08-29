<html>
<head>
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous">
        </script>
</head>
<style>
	@import url(https://fonts.googleapis.com/css?family=Bree+Serif);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

* {
  margin: 0;
  padding: 0  
}
body {
  background: url(http://img6.uploadhouse.com/fileuploads/17737/17737075bdad5cfa9423bb2c3c2beee695c72bb8.jpg);
  color: #B1B1B1;
  margin: 15px auto 0;
  width: 410px;
}
</style>

<body>
	    <section>
        <h1 style="text-align: center;margin: 50px 0;">PHP CRUD operations </h1>
        <div class="container">
            <form action="adddata.php" method="post" enctype="multipart/form-data">
               <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="">Employee Name*</label>
                        <input type="text" name="employee_name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-6">
                        <label for="">Address*</label>
                        <select name="address" id="address" class="form-control" required>
                            <option value="">Select a Address</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Osur">Osur</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Yelagiri">Yelagiri</option>
                        </select></div></div><br>
                        <div class="row">
                   <div class="form-group col-lg-6">
                        <label for="">Gender:</label>
                        
                        <input type="radio" name="gender" value="Male" >Male
                        <input type="radio" name="gender" value="Female" >Female
                        <input type="radio" name="gender" value="Other" >Other</div>

<div class="form-group col-lg-6">
                        <label for="">JobsTypes*</label>
                        <select name="jobs_types" id="Jobs types" class="form-control" required>
                            <option value="">Choose a jobs</option>
                            <option value="Software Developer">Software Developer</option>
                            <option value="BPS">BPS</option>
                            <option value="Teching">Teching</option>
                            <option value="Full stack Developer">Full stack Developer</option>
                            <option value="Testing">Testing</option>
                        </select></div>
                    </div><br>

                           <div class="row">
                   <div class="form-group col-lg-6">
                             <label for="">Phone Number* </label>
                            <input type="tel" name="phone_number" id="phone _number" class="form-control" required></div>
<div class="form-group col-lg-6">
                            <lable for="">Upload file*</lable>
                            <input type="file" class="form-control" name="file_upload" id="fileToUpload" required></div></div><br>
                              

                           <!--  <label for="">Excel file</lable>
                              <input type="file" class="form-control" name="excel_file" id="fileToUpload"><br><br> -->
                                <!-- <input type="submit" value="Upload">  -->


            
                    <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                         <!-- <a href="logout.php" tite="Logout">Logout.<a>   -->
                        <br>
                    </div>

               </div>
            </form>
            
        </div>
    </section>
	</body>
</html>
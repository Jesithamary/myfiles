<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous">
        </script>
</head>
<body>
    <form action="files.php"method="post"enctype="multipart/form-data">
        <label class="text-info">select  image file :</lable><br>
            <input type="file"name="image"id="file"class="form-control"><br>



            <lable class="text-info">select pdf file :</lable><br>
            <input type="file"name="pdf"id="file"class="form-control"><br>

            

            <lable class="text-info">select Excel file :</lable><br>
            <input type="file"name="excel"id="file"class="form-control"><br>


            <input type="submit"name="submit"id="sumbit"class="btn btn-primary">
        </form>
    </body>
    </html>





<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"filestorage/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
     
   <?php
$allowedExts = array("pdf", "doc");
$temp = explode(".", $_FILES["pdf"]["name"]);
$extension = end($temp);
if (($_FILES["pdf"]["type"] == "application/pdf")
|| ($_FILES["pdf"]["type"] == "application/doc")
&& ($_FILES["pdf"]["size"] < 200000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["pdf"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["pdf"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["pdf"]["name"] . "<br>";
    echo "Type: " . $_FILES["pdf"]["type"] . "<br>";
    echo "Size: " . ($_FILES["pdf"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["pdf"]["tmp_name"] . "<br>";

    if (file_exists("img/" . $_FILES["pdf"]["name"]))
      {
      echo $_FILES["pdf"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["pdf"]["tmp_name"],
      "filestorage/" . $_FILES["pdf"]["name"]);
  echo "Stored in: " . "filestorage/" . $_FILES["pdf"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>



<?

$finfo = finfo_open(FILEINFO_MIME_TYPE);
echo finfo_file($finfo, $filename);


$filename = "/home/user1/whatever.xls"; 
echo $finfo->file($filename);

?>
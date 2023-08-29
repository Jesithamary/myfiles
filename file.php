<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<thead>
				<tr>
					<th>Image</th>
				</tr>
			</thead>
		<?php
		 require_once "conn.php";
$query = "SELECT file_upload FROM `employees` ";
if ($result = $conn ->query($query)) {
                            
           while ($row = $result -> fetch_assoc()){ 
       	?>
       	<tr>
       		
       	<td>

 <img src="data:Photo/jpg;charset=utf8;base64,<?php echo base64_encode($row['file_upload']); ?>" /> 
</td>
</tr>
<?php
}
}
?>
</table>
	</form>

</body>
</html>
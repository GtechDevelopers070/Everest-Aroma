<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Multiple File Ppload with PHP</title>
</head>
<body>
  <form action="test.php" method="post" enctype="multipart/form-data">
    <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
  <input type="submit" name="sub" value="Upload!" />
</form>
</body>
</html>

<?php
$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*100; //100 kb
$path = "uploads/"; // Upload directory
$count = 0;

if(isset($_POST['sub'])){

	// Loop $_FILES to exeicute all files
	foreach ($_FILES['files']['name'] as $f => $name) {   

	    
			
	        
	        	echo 'asdasdsucces';
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
	            $count++; // Number of successfully uploaded file
	       
	    }
	}

?>
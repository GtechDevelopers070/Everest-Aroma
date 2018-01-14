<?php
include '../../eaPortions/dbConnect.php';


$result = mysqli_query($db,"SELECT COUNT(*) FROM productdetails");
$row = mysqli_fetch_assoc($result);
$size = $row['COUNT(*)'] + 1;

echo $size;

		?>
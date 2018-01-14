<!-- CHOOSE PHOTOS FOR HOMEPAGE-->


		<?php
		

echo '<div class="postProduct">
	<center><h1>Select Product to Post in Homepage</h1></center>
	<center>';

					$sql4="SELECT productName FROM products WHERE homeShow='yes'"; //showing selected item
					$defaultItems = mysqli_query($db, $sql4);

					$sql="SELECT * FROM products";
					
					$result = mysqli_query($db, $sql);

					echo'<form action="ea-admin-home.php" method="POST">';

						echo 'Choose Product 1:';
							$checkDefault = mysqli_fetch_assoc($defaultItems); //choosing default 

							if (mysqli_num_rows($result) > 0) {
						    // output data of each row
								echo'<select id="subject" name="subject1">';
								while($row = mysqli_fetch_assoc($result)) {
									if($row['productName']==$checkDefault['productName']){
										echo'<option selected value="'.$row["productName"].'">'.$row["productName"].'</option>';
									}
									else{
										echo'<option value="'.$row["productName"].'">'.$row["productName"].'</option>';
									}
								}

								echo'</select>';

							}
						mysqli_data_seek($result, 0);//result ko pointer lai reset haneko 
						echo '<br>';
						echo '<br>';
						echo 'Choose Product 2:';
							$checkDefault = mysqli_fetch_assoc($defaultItems); //choosing default 

							if (mysqli_num_rows($result) > 0) {
						    // output data of each row
								echo'<select id="subject" name="subject2">';
								while($row = mysqli_fetch_assoc($result)) {
									if($row['productName']==$checkDefault['productName']){
										echo'<option selected value="'.$row["productName"].'">'.$row["productName"].'</option>';
									}
									else{
										echo'<option value="'.$row["productName"].'">'.$row["productName"].'</option>';
									}
								}

								echo'</select>';

							}
						mysqli_data_seek($result, 0);//result ko pointer lai reset haneko 
						echo '<br>';
						echo '<br>';
						echo 'Choose Product 3:';
							$checkDefault = mysqli_fetch_assoc($defaultItems); //choosing default 

							if (mysqli_num_rows($result) > 0) {
						    // output data of each row
								echo'<select id="subject" name="subject3">';
								while($row = mysqli_fetch_assoc($result)) {
									if($row['productName']==$checkDefault['productName']){
										echo'<option selected value="'.$row["productName"].'">'.$row["productName"].'</option>';
									}
									else{
										echo'<option value="'.$row["productName"].'">'.$row["productName"].'</option>';
									}
								}

								echo'</select>';

							}
						mysqli_data_seek($result, 0);//result ko pointer lai reset haneko 
						echo '<br>';
						echo '<br>';
						echo 'Choose Product 4:';
							$checkDefault = mysqli_fetch_assoc($defaultItems); //choosing default 

							if (mysqli_num_rows($result) > 0) {
						    // output data of each row
								echo'<select id="subject" name="subject4">';
								while($row = mysqli_fetch_assoc($result)) {
									if($row['productName']==$checkDefault['productName']){
										echo'<option selected value="'.$row["productName"].'">'.$row["productName"].'</option>';
									}
									else{
										echo'<option value="'.$row["productName"].'">'.$row["productName"].'</option>';
									}
								}

								echo'</select>';

							}
						mysqli_data_seek($result, 0);//result ko pointer lai reset haneko 
						echo '<br>';
						echo '<br>';
						


						echo'<input class="button12" type="submit" name="changeHomeProduct" value="Change Product"> </center>
					</div> </form> '; // form close 

					
					

					

					?>

					
<!--Data Dicitonary
$sql- select products from table product to display 

$sql2- updating table products to show item in homepage
-->

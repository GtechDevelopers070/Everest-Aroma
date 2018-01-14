 <?php
 session_start();
	//After Logging In from index.html
 $flag = false;

 if(isset($_POST['submitLogInData'])){
 	$flag = true;
 	include '../../eaPortions/dbConnect.php';


 	$userName=mysqli_real_escape_string($db,$_POST['logInName']);
 	$userPassword=mysqli_real_escape_string($db,$_POST['logInPassword']);
 	
 	if (empty($userName) || empty($userPassword))
 	{
 		$error = "Invalid entry of Username and Password";
 	}
 	else
 	{
 		
 		$userPassword=md5($userPassword);

 		$sql="select * from admin where Password='$userPassword' AND Username='$userName'";

			//$query=mysqli_query($db,$sql);
 		$row = mysqli_num_rows(mysqli_query($db,$sql));

 		if ($row==1) 
 		{	
 			$_SESSION['myID'] = "lowercase";
 			include '../../eaPortions/ea-header.php';
 			include'../../eaPortions/adminHome.php';
 		}
 		else
 		{
 			echo ("<h1>Unsuccessful</h1>");
 		}	
 	}
 	echo "</body></html>";
 	mysqli_close($db);
 }
 
    //Open Product update page
 	
 	//<!-- CHOOSE PHOTOS FOR HOMEPAGE-->

 



 else if(isset($_POST['productUpdate']) && isset($_SESSION['myID'])){
 	$flag = true;
 	include '../../eaPortions/ea-header.php';
	include '../../eaPortions/dbConnect.php';
 	include '../../eaPortions/homeProduct.php';
 }
 else if(isset($_POST['changeHomeProduct']) && isset($_SESSION['myID'])){
 	$flag = true;
 	include '../../eaPortions/ea-header.php';

 	include '../../eaPortions/dbConnect.php';
 	

 	$select1=$_POST['subject1'];
 	$select2=$_POST['subject2'];
 	$select3=$_POST['subject3'];
 	$select4=$_POST['subject4'];

 	$sql2="UPDATE products SET homeShow='yes' where productName in('$select1','$select2','$select3','$select4')";

 	$resultYes = mysqli_query($db, $sql2);

 	$sql3="UPDATE products SET homeShow='no' where productName NOT in('$select1','$select2','$select3','$select4')";

 	$resultNo=mysqli_query($db, $sql3);
 	if($resultYes && $resultNo){
 		include '../../eaPortions/homeProduct.php';
 		echo '<script> alert("Successfully updated"); </script>';
 	}
 	

 }





					/*<!--Data Dicitonary
					$sql- select products from table product to display 

					$sql2- updating table products to show item in homepage
				-->*/


	//Open news update page

				else if(isset($_POST['submitNews']) && isset($_SESSION['myID'])){
					$flag = true;
					include '../../eaPortions/ea-header.php';

					include '../../eaPortions/dbConnect.php';

		//reminder - create this include file
					include '../../eaPortions/newsUpdate.php';
				}
	//After submitting update news 

				else if(isset($_POST['submitNewsData']) && isset($_SESSION['myID'])){
					$flag = true;

					include '../../eaPortions/ea-header.php';

					include '../../eaPortions/dbConnect.php';

					include '../../eaPortions/adminHome.php';

					$newsTitle=mysqli_real_escape_string($db,$_POST['newsTitle']);
					$newsContent=mysqli_real_escape_string($db,$_POST['newsContent']);


					$file_name = $_FILES['image']['name'];
					$file_size =$_FILES['image']['size'];
					$file_tmp =$_FILES['image']['tmp_name'];
					$file_type=$_FILES['image']['type'];
					$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
					if ($file_ext == "jpeg" || $file_ext == "jpg" || $file_ext == "png") {
						move_uploaded_file($file_tmp,"Uploads/".$file_name);
						$path = 'Uploads/'.$file_name;

						$sql="INSERT INTO news(NewsTitle,NewsContents,NewsPicture) VALUES('$newsTitle','$newsContent','$path')";



						$query=mysqli_query($db,$sql);

						if(!$query)
						{
							echo '<script> alert("News Update failed"); </script>';
						}
						else
						{
							echo '<script> alert("Successfully updated NEWS"); </script>';;
						}
					}
					else{
						echo '<script> alert("News Update failed, please upload PNG or JPEG photo"); </script>';
					}
					echo "</body>
					</html>";
					mysqli_close($db);
				}

	//change password page from this > ea-header.php

				else if (isset($_POST['changePassword']) && $_SESSION['myID']=="lowercase") {
					$flag = true;
					include '../../eaPortions/ea-header.php';
					include ("../../eaPortions/cpDesign.php"); //HTML
					echo "</div>";
					echo "</body> </html>";
				}

	//after confirming change password from this > cpDesign (from above)

	else if(isset($_POST['changePasswordConfirmation']) && $_SESSION['myID']=="lowercase"){
		$flag = true;
		include '../../eaPortions/dbConnect.php';

		$userName=mysqli_real_escape_string($db,$_POST['oldUserName']);
		$userPassword=mysqli_real_escape_string($db,$_POST['oldUserPassword']);

		include '../../eaPortions/ea-header.php';
		include("../../eaPortions/cpDesign.php"); //HTML 


		if (empty($userName) || empty($userPassword))
		{
			$error = "Invalid entry of Username and Password";
		}
		else
		{
			
			$userPassword=md5($userPassword);

			$sql="select * from admin where Password='$userPassword' AND Username='$userName'";

			$row = mysqli_num_rows(mysqli_query($db,$sql));

			echo '<div class="row" id="statusMessage">
			<div class="col-xl-12">';
				if ($row==1) 
				{
					$password=mysqli_real_escape_string($db,$_POST['newUserPassword']);
					$passwordConfirm=mysqli_real_escape_string($db,$_POST['confirmNewUserPassword']);
					if($password==$passwordConfirm)
					{
						$password=md5($password);
						$sql1="UPDATE admin SET Password='$password' where Username='$userName'";
						
						$query=mysqli_query($db,$sql1);

						if(!$query)
						{
							echo  "<h1>Password change Unsuccessful.</h1>";
						}
						else
						{
							echo "<h1>Password change Successful.</h1>";
						}

					}
					else
					{
						echo "<h1>New passwords don't match</h1>";
					}
				}
				else
				{
					echo'<h1>Password change Unsuccessful due to unauthorized access</h1>';
				}

				echo "</div></div>";
			}
			mysqli_close($db);
			echo "</div>";
			echo "</body></html>";
		}

		//Add Product- Abiral
		else if(isset($_POST['addProduct']) && isset($_SESSION['myID'])){
			include '../../eaPortions/ea-header.php';
			include("../../eaPortions/addProduct.php");
		}

		else if(isset($_POST['addProductConfirmation']) && isset($_SESSION['myID']))
		{
			$flag = true;
			include '../../eaPortions/dbConnect.php';
			include '../../eaPortions/ea-header.php';
			$englishName=mysqli_real_escape_string($db,$_POST['englishName']);
			$localName=mysqli_real_escape_string($db,$_POST['localName']);
			$botanicalName=mysqli_real_escape_string($db,$_POST['botanicalName']);
			$familyName=mysqli_real_escape_string($db,$_POST['familyName']);
			$season=mysqli_real_escape_string($db,$_POST['season']);
			$partsUsed=mysqli_real_escape_string($db,$_POST['partsUsed']);
			$description=mysqli_real_escape_string($db,$_POST['description']);
			$appearance=mysqli_real_escape_string($db,$_POST['appearance']);
			$aroma=mysqli_real_escape_string($db,$_POST['aroma']);
			$flashPoint=mysqli_real_escape_string($db,$_POST['flashPoint']);
			$specificGravity=mysqli_real_escape_string($db,$_POST['specificGravity']);
			$refractiveIndex=mysqli_real_escape_string($db,$_POST['refractiveIndex']);
			$relativeIndex=mysqli_real_escape_string($db,$_POST['relativeIndex']);
			$esterValue=mysqli_real_escape_string($db,$_POST['esterValue']);
			$esterValueAfter=mysqli_real_escape_string($db,$_POST['esterValueAfter']);
			$opticalRotation=mysqli_real_escape_string($db,$_POST['opticalRotation']);
			$acidNumber=mysqli_real_escape_string($db,$_POST['acidNumber']);
			$totalAlcohol=mysqli_real_escape_string($db,$_POST['totalAlcohol']);
			$solubility=mysqli_real_escape_string($db,$_POST['solubility']);
			$solubleInWater=mysqli_real_escape_string($db,$_POST['solubleInWater']);
			$countryOrigin=mysqli_real_escape_string($db,$_POST['countryOrigin']);
			$uses=mysqli_real_escape_string($db,$_POST['uses']);
			$packaging=mysqli_real_escape_string($db,$_POST['packaging']);
			
			//count the number of products for inserting product ID manually
			$result = mysqli_query($db,"SELECT COUNT(*) FROM productdetails");
			$row = mysqli_fetch_assoc($result);
			$productId = $row['COUNT(*)'] + 1;

			

			
			$sqlAdd="INSERT INTO productdetails VALUES('$productId','$englishName','$localName','$botanicalName','$familyName','$season','$partsUsed','$description','$appearance','$aroma','$flashPoint','$specificGravity','$refractiveIndex','$relativeIndex','$esterValue','$esterValueAfter','$opticalRotation','$acidNumber','$totalAlcohol','$solubility','$solubleInWater','$countryOrigin','$uses','$packaging')";
			$resultAdd=mysqli_query($db,$sqlAdd);
			$imagePath= 'Uploads/'.ucfirst($englishName).'.png';
			if($resultAdd){
				$sqlAddProduct="INSERT INTO products VALUES ('$productId','$englishName','$imagePath','no','no')";
				$resultAddProduct=mysqli_query($db,$sqlAddProduct);
				echo '<script>alert("New Product added Successfully");</script>';
				include'../../eaPortions/adminHome.php';
			}
			else {
					echo '<script>alert("Failed adding new Product");</script>';
					include'../../eaPortions/adminHome.php';
			}
		}

		//Edit Product -- Abiral
		//Add Product- Abiral
		else if(isset($_POST['editProduct']) && isset($_SESSION['myID']))
		{
			include '../../eaPortions/dbConnect.php';
			include '../../eaPortions/ea-header.php';
			include '../../eaPortions/editProduct.php';
			
		}
		


		else 
		{
			$flag = true;
			include '../../eaPortions/dbConnect.php';

			//Open editing form --not good coding but working 
		
			$sql="SELECT * FROM productdetails";

        	$result = mysqli_query($db, $sql);


       		 if (mysqli_num_rows($result) > 0) {
		        // output data of each row
	        	$count = 1;
		        while($row = mysqli_fetch_assoc($result)) {
					if(isset($_POST['edit'.$row["productID"]]) && isset($_SESSION['myID']) && $count==1)
					{
						$count++;
						
						include '../../eaPortions/dbConnect.php';
						include '../../eaPortions/ea-header.php';
						$id=$row["productID"];
						$_SESSION["prodID"] = $id; //proID is used in image part, so prodID
						echo '<div class=" container addProductStyle">';
						echo '<center>EDIT '.$row["EnglishName"].' Details </center>';
						echo '<form action="ea-admin-home.php" method="POST" class="form-group">
								<div class="row">
								<div class="col-md-4">
							   	English Name: <textarea  name="englishName" class="form-control" rows="1">	'.$row["EnglishName"].'</textarea>
								Local Name: <textarea  name="localName" class="form-control" rows="1">'.$row["LocalName"].'	</textarea>
								Botanical Name: <textarea  name="botanicalName" class="form-control" rows="1"> '.$row["BotanicalName"].'	</textarea>
								Family Name: <textarea  name="familyName" class="form-control" rows="1">'.$row["FamilyName"].'	</textarea>
								Season: <textarea  name="season" class="form-control" rows="1"> '.$row["Season"].'	</textarea>
								Parts Used: <textarea  name="partsUsed" class="form-control" rows="1"> '.$row["PartsUsed"].'	</textarea>
								 Description: 
								<textarea class="form-control" rows="3" name="description">'.$row["Description"].' </textarea>
								Appearance: <textarea  name="appearance" class="form-control">'.$row["Appearance"].' </textarea>
							</div>
							<div class="col-md-4">	
								 Aroma: 
								<textarea class="form-control" rows="2" name="aroma"> '.$row["Aroma"].'</textarea>
								Flash Point: <textarea  name="flashPoint" class="form-control" rows="1"> '.$row["FlashPoint"].'</textarea>
								Specific Gravity: <textarea  name="specificGravity" class="form-control" rows="1">'.$row["SpecificGravity"].' </textarea>
								Refractive Index: <textarea  name="refractiveIndex" class="form-control" rows="1">'.$row["RefractiveIndex"].' </textarea>
								Relative Index: <textarea  name="relativeIndex" class="form-control" rows="1">'.$row["RelativeIndex"].' </textarea>
								Ester Value: <textarea  name="esterValue" class="form-control" rows="1">'.$row["EsterValue"].' </textarea>
								Ester Value after Acetylation: <textarea  name="esterValueAfter" class="form-control" rows="1">'.$row["EsterValueAfterAcetylation"].' </textarea>
								Optical Rotation: <textarea  name="opticalRotation" class="form-control" rows="1"> '.$row["OpticalRotation"].'</textarea>
							</div>
							<div class="col-md-4">
								Acid Number: <textarea  name="acidNumber" class="form-control" rows="1">'.$row["AcidNumber"].' </textarea>
								Total Alcohol: <textarea  name="totalAlcohol" class="form-control" rows="1"> '.$row["TotalAlcohol"].'</textarea>
								Solubility: <textarea  name="solubility" class="form-control" rows="1"> '.$row["Solubility"].' </textarea>
								Soluble in Water: <textarea  name="solubleInWater" class="form-control" rows="1">'.$row["Solubleinwater"].' </textarea>
								Country of Origin: <textarea  name="countryOrigin" class="form-control" rows="1"> '.$row["CountryofOrigin"].' </textarea>
								 Uses: 
								<textarea class="form-control" rows="2" name="uses"> '.$row["Uses"].'</textarea>
								Packaging: <textarea  name="packaging" class="form-control" rows="1"> '.$row["Packaging"].'</textarea>
							<br>
							<button class="button12" name="editProductConfirmation"> <span class="glyphicon glyphicon-floppy-save"></span>  Save </button>
							</div> </div>
							</form>
							</div>
						';
					}
					else if(isset($_POST['editProductConfirmation']) && isset($_SESSION['myID'])){
						
						$flag = true;
						include '../../eaPortions/dbConnect.php';
						include '../../eaPortions/ea-header.php';

						$englishName=mysqli_real_escape_string($db,$_POST['englishName']);
						$localName=mysqli_real_escape_string($db,$_POST['localName']);
						$botanicalName=mysqli_real_escape_string($db,$_POST['botanicalName']);
						$familyName=mysqli_real_escape_string($db,$_POST['familyName']);
						$season=mysqli_real_escape_string($db,$_POST['season']);
						$partsUsed=mysqli_real_escape_string($db,$_POST['partsUsed']);
						$description=mysqli_real_escape_string($db,$_POST['description']);
						$appearance=mysqli_real_escape_string($db,$_POST['appearance']);
						$aroma=mysqli_real_escape_string($db,$_POST['aroma']);
						$flashPoint=mysqli_real_escape_string($db,$_POST['flashPoint']);
						$specificGravity=mysqli_real_escape_string($db,$_POST['specificGravity']);
						$refractiveIndex=mysqli_real_escape_string($db,$_POST['refractiveIndex']);
						$relativeIndex=mysqli_real_escape_string($db,$_POST['relativeIndex']);
						$esterValue=mysqli_real_escape_string($db,$_POST['esterValue']);
						$esterValueAfter=mysqli_real_escape_string($db,$_POST['esterValueAfter']);
						$opticalRotation=mysqli_real_escape_string($db,$_POST['opticalRotation']);
						$acidNumber=mysqli_real_escape_string($db,$_POST['acidNumber']);
						$totalAlcohol=mysqli_real_escape_string($db,$_POST['totalAlcohol']);
						$solubility=mysqli_real_escape_string($db,$_POST['solubility']);
						$solubleInWater=mysqli_real_escape_string($db,$_POST['solubleInWater']);
						$countryOrigin=mysqli_real_escape_string($db,$_POST['countryOrigin']);
						$uses=mysqli_real_escape_string($db,$_POST['uses']);
						$packaging=mysqli_real_escape_string($db,$_POST['packaging']);
						$id=$_SESSION["prodID"];
						$sqlUpdate="UPDATE productdetails set EnglishName='$englishName', LocalName='$localName', FamilyName='$familyName', BotanicalName='$botanicalName', Season='$season', PartsUsed='$partsUsed', Description ='$description', Appearance='$appearance' , Aroma='$aroma' , FlashPoint = '$flashPoint' , SpecificGravity='$specificGravity', RefractiveIndex='$refractiveIndex' , RelativeIndex='$relativeIndex' , EsterValue='$esterValue', EsterValueAfterAcetylation='$esterValueAfter', OpticalRotation ='$opticalRotation', AcidNumber='$acidNumber', TotalAlcohol = '$totalAlcohol', Solubility='$solubility' , Solubleinwater= '$solubleInWater', CountryofOrigin= '$countryOrigin', Uses='$uses', Packaging='$packaging' WHERE productID='$id'";
						$resultUpdate=mysqli_query($db,$sqlUpdate);

						if($resultUpdate){
							echo '<script>alert("Save Clicked"); </script>';
							include '../../eaPortions/editProduct.php';
							break; //to execute only once
						}
						else{
							echo '<script>alert("Save Failed"); </script>';
							include '../../eaPortions/editProduct.php';
							break; //to execute only once
						}
					}
				
				}
		}
			
		//end editing form
			//Product photo update from this > products list page and product show hide from this
			$result = mysqli_query($db,"SELECT COUNT(*) FROM productdetails");
			$row = mysqli_fetch_assoc($result);
			$size = $row['COUNT(*)'] + 1;

			//after adding new product <16 is changed to $size --Abiral
			for ($proId=1; $proId < $size ; $proId++) { 
				if (isset($_POST['changeProduct'.$proId]) && $_SESSION['myID']=="lowercase") 
				{

					$flag = true;

					include '../../eaPortions/dbConnect.php';

					include '../../eaPortions/ea-header.php';

					

					$file_name = $_FILES['image']['name'];
					$file_size =$_FILES['image']['size'];
					$file_tmp =$_FILES['image']['tmp_name'];
					$file_type=$_FILES['image']['type'];
					$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
					if ($file_ext == "jpeg" || $file_ext == "jpg") 
					{
						$query = "SELECT productPhoto,productName from products where productID = '$proId'";
						$results = mysqli_query($db, $query);
						$product = mysqli_fetch_assoc($results);
						//uploading jpeg
						move_uploaded_file($file_tmp, 'Uploads/'.$file_name);
						//converting jpeg to png (new file)
						imagepng(imagecreatefromstring(file_get_contents('Uploads/'.$file_name)), $product['productPhoto']);
						//deleteing jpeg
						unlink('Uploads/'.$file_name);
						echo "<script>alert('".$product['productName']. " Photo updated"."');</script>";
						include'../../eaPortions/adminHome.php';
						mysqli_close($db);
					}
					else if ($file_ext == "png") 
					{

						$query = "SELECT productPhoto,productName from products where productID = '$proId'";
						$results = mysqli_query($db, $query);
						$product = mysqli_fetch_assoc($results);
						move_uploaded_file($file_tmp, $product['productPhoto']);

						echo "<script>alert('".$product['productName']. " Photo updated"."');</script>";
						include'../../eaPortions/adminHome.php';
						mysqli_close($db);
					}
					else 
					{
						echo $file_ext;
						echo "<script>alert('File extension must be .PNG or .JPG');</script>";
						include'../../eaPortions/adminHome.php';
					}

					
				}
				//product show hide from this
				
				if (isset($_POST['Update'. $proId])){
					$flag = true;
					if (isset($_POST['showHide'])) {
						include '../../eaPortions/dbConnect.php';
						include '../../eaPortions/ea-header.php';

						$query = "UPDATE products SET visibility='yes' WHERE productID=".$proId;
						if (mysqli_query($db, $query)) 
						{	
							include'../../eaPortions/adminHome.php';
							echo '<script>alert("Successful Shown"); </script>';
						}
					}
					else{
						
						include '../../eaPortions/dbConnect.php';
						include '../../eaPortions/ea-header.php';
						$query = "UPDATE products set visibility='no' WHERE productID=".$proId;
						if (mysqli_query($db, $query)) 
						{	
							include'../../eaPortions/adminHome.php';
							echo '<script>alert("Successfully Hidden"); </script>';
						}

					}

				}	
				
				echo "</body>
				</html>";
			}
			//EDIT GALLERY -- Abiral

			if (isset($_POST['editGallery']) && $_SESSION['myID']=="lowercase") {
				$flag = true;
				include '../../eaPortions/dbConnect.php';
				include '../../eaPortions/ea-header.php';
				include '../../eaPortions/editAlbum.php';
				
				
			}

			else if (isset($_POST['addAlbum']) && $_SESSION['myID']=="lowercase") {
				$flag = true;
				include '../../eaPortions/dbConnect.php';
				include '../../eaPortions/ea-header.php';
					$albumName=mysqli_real_escape_string($db,$_POST['albumName']);
					$addAlbumQuery = "INSERT INTO albums(albumName) VALUES('$albumName')";
						if (mysqli_query($db, $addAlbumQuery)) 
						{	
							
							echo '<script>alert("Successfully Added"); </script>';
							

						}
						else
						{
							echo '<script>alert("New Album adding failed"); </script>';
						}
					include '../../eaPortions/editAlbum.php';
			}

			else if (isset($_POST['editPhotoAlbum']) && $_SESSION['myID']=="lowercase") {
				$flag = true;
					include '../../eaPortions/dbConnect.php';
					include '../../eaPortions/ea-header.php';
					$albumNumber= mysqli_real_escape_string($db,$_POST['editPhotoAlbum']);

					include '../../eaPortions/editAlbumGallery.php';
				}

			else if (isset($_POST['addPhotos']) && $_SESSION['myID']=="lowercase") {

				$flag = true;
				$albumNumber= mysqli_real_escape_string($db,$_POST['addPhotos']);
				include '../../eaPortions/dbConnect.php';
				include '../../eaPortions/ea-header.php';

				

				$total = count($_FILES['upload']['name']);

				// Loop through each file
				for($i=0; $i<$total; $i++) {
					$file_ext=strtolower(end(explode('.',$_FILES['upload']['name'][$i])));

					if ($file_ext == "jpeg" || $file_ext == "jpg" || $file_ext == "png") 
					{
						$sqlMaxPhotoValue=mysqli_query($db,"SELECT COALESCE(MAX(photoPK),0) + 1 AS photoName FROM gallery");
						$maxValue=mysqli_fetch_assoc($sqlMaxPhotoValue);
						//Get the temp file path
				  		$tmpFilePath = $_FILES['upload']['tmp_name'][$i];
						//uploading jpeg
						if(move_uploaded_file($tmpFilePath, "../img/gallery/" . $maxValue["photoName"].".png"))
						{
							$photoName="img/gallery/" . $maxValue["photoName"].".png";
							$sqlAddPhotos="INSERT INTO gallery(albumFK,photo) VALUES('$albumNumber','$photoName')";
							$resultAddPhotos = mysqli_query($db, $sqlAddPhotos);
							
						}
						else
						{
							echo '<script>alert("Photos adding failed"); </script>';
						}
						
					}
					else 
					{
						echo $file_ext;
						echo "<script>alert('File extension must be .PNG or .JPG');</script>";
					}

				}
                include '../../eaPortions/editAlbumGallery.php';
			}
            
            else if (isset($_POST['saveNewAlbumName']) && $_SESSION['myID']=="lowercase") {
                $flag = true;
                include '../../eaPortions/dbConnect.php';
				include '../../eaPortions/ea-header.php';
                $newAlbumName=mysqli_real_escape_string($db,$_POST['newAlbumName']);
                $pkAlbum=mysqli_real_escape_string($db,$_POST['saveNewAlbumName']);
                
                $sqlUpdateAlbumName="UPDATE albums set albumName='$newAlbumName' WHERE albumPK='$pkAlbum'";
				$resultUpdateAlbumName=mysqli_query($db,$sqlUpdateAlbumName);
                
                if ($resultUpdateAlbumName)
                {
                    echo "<script>alert('Album Name Updated successful');</script>";
                    include '../../eaPortions/editAlbum.php';
                }
                else
                {
                     echo "<script>alert('Album Name Updated failed');</script>";
                    include '../../eaPortions/editAlbum.php';
                }
            }
            
               else if (isset($_POST['deleteAlbum']) && $_SESSION['myID']=="lowercase") {
                $flag = true;
                include '../../eaPortions/dbConnect.php';
				include '../../eaPortions/ea-header.php';
                
                $pkAlbum=mysqli_real_escape_string($db,$_POST['deleteAlbum']);
                
                $sqlDeleteAlbum="DELETE from albums where albumPK='$pkAlbum'";
				$resultDeleteAlbum=mysqli_query($db,$sqlDeleteAlbum);
                   
                $sqlDeleteGallery="DELETE from gallery where albumFK='$pkAlbum'";
				$resultDeleteGallery=mysqli_query($db,$sqlDeleteGallery);   
                
                if ($resultDeleteAlbum && $resultDeleteGallery)
                {
                    echo "<script>alert('Album Delete successful');</script>";
                    include '../../eaPortions/editAlbum.php';
                }
                else
                {
                     echo "<script>alert('Album Delete failed');</script>";
                    include '../../eaPortions/editAlbum.php';
                }
            }
            
            else if (isset($_POST['deletePhoto']) && $_SESSION['myID']=="lowercase") {
                $flag = true;
                include '../../eaPortions/dbConnect.php';
				include '../../eaPortions/ea-header.php';
                $deletePhoto=mysqli_real_escape_string($db,$_POST['deletePhoto']);
                echo $deletePhoto;
                $sqlDeletePhoto="DELETE from gallery WHERE photo='$deletePhoto'";
				$resultDeletePhoto=mysqli_query($db,$sqlDeletePhoto);
                
                if($resultDeletePhoto)
                {
                    echo "<script>alert('Photo delete successful');</script>";
                    include '../../eaPortions/editAlbum.php';
                }
            }
            
             else if (isset($_POST['makeAlbumCover']) && $_SESSION['myID']=="lowercase") {
                $flag = true;
                include '../../eaPortions/dbConnect.php';
				include '../../eaPortions/ea-header.php';
                $albumCover=mysqli_real_escape_string($db,$_POST['makeAlbumCover']);
                $checkAlbumFK=mysqli_real_escape_string($db,$_POST['checkAlbumFK']);
                
                 
                $sqlAlbumCover="UPDATE gallery SET albumCover='Y' where photoPK='$albumCover'";
                $resultAlbumCover=mysqli_query($db,$sqlAlbumCover);
                 
                $sqlAlbumCoverToggle="UPDATE gallery SET albumCover='N' where photoPK!='$albumCover' AND albumFK='$checkAlbumFK'";
                $resultAlbumCoverToggle=mysqli_query($db,$sqlAlbumCoverToggle);
                
                if($resultAlbumCover && $resultAlbumCoverToggle)
                {
                    echo "<script>alert('Cover Photo successfully added');</script>";
                    include '../../eaPortions/editAlbum.php';
                }
            }
            
            
		//products list from this > ea-header.php 

			if (isset($_POST['productsList']) && $_SESSION['myID']=="lowercase") {
				$flag = true;
				include '../../eaPortions/dbConnect.php';
				include '../../eaPortions/ea-header.php';
				include'../../eaPortions/adminHome.php';
				echo "</body></html>";
				mysqli_close($db);
			}

			if ($flag==false) {
				include 'index.html';
			}
		}
		?>
		


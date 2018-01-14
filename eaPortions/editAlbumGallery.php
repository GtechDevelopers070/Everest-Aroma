<div class="container-fluid">
		
		<center>
		<div class="albumHeading">
			 Add new photos here
		</div>
	</center>
	<div class="row">
		<div class="col-md-4">
		</div>
		
	<div class="col-md-4">
		<form action="ea-admin-home.php" method="POST" enctype="multipart/form-data"> 
			  <div class="addAlbumBody">
			  	<center>
					<label for="albumName">Choose Photos: </label>
					

			  		<input class="btn btn-success" name="upload[]" type="file" multiple="multiple" /> 
			  		
			  		<br>
			   		 <button class="btn btn-primary" type="submit" name="addPhotos" value=<?php echo '"'.$albumNumber.'"'; ?> > Add Photos </button>
			    	</center></div>
		</form>
	</div>

	<div class="col-md-4">
		</div>
</div>

	<hr>
		<form action="ea-admin-home.php" method="post">
		<?php
			$sqlAlbum="SELECT * from albums where albumPK='$albumNumber'";
			$resultAlbum= mysqli_query($db, $sqlAlbum);

			  if (mysqli_num_rows($resultAlbum) > 0) {

		      while($row = mysqli_fetch_assoc($resultAlbum)) {
				echo '<center>';
               	echo '<textarea   rows="1" cols="40" name="newAlbumName">'.$row['albumName'].' </textarea>';
                  echo '</center>';
                  echo '<br><center>';
             	echo '<button class="btn btn-info" name="saveNewAlbumName" value="'.$row['albumPK'].'">Save</button>  ';
                echo '<button class="btn btn-danger" name="deleteAlbum" value="'.$row['albumPK'].'">Delete Album</button>';
                echo '</center>';	 
					
			}
		}
		?>
		</form>
	
			<div class="row">
			<?php
				$photoDisplay = "SELECT albumFK, photo, photoPK from gallery where albumFK ='$albumNumber'";

		    	$photoResult = mysqli_query($db, $photoDisplay);

		    	$count = 0;

		    	if (mysqli_num_rows($photoResult) > 0) {

		      		while($photoEdit = mysqli_fetch_assoc($photoResult)) {

		      if($count == 3){
		                  echo '</div>';//row closed
		                  echo '<div class="row">' ;//new row
		                  $count=0;
		            }
		            echo' 
                    <div class="col-sm-4">
		             <br>      
		                  
		                  	<div class="panel panel-default ">
			                    <div class="panel-body">
                                      <center>
                                        <img src="../'.$photoEdit["photo"].'" class="imgAlbumCover" > 
                                      </center>
                                      
			                    </div>
			                    
		                  	</div>
		                 
                         <form action="ea-admin-home.php" method="post">
		              <center>
                        <button class="btn btn-danger" name="deletePhoto" value="'.$photoEdit["photo"].'">Delete </button>
                        
                       	<input type="text" style="display: none;" name="checkAlbumFK" value="'.$photoEdit["albumFK"].'" />
                         
                         <button class="btn btn-success" name="makeAlbumCover" value="'.$photoEdit["photoPK"].'">Make Album Cover </button>
                         </center>
                         </form>
                      </div><!--end of col-sm-3-->
		            	
		            	
                        '
		            ;
		            $count++;
		      }
		    }
			?>

	</div>

</div>
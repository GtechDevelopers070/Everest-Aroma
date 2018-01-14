<div class="container-fluid">

	<center>
		<div class="albumHeading">
			 Add new album here
		</div>
	</center>
	<div class="row">
		<div class="col-md-4">
		</div>
		
	<div class="col-md-4">
		<form action="ea-admin-home.php" method="POST"> 
			  <div class="addAlbumBody">
					<label for="albumName">Album Name: </label>
				</div>
			  		<input class="form-control" type="text" name="albumName" id="albumName" >
			  		<center>
			   		 <input class="formLink" type="submit" name="addAlbum" value="Add Album">
			    	</center>
		</form>
	</div>

	<div class="col-md-4">
		</div>
</div>
<hr>
	<center>
		<div class="albumHeading">
			 Click to Edit Album
		</div>
	</center>

	<div class="addAlbumBody">
		<div class="row">
			<?php
				$albumsQuery = 'SELECT albumPK, albumName, 
		                    CASE WHEN photo IS NULL THEN "img/defAlbCov.jpg"
		                    ELSE photo
		                    END  AS photoPath  
		                    FROM albums LEFT OUTER JOIN (SELECT albumFK, photo FROM gallery WHERE albumCover = "Y") AS gallery 
		                    ON (albumPK = albumFK)
		                    ';

		    $albums = mysqli_query($db, $albumsQuery);

		    $count = 0;

		    if (mysqli_num_rows($albums) > 0) {

		      while($album = mysqli_fetch_assoc($albums)) {

		      if($count == 3){
		                  echo '</div>';//row closed
		                  echo '<div class="row">';//new row
		                  $count=0;
		            }
		            echo' <div class="col-md-4">
		                   <form action="ea-admin-home.php" method="post">
		                  <button style="min-width: 100%;" name="editPhotoAlbum" value="'.$album["albumPK"].'">
		                  	<div class="panel panel-default galleryAlbums">
			                    <div class="panel-body">
			                      <center>
			                        <img src="../'.$album["photoPath"].'" class="imgAlbumCover"> 
			                      </center>
			                    </div>
			                    <div class="panel-footer">
			                      <center>
			                        <div>
			                         
	                					<h3>'.$album["albumName"].'</h3>
	              						
			                        </div>
			                      </center>
			                    </div>
		                  	</div>
		                  </button>
		               </form>   
		            </div><!--end of col-sm-4-->';
		            $count++;
		      }
		    }
			?>

	</div>

</div>

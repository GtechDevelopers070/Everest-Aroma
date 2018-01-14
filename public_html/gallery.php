<!DOCTYPE html>
<html lang="en">
<head>

	<title> GALLERY|Everest Aroma</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link href="css/bootstrap.min.css" rel="stylesheet"> <!--linking bootstrap minified verseion-->
  <link rel="stylesheet" type="text/css" href="css/navbarStyle.css">
  <link rel="stylesheet" href="css/galleryStyle.css">
  <link rel="stylesheet" type="text/css" href="css/footerStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


  <script type="text/javascript" src="js/script.js"></script>
  <!--fonts-->
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


  <!--Godey-17/11/2017-->

  <style type="text/css">
    .galleryAlbums{
      box-shadow: -8px 10px 10px 0.63px rgba(77,77,77,0.43);
      min-width: 100%; 
      cursor: pointer;
    }
    .galleryAlbums::after {
      content: '';
      position: absolute;
      background-color: rgba(255, 255, 255, 0.01);
      top: 0;
      left: 4%;
      z-index: 2;
      width: 92%;
      height: 96%;
      opacity: 0;
      -webkit-box-shadow: inset -8px 14px 46px 3px rgba(0,0,0,0.75);
      -moz-box-shadow: inset -8px 14px 46px 3px rgba(0,0,0,0.75);
      box-shadow: inset -8px 14px 46px 3px rgba(0,0,0,0.75);
      transition: opacity 0.2s ease-in-out;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px;
    }
    .galleryAlbums:hover::after {
      opacity: 1;
    }
    .panel-body{
      min-height: 300px;
    }

    .imgAlbumCover {
      width: 100%;
      height: 100%;
      object-fit: contain
    }

    .albumCoverNames{
      color: #444444;
      text-decoration: none;
    }

    .albumCoverNames:hover{
      color: #444444;
      text-decoration: none;
    }

    body::after {
      content: "";
      background: url(img/gallery/gallery_a.jpg);
      background-size: cover;
      opacity: 0.08;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      position: absolute;
      z-index: -1;   
    }
  </style>



  <!--Godey-17/11/2017-->

  <?php 
  include('navbar.html'); 
  ?>
  <div class="gallery">
    <div class="row">
      <div class="col-xs-12">
        <div style="min-height: 70px; max-width:100%; overflow:hidden;">

        </div>
      </div>
    </div>
    <!--Godey-17/11/2017-->
    <h1 class="titleFont" style="text-align: center;">GALLERY</h1>
    <div class="container">
      <div class="row">

    <?php
    include '../eaPortions/dbConnect.php';
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
                  <a href="galleryPictures.php?viewAlbum='.$album["albumPK"].'" class="albumCoverNames">
                  <div class="panel panel-default galleryAlbums">
                    <div class="panel-body">
                      <center>
                        <img src="'.$album["photoPath"].'" class="imgAlbumCover"> 
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
                </a>
            </div><!--end of col-sm-4-->';
            $count++;
      }
    }

    ?>

    

        
          <!-- <a href="galleryPictures.php" class="albumCoverNames">
          <div class="panel panel-default galleryAlbums">
            <div class="panel-body">
              <center>
                <img src="img/gallery/gallery_a.jpg" class="imgAlbumCover">
                <div>

                </div>
              </center>
            </div>
            <div class="panel-footer">
              <center>
                <div>
                  <h3>
                    Dhanusa Project
                  </h3>
                </div>
              </center>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default galleryAlbums">
            <div class="panel-body">
              <center>
                <img src="img/gallery/gallery_b.jpg" class="imgAlbumCover">
                <div>

                </div>
              </center>
            </div>
            <div class="panel-footer">
              <center>
                <div>
                  <h3>
                    Nawalparasi
                  </h3>
                </div>
              </center>
            </div>
          </div>
        </div>-->
      </div>
    </div> 
    <!--Godey-17/11/2017-->
  </div>
</div>
</div>
</div>

<br>
<?php
include('footer.php');
?>
</body>
</html>
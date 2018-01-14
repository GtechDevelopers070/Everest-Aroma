<!DOCTYPE html>
<html lang="en">
<head>

	<title> GALLERY|Everest Aroma</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    .galleryPictures{
      box-shadow: -8px 10px 10px 0.63px rgba(77,77,77,0.43);
      min-width: 100%; 
      cursor: pointer;
    }
    .galleryPictures::after {
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
    .galleryPictures:hover::after {
      opacity: 1;
    }
    .panel-body{
      min-height: 300px;
    }

    .imgPicThumb {
      width: 100%;
      height: 100%;
      object-fit: contain
    }
    body::after {
      content: "";
      background: url(img/gallery/gallery_c.jpg);
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
    <h1 class="titleFont" style="text-align: center;">Dhanusa Project</h1>
    <div class="container">
      <!-- <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default galleryPictures">
            <div class="panel-body">
              <center>
                <div class="box"><a href="img/gallery/gallery_c.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 1" data-footer="Some footer information"><img src="img/gallery/gallery_c.jpg" alt="" class="img-responsive imgPicThumb"></a></div>
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default galleryPictures">
            <div class="panel-body">
              <center>
                <div class="box"><a href="img/gallery/gallery_d.jpg" title="" data-toggle="lightbox" data-gallery="portfolio" data-title="Portfolio image 1" data-footer="Some footer information"><img src="img/gallery/gallery_d.jpg" alt="" class="img-responsive imgPicThumb"></a></div>
              </center>
            </div>
          </div>
        </div>
      </div> -->
      <div class="row">
      <?php
        include '../eaPortions/dbConnect.php';

        if (isset($_GET['viewAlbum'])){
          $id = $_GET['viewAlbum'];

          $photos = "select albumFK, photo from gallery where albumFK = ". $id. " ORDER BY photoPK DESC";

          $resultPhotoRetrieve = mysqli_query($db, $photos);

          $count=0;

          while($image = mysqli_fetch_assoc($resultPhotoRetrieve)) {

            if($count == 3){
                  echo '</div>';//row closed
                  echo '<div class="row">';//new row
                  $count=0;
            }
            echo '
              <div class="col-sm-4">
                <div class="box">
                  <a href="'.$image['photo'].'" title="" data-toggle="lightbox" data-gallery="'.$image['albumFK'].'" data-title="" data-footer="">
                    <div class="panel panel-default galleryPictures">
                    <div class="panel-body">
                     <img src="'.$image['photo'].'" alt="" class="img-responsive">
                    </div>
                  </div>
                </a>
              </div>
            </div>
            ';
          }
        }
        else
        {
          echo '<meta http-equiv="refresh" content="0;galleryPictures.php?viewAlbum=1">';
        }


      ?>
        <!-- <div class="col-sm-4">
          <div class="box">
            <a href="img/gallery/gallery_c.jpg" title="" data-toggle="lightbox" data-gallery="dhanusa" data-title="" data-footer="">
              <div class="panel panel-default galleryPictures">
                <div class="panel-body">
                 <img src="img/gallery/gallery_c.jpg" alt="" class="img-responsive">
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box">
            <a href="img/gallery/gallery_b.jpg" title="" data-toggle="lightbox" data-gallery="dhanusa" data-title="" data-footer="">
              <div class="panel panel-default galleryPictures">
                <div class="panel-body">
                 <img src="img/gallery/gallery_b.jpg" alt="" class="img-responsive">
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box">
            <a href="img/gallery/gallery_a.jpg" title="" data-toggle="lightbox" data-gallery="dhanusa" data-title="" data-footer="">
              <div class="panel panel-default galleryPictures">
                <div class="panel-body">
                 <img src="img/gallery/gallery_a.jpg" alt="" class="img-responsive">
                </div>
              </div>
            </a>
          </div>
        </div> -->
      </div>
    </div>
    <!--Godey-17/11/2017-->
  </div>
</div>
</div>
</div>

<script src="js/jquery-1.11.0.min.js"></script>
<!-- Bootstrap CDN-->
<script src="js/bootstrap_3_3_5.js"></script>
<!-- Lightbox-->
<script src="js/ekko-lightbox.js"> </script>
<!-- Sticky + Scroll To scripts for navbar-->
    <!-- <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script> -->
    <!-- main script-->
    <script src="js/front.js"></script>

    <br>
    <?php
    include('footer.php');
    ?>
  </body>
  </html>
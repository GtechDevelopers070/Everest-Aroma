<!DOCTYPE html>
<html lang="en">

<head>
  <title> PRODUCTS | Everest Aroma</title>
  <!-- Change this later-->
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--fonts-->
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/productsStyle.css">
  <link rel="stylesheet" href="css/footerStyle.css">
  <link rel="stylesheet" type="text/css" href="css/navbarStyle.css">

  <?php
      include 'navbar.html';
      ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div style="min-height: 70px; max-width:100%; overflow:hidden;">

          </div>
        </div>
      </div>
      <!-- Quality assurance start-->
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="forbutton">
              <button data-toggle="modal" data-target="#QA">
                <div class="titleFont">Quality Assurance</div>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="QA" tabindex="-1" role="dialog" aria-labelledby="Quality_Assurance" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="Quality_Assurance">
                <div class="titleFont">QUALITY ASSURANCE</div>
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="contentFont">
                <p>Quality of the product is the basic aspect of the product. Emphasizing on this matter we include standard
                  methods for quality control and our quality standards are mentioned below:</p>
                <p>1. Verification of the plants botanical species</p>
                <p>2. Crops were not subjected to agrochemicals</p>
                <p>3. Low pressure distillation techniques employed</p>
                <p>4. Visually inspecting the oil</p>
                <p>5. Odour evaluation of the oil</p>
                <p>6. Measuring the oils physical parameters Testing the oils purity using .GC or GC/MS technology</p>

                <p>We believe that essential oil quality control should begin at the earliest stage of production, preferably
                  with inspection of the crop at the growing phase. This important aspect is often overlooked when considering
                  quality issues, and this is why we have established close working relationships with growers around the
                  world.
                </p>

                <p>When growing plants specifically for the extraction of essential oils, the location, altitude, fertility
                  of the soil, weather conditions and the method of cultivation all have an influence upon its oil content
                  and quality. This is why an essential oil produced in one country can be of a higher quality than precisely
                  the same oil produced in another. And it does not end there.</p>

                <p>At the extraction stage, the skill and experience of the distillery becomes the next critical factor in the
                  quest for excellence, since all the expertise and effort of the farmer will have been wasted if the oil
                  is not extracted correctly. We pay a lot of attention on this matter so all the process from cultivation
                  to delivering are done very systematically and skillfully. We carry out the whole process fluently ensuring
                  the product to be of the highest quality and fully naturally organic.</p>

                <p>Most of The products are collected from natural forest and the ones which are cultivated are cultivated on
                  very rural and natural areas where chemical fertilizers have no impact so we use fully organic fertilizers
                  which ensure the products to be naturally organic and to be of the highest quality.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Quality assurance finish-->


      <!--Our Products start-->
    </div>
    <h1 id="title">
      <div class="titleFont">Our Products in Manufacturing</div>
    </h1>
    <!--For heading-->
    <div class="container">
      <div class="row">
        <?php

                  include '../eaPortions/dbConnect.php';
                  $count=0;
                  $sql="SELECT * FROM products WHERE visibility ='yes'";

                  $result = mysqli_query($db, $sql);


                  if (mysqli_num_rows($result) > 0) {
                                  // output data of each row

                    while($row = mysqli_fetch_assoc($result)) {
                         echo '
                         <!--Rows with info-->
                         <!-- First three Read More Links edited by Kripesh -->

                         ';
                        if($count == 3){
                                    echo '</div>';//row closed
                                    echo '<div class="row">';//new row
                                    $count=0;
                              }
                              echo' <div class="col-sm-4">
                                    <a href="productsDescription.php?viewProduct'.$row["productID"].'='.$row["productName"].'">

                                    <div class="imag" style="background-image: url('. "'"."admin/".$row["productPhoto"]."'".');">

                                    </div>

                                    <div class="cent">
                                          <p class="nameProd">

                                                <div class="contentFontProducts titleFont">'.$row["productName"];

                                                      echo '</div>
                                                </p> <!--end of nameProd-->
                                          </a>

                                    </div><!--end of cent-->
                              </div><!--end of col-sm-4-->';
                              $count++;



                        }
                  }
            mysqli_data_seek($result, 0);//result ko pointer lai reset haneko
            echo '<br>';
            ?>


      </div>
    </div>
    <!--end of container-->



    <?php
                        include('footer.php');
                        ?>
      </body>
      <!--end of body-->

</html>
<!--end of html-->
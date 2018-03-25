<!DOCTYPE html>
<html>
<head>
  <title>Products Description</title>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/navbarStyle.css">
  <link rel="stylesheet" type="text/css" href="css/footerStyle.css">
  <link rel="stylesheet" type="text/css" href="css/productDetailsStyle.css">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--fonts-->
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>
<body>

  <?php 
  include('navbar.html'); 
  //when new product is added <16 is changed to $size in for loop --Abiral
  include '../eaPortions/dbConnect.php';
  $result = mysqli_query($db,"SELECT COUNT(*) FROM productdetails");
  $row = mysqli_fetch_assoc($result);
  $size = $row['COUNT(*)'] + 1;
  $id=1;
  for (; $id < $size; $id++) { 
    if (isset($_GET['viewProduct'.$id])) {
      include '../eaPortions/dbConnect.php';
      $sql = "select * from productdetails where productID = ". $id;
      $sqlPhotoRetrieve = "select * from products where productID =" .$id;
      $result = mysqli_query($db, $sql);
      $resultPhotoRetrieve = mysqli_query($db, $sqlPhotoRetrieve);
      $image = mysqli_fetch_assoc($resultPhotoRetrieve);
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
      }
      break;
    }
  }
  if ($row["productID"]==1) {
    $prevId = 1;
  }
  else{
    $prevId = $row["productID"] - 1;
  }

//15 is replaced by (size-1) --Abiral
  if ($row["productID"]==$size-1) {
    $nextId = $size - 1;
  }
  else{
    $nextId = $row["productID"] + 1;
  }


  //main container
  echo '';

  //next and previous
  echo '
  <div class="leftButtonProduct" onmousedown="buttonClickLeft()"> 
    <a href="productsDescription.php?viewProduct'.$prevId.'=dummy"><button type="button" class="btn btn-default buttonProduct" aria-label="Left Align">
      <span class="glyphicon glyphicon glyphicon-menu-left " aria-hidden="true"></span>
    </button></a>
  </div>
  <div class="rightButtonProduct" onmousedown="buttonClickRight()">
    <a href="productsDescription.php?viewProduct'.$nextId.'=dummy">  
      <button type="button" class="btn btn-default buttonProduct " aria-label="Left Align">
        <span class="glyphicon glyphicon glyphicon glyphicon-menu-right" aria-hidden="true"></span>
      </button></a>
    </div>';

    ?>


    <!--image-->
    <?php

    echo '  <div class="container-fluid catalog-bg">
              <div>
                <div class="main-inner-container">
                  <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                      <div class="row">

                        <div class="col-xs-12 col-md-6 col-xs-offset-1 col-sm-offset-0">
                          <div class="upper-left-container">
                            <img src="admin/'.$image["productPhoto"].'"class="product-image" alt="citronella">
                          </div>
                        </div>';

    echo '<div class="col-xs-12 col-md-6" >
            <div class="upper-right-container">
              <h1>
                '.$image['productName'].'
              </h1>';
//first div end: end of col-md-6, second div end: end of row

    $count = 0;   
    //key = column Name, value = column Data
    echo'<ul class="basicDescription">';
    foreach ($row as $key => $value) {
      $count++;
        if($count<8){
          if ($value != "" and $key != "productID") {

            echo '<li>
            '. $key.' :
            '. $value.'</li>';
          }
        }

        if($count==8)  {
        echo'</ul>
                </div>
              </div>

            </div>

            <div class="row">

              <div class="col-xs-12 col-md-6">
                <div class="lower-left-container">

                  <h2>Description</h2>';
        echo '<p>
        '. $value.'</p></div></div>';
      }

         else if ($count > 8)  {
          if ($count == 9){
            echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="lower-right-container">
                    
                    <h2>Physical and Chemical Properties</h2>
                    <ul>';
          }
        //printing the key,value of one large array
          if ($value != "" and $key != "productID") {
            echo '<li>
            '. $key.' :
            '. $value.'</li>';
          }
        }
    }


echo"               </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>"; //end of container fluid

?>

<!--footer-->
<?php
echo "<footer>";
include('footer.php');
echo "</footer>";    
?>

<!--script for side button-->
<script type="text/javascript"> 
  function buttonClickRight(){
    var buttonElements = document.querySelectorAll(".buttonProduct");
    //selecting the left button, 0 because it is the first class
    buttonElements.item(1).style.cssText = ' background: rgba(255,255,255,0); border-style:none; box-shadow:none;';  
  }

  function buttonClickLeft(){
    var buttonElements = document.querySelectorAll(".buttonProduct");
    //selecting the left button, 0 because it is the first class
    buttonElements.item(0).style.cssText = ' background: rgba(255,255,255,0); border-style:none; box-shadow:none;';  
  }

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>
</html>
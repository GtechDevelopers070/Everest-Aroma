<!DOCTYPE html>
<html>
<head>
  <title>Products Description</title>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/navbarStyle.css">
  <link rel="stylesheet" type="text/css" href="css/footerStyle.css">
  <link rel="stylesheet" type="text/css" href="css/productDetailsStyle.css">
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

    echo '<div class="totalDescription container"><div class="row titleAndPhotoAlign"><div class="col-md-7"><h1 class="productTitle">'.$image['productName'].'</h1></div><div class="col-md-5"><img class= "productPhotoDescription" src="admin/'.$image["productPhoto"].'"></div></div>';
    //first div end: end of col-md-6, second div end: end of row

    $count = 0;   
    //key = column Name, value = column Data
    echo'<div class="row"><div class = "col-md-6 col-md-push-6"><div class="basicDescription">';
    foreach ($row as $key => $value) {
      $count++;
      if ($count!=8) {
        if($count<8){
          if ($value != "" and $key != "productID") {

            echo '<p>
            '. $key.' :
            '. $value.'</p>';
          }
        }

         else if ($count > 8)  {
          if ($count == 9){
            echo '</div></div><div class="col-md-6 col-md-pull-6 productProperty">';
            echo'<h2  class="physicalTitle">Physical and Chemical Properties</h2>';
          }
        //printing the key,value of one large array
          if ($value != "" and $key != "productID") {
            echo '<p>
            '. $key.' :
            '. $value.'</p>';
          }
        }
      }
    }

    $count = 0;
    foreach ($row as $key => $value) {
      $count++;
      if($count==8)  {
        echo'</div></div><div class="productDescription">';
        echo '<p>
        '. $value.'</p></div>';
      }
    }


echo"</div>"; //end of total Description

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
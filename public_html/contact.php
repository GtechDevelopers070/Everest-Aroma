<!--coded by ayushghimire, this is related with contact us of the Everest Aroma-->
<!DOCTYPE html>
<html>
<head>
    <title> CONTACT US | Everest Aroma</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!--linking bootstrap minified verseion-->
    <link rel="stylesheet" type="text/css" href="css/navbarStyle.css">
    <link rel="stylesheet" type="text/css" href="css/footerStyle.css">
    <link rel="stylesheet" type="text/css" href="css/contactUsStyle_uat.css"><!--linking styling sheet -->
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <?php 
    include('navbar.html'); 
    ?>

    <div class="row" style="padding-bottom: 30px;padding-top: 40px;">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="well well-lg">
                <h1 class="company-details">Contact Details:</h1>
                <h1 class="company-name">Everest Aroma Pvt. Ltd</h1>
                <h2 class="company-address"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;Lalitpur, Nepal</h2>
                <h3 class="company-phone"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;&nbsp;&nbsp; +977-01-5546743</h3>
                <h3 class="company-phone"><span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;&nbsp; +977-9851035949</h3>
                <h3 class="company-email"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;&nbsp;info@everestaroma.com</h3>
                
                
            </div>
        </div>
        <div class="col-md-5">
            <div class="well well-lg" style=" margin-top: 30px;">
                <h1>Email Us</h1>
                <form action="contact_uat.php" method="POST">
                    <div class="form-group">
                      <label for="name"><h4>Name:</h4></label>
                      <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group">
                    <label for="email"><h4>Email:</h4></label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                  <label for="comment"><h4>Message:</h4></label>
                  <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
              </div>
              <input type="submit" name="submitEmail" value="Submit" class="btn btn-primary">
          </form>
      </div>
  </div>
  <div class="col-md-1"></div>
</div>

<?php 
if(isset($_POST['submitEmail'])){
    $msg = 'Everest Aroma. Contact us message. '.'
    Name= '.$_POST["name"].' 
    Email='.$_POST["email"].'
    Message='.$_POST["message"].'
    ';

// send email using PHP's built in 
// command, mail()
    mail('info@everestaroma@gmail.com', 
        'Test','developersgtech@gmail.com', $msg);


    echo '<script>alert("Email Sent Succesfully to champ.abiral@gmail.com"); </script>';
}
?>



<?php
include('footer.php');
?>
<!-- jquery already linked in navbar -->

</body><!--end of body-->
</html><!--end of html-->


<!--coded by ayushghimire, this is related with contact us of the Everest Aroma-->
<!DOCTYPE html>
<html>
    <head>
        <title> CONTACT US | Everest Aroma</title>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet"> <!--linking bootstrap minified verseion-->
        <link rel="stylesheet" type="text/css" href="css/navbarStyle.css">
        <link rel="stylesheet" type="text/css" href="css/footerStyle.css">
        <link rel="stylesheet" type="text/css" href="css/contactUsStyle.css"><!--linking styling sheet-->
        <script src="js/jquery.min.js"></script>
        <script src="js/script.js"></script>
        <!--fonts-->
      <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <?php 
            include('navbar.html'); 
        ?>
        

        <!-- head close and body open in navbar.html -->
        <div id="contactInfo">	
            <div class="container part1"> 
                <div class="row"> <!--first two photo-->
                    <div class="col-sm-1"></div>
                    <div class ="col-sm-5">
                        <div class=" row blockNumOne">
                            <div class="col-xs-6 ">
                                <img src="img/contactPerson.svg" class="imgCircle image1" > 
                            </div> <!--end of small -->

                            <div class="col-xs-6 ">
                                <h2 class="first firstName"><div class="titleFont">Sandeep Baral (Mr.)</div></h2>
                                <h4 class="first firstPosition"><i><div class="contentFont">Managing Director</div></i></h4>
                                <h5 class="first firstOfficeNum"><div class="contentFont">+977-01-5546743</h5>
                                <h5 class="first firstMobNum"><div class="contentFont">+977-9851035949</div></h5>
                                <h6 class="first firstEmail"><div class="contentFont">sales@everestaroma.com</div></h6>		
                            </div><!--end of col-md-6-->

                        </div> <!--end of row blockNumOne-->
                    </div><!--end of col-sm-5-->

                    <div class ="col-sm-5">
                        <div class=" row blockNumOne">
                            <div class="col-xs-6 ">
                                <img src="img/contactPerson.svg" class="imgCircle image1 " > 
                            </div> <!--end of small -->

                            <div class="col-xs-6" >
                                <h2 class="first firstName"><div class="titleFont">Susma Pangeni (Mrs.)</div></h2>
                                <h4 class="first firstPosition"><i><div class="contentFont" style="text-align: left;">Marketing Manager</div></i></h4>
                                <h5 class="first firstOfficeNum"><div class="contentFont">+977 9846355999</h5>
                                <h5 class="first firstMobNum"><div class="contentFont">susma@everestaroma.com</div></h5>
                                   
                            </div><!--end of col-md-6-->

                        </div> <!--end of row blockNumOne-->
                    </div><!--end of col-sm-5-->
                </div><!--end of row -->
            </div><!--end of container-->

            <div class="rectangle">

                <div class="container part2"> 
                    <div class="row"> <!--first two photo-->
                        <div class="col-sm-1"></div>
                        <div class ="col-sm-5">
                            <div class=" row blockNumThree">

                                <div class="col-xs-6">
                                    <img src="img/contactPerson.svg" class="imgCircle image1 " > 
                                </div> <!--end of small -->

                                <div class="col-xs-6 ">
                                    <h2 class="first firstName"><div class="titleFont">Pradeep Baral (Mr.)</div></h2>
                                    
                                    <h5 class="first firstOfficeNum"><div class="contentFont">5602 Somerset Ave Westerville, Ohio 43082</div></h5>
                                    <h5 class="first firstMobNum"><div class="contentFont"> +1 6185131171</div></h5>
                                    <h6 class="first firstEmail"><div class="contentFont">sales@everestaroma.com</div></h6>		
                                </div><!--end of col-md-6-->

                            </div> <!--end of row blockNumThree-->
                        </div><!--end of col-sm-5-->

                        <div class="col-sm-5">
                            <div class=" row blockNumFour">

                                <div class="col-xs-6">
                                    <img src="img/contactPerson.svg" class="imgCircle image1 " > 
                                </div> <!--end of small -->

                                <div class="col-xs-6 ">
                                    <h2 class="first firstName"><div class="titleFont">Alina Kierans (Mrs.)</div></h2>
                                    <h4 class="first firstPosition"><i><div class="contentFont">Sales & Communication Manager</div></i></h4>
                                    
                                    <h5 class="first firstMobNum"><div class="contentFont">Drogheda, Ireland</div></h5>
                                    <h6 class="first firstEmail"><div class="contentFont">sales@everestaroma.com</div></h6>	
                                    <h6 class="first firstEmail"><div class="contentFont">everestaromasales@gmail.com</div></h6>		
                                </div><!--end of col-md-6-->	

                            </div><!--end of row blockNumFour-->
                        </div> <!--end of col-sm-5-->

                        <div class="col-sm-1"></div>
                    </div><!--end of row-->
                </div><!--end of container-->
            </div>
        </div><!--end of contactInfo-->



        <div id="emailUs">
            <div class="removeIcon"><div class="contentFont"> Close</div> </div> 
            <div class="container-fluid">
                
                <div class="emailHolder">

                    <div class="row">		
                        <div class="col-xs-1"></div> <!--margin-->	
                        <div class="col-xs-10 hidden-md hidden-sm hidden-xs">
                            <h2 class="heading"><div class="contentFont"> Email Us ["We're currently working on this section. Sorry for the inconvenience. Please contact us via info@everestaroma.com"]</div></h2></div>
                        <div class="col-xs-10 hidden-lg">
                            <h4><div class="contentFont"> Email Us ["We're currently working on this section. Sorry for the inconvenience. Please contact us via info@everestaroma.com"]</div></h4></div>
                    </div><!--end of row-->

                    
                    <form class="afterEmailClick" method="post" action="php/email.php">
                        <div class="row">	   

                            <div class="col-xs-2">	
                                <p class="emailUsLabel"><div class="contentFont">Name:</div></p>
                            </div><!--end of col-sm-1-->

                            <div class="col-xs-2 yourName">
                                <input placeholder="your name" type="text" name="name" >
                            </div> <!--end of yourEmail-->
                        </div><!--end of row-->

                        <div class="row">
                            <div class="col-xs-2">		
                                <p class="emailUsLabel"><div class="contentFont"> Email:</div></p>
                            </div><!--end of col-sm-1-->

                            <div class="col-xs-2 yourEmail">
                                <input placeholder="your email" type="text" name="fromAddress" >
                            </div><!--end of yourEmail-->
                        </div><!--end of row-->

                        <div class="row">
                            
                            <div class="col-xs-2">	
                                <p class="messageTextArea emailUsLabel"><div class="contentFont">Message:</div></p>
                            </div><!--end of col-sm-1-->

                            <div class="col-xs-2  messageTextArea">
                                <textarea placeholder="feedbacks or any querris"></textarea>
                            </div><!--end of messageTextArea-->
                        </div><!--end of row-->	


                        <div class="row">
                            <div class="col-xs-4 col-sm-2"></div><!--margin-->
                            <div class="col-xs-4 col-sm-4 buttonSubmit">
                                <input class="submitButton" type="submit" value="Submit">
                            </div><!--end of buttonSubmit-->
                        </div><!--end of row-->

                    </form><!--end of form-->

                </div><!--end of container-->		
            </div><!--end of emailUs-->
        </div> <!--holder for emailUs-->

        <button type="button" class="btn btn-primary buttonCircle"><i class="glyphicon glyphicon-envelope "></i></button>

        <?php
            include('footer.php');
        ?>
        <!-- jquery already linked in navbar -->

    </body><!--end of body-->
</html><!--end of html-->


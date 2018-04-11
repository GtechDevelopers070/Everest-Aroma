<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- jQuery library -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	
	<title> Everest Aroma</title><!-- Change this later-->
	<link rel= "stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/uat_navbarStyle.css">
	<link rel="stylesheet" href="css/footerStyle.css">
	<link rel="stylesheet" href="css/uat_homeStyle.css">
	
	<script type="text/javascript" src="js/script.js"></script>
	<!--fonts-->
	<script src="js/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/ee3390d505.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<script type="text/javascript">
		function myhref(web){
			window.location.href = web;
		}
	</script>
	<?php
	include 'navbar.html'
	?>
	<!-- Full News Modal -->
	<div class="homeModal" id="newsModal">
		<div class="homeModalContent">
			<?php
			include '../eaPortions/dbConnect.php';
			$sqlNews = "SELECT * FROM news ORDER BY NewsID DESC LIMIT 1";
			$result=$db->query($sqlNews);

			if ($result->num_rows > 0) {
                     			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo '<h1>'.$row["NewsTitle"].'</h1>';
					echo'<span id="modalClose">&times;</span>';
					
					echo '<div class="totalNews">'.$row["NewsContents"].'</div>';

				}
			}
			?>
		</div>
	</div>
	<!-- Full News Modal End -->
	<div class="site-wrapper">
		<div class="header-wrapper"><!--top part enclosed in this div-->

			<!-- Navbar moved up to the stars -->

			<div class="everest-aroma-header">
				<div class="title-header-wrapper">
					<div style="text-align:center; ">
						<div style="display:inline-block;">
							<span class="logo-container"><img src="img/logo.png" style="width: inherit; height: inherit;"></span>
							<h1 class="font-not-cursive">Everest Aroma</h1>
						</div>
					</div> 
					<p class="font-cursive" id="subTitle">"Organic Essence </p> <p class="font-cursive" id="subTitleSub">  from Himalaya"</p>
				</div>
				<div class="img-header-wrapper">
					<img id="imgChangeWidth" src="img/EA_header_PS.png">

				</div>
			</div>

			<div class="navbar-alternate">
        <div class="myNavbar navbar-alternate-wrapper">
            <div class="gap"></div>
            <div class="menu" onclick="leftNavbar()">
                <div class="hamburger"></div>
                <div class="hamburger"></div>
                <div class="hamburger"></div>
            </div>
            <div class="linkPages">
                <ul class="navLeft">

                    <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="aboutUs.php">ABOUT US</a>
                    </li>
                    <li>
                        <a href="contact.php">CONTACT US</a>
                    </li>
                    <li>
                        <a href="products.php">PRODUCTS</a>
                    </li>
                </ul>
                <ul class="navRight">
                    <li>
                        <a href="certification.php">CERTIFICATION</a>
                    </li>
                    <li>
                        <a href="gallery.php">GALLERY</a>
                    </li>
                    <li>
                        <a href="faq.php">FAQ</a>
                    </li>

                </ul>
            </div>
        </div>
		</div>
		
			<!--gru part starts-->
			<nav class="navbar-wrapper">
				<!--Navigation bars FAQ left to add(if here)-->
				<div class="row">
				<!-- latest design ma navako vaera commented the logo -->
					<!-- <div class="col-lg-2 ">
						<div class="eaLogo">
							<center><img class="img-responsive" src="EALogo-2.jpg" alt="EA_LOGO" />
							</center>
						</div>
					</div> -->
					<div class="col-lg-11">		
						<ul class="nav navbar-nav">
							<li> <a class="active" href="index.php"><div class="titleFont"> Home </div></a></li>
							<li class="shape">  </li>
							<li> <a  href="aboutUs.php"><div class="titleFont"> About us </div></a></li>
							<li class="shape"> </li>
							<li> <a  href="products.php"><div class="titleFont"> Products </div></a></li>
							<li class="shape"> </li>
							<li> <a  href="certification.php"><div class="titleFont"> Certification </div></a></li>
							<li class="shape"> </li>
							<li> <a  href="gallery.php"><div class="titleFont"> Gallery </div></a></li>
							<li class="shape"> </li>
							<li> <a  href="contact.php"><div class="titleFont"> Contact us </div></a></li>
							<li class="shape"> </li>
							<li> <a  href="faq.php"><div class="titleFont"> FAQ</div></a></li>
						</ul>
					</div>
				</div>

			</nav>
			<!--End of Navigation Bar -->

			<div class="ribbon"></div>
	
		</div>
		<div class="body-wrapper">
					
		<div class="container-fluid">
			<div class="row row-eq-height">
				<div class="col-md-6 col-xs-12">
					<div class="carousel-wrapper">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">

								<div class="item active carHeight">
									
									<img src="img/home/EA-Temp.jpg" class="cover" alt="Image">
									<!-- <div class="carousel-caption">
										<div id="Main">
											<div class="contentFont">
												<center>
													"Organic Essense of Himalaya"
												</center>
											</div>
										</div>
										<div id="Sub">
											<div class="titleFont">
												Everest Aroma
											</div>
										</div>
									</div> -->
								</div>

								<div class="item carHeight">
									<img src="img/home/slider_1.jpg" class="cover" alt="Image">
									<!-- <div class="carousel-caption">
										<div id="Main">
											<div class="contentFont">
												<center>
													"Organic Essense of Himalaya"
												</center>
											</div>
										</div>
										<div id="Sub">
											<div class="titleFont">
												Everest Aroma
											</div>
										</div>
									</div> -->
								</div>

								<div class="item carHeight">
									<img src="img/home/slider_2.jpg" class="cover" alt="Image">
									<!-- <div class="carousel-caption">
										<div id="Main">
											<div class="contentFont">
												<center>
													"Organic Essense of Himalaya"
												</center>
											</div>
										</div>
										<div id="Sub">
											<div class="titleFont">
												Everest Aroma
											</div>
										</div>
									</div> -->
								</div>

							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>

						</div>
					</div><!--header-->
					<!--danny part ends-->
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="certificates-wrapper">
						<div class="certificates-holder">
							<center>
								<div class="col-xs-6">
									<div class="certificate-img">
									<a href="http://www.euroleaf.org/">
										<img src="img/home/EU-Organic.jpg" class="img img-responsive">
									</a>
								</div>	
									<span>Non EU Agriculture</span>
								</div>
							</center>
							<center>
								<div class="col-xs-6">
									<div class="certificate-img">
									<a href="https://www.ams.usda.gov/services/organic-certification">
										<img src="img/home/USDA.png" class="img img-responsive certificationImg">
									</a>
									</div>
								</div>	
								<span>100% Organic</span>									
							</center>
						</div>
						<span class="certificates-title">Certificates</span>
				</div>
			</div>
		</div>
			
		
			<!-- <div  class="container-fluid" id="quote" style="display: none;">
				<div class="row">
					<div class="col-xs-12">
						<div id="Main">
							<div class="contentFont">
								<center>
									"Organic Essense of Himalaya"
								</center>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div id="Sub">
							<div class="titleFont">
								Everest Aroma
							</div>
						</div>
					</div>
				</div>	
			</div>		 -->
		<!--top part enclosed div closes-->   

		<!-- NEWS SECTION START -->
		<div class="row middle">    
			<div class="row row-eq-height">
				<div class="col-lg-4 col-xs-12" >
					<div id="news">
						<!--News part-->
						<div class= "minifiedNews">
							<div class="news-header" >
								<span>News</span>
							</div>
							<?php
							include '../eaPortions/dbConnect.php';
							$sqlNews = "SELECT * FROM news ORDER BY NewsID DESC LIMIT 1";
							$result=$db->query($sqlNews);

							if ($result->num_rows > 0) {
                     			// output data of each row
								while($row = $result->fetch_assoc()) {
									echo'<div class="news-title">'.$row["NewsTitle"].'
									<!--News Title HERE --> 
									</div>';
									$newsPicture=$row["NewsPicture"];	
									echo '
									<div class="news-image-wrapper">
										<img class="img-responsive newsImage" src="admin/'.$newsPicture. '">
									</div>
									<!--News Photo HERE-->';
									echo '<p class="newsContent">'.$row["NewsContents"].'

									</p>';
								}
							}
							?>
						</div>

						<div class="readMoreNews">
							<span>
								Read More
							</span>
						</div>

					</div>
				</div>

				<div class="col-lg-8 col-xs-12">

					<!--Intro of EA-->
					<div class="row intro-wrapper" >
						<div class="col introduction">		    					
							<div class="introTitle">
								<span><h1>Why Everest Aroma?</h1></span>
							</div>
							<br>
							<div class="col-lg-12" >
								<div class="row">
									<div class="col-sm-12">
										<p>Everest Aroma meets the European and American Organic Standards. We 
											cultivate, collect, process, package and supply under the same roof to make 
											our products cheaper with high quality.
										</p>
										
										<p>Everest aroma was established in 2010 AD using the knowledge and sincerity
that has passed through the generation of baral family.
</p><p>
Our business principle  has always been simple : "take less give more"
</p><p>
Our ancestors have been involved in herbal business for a long time.
As time and economy changed it was time for us to move on to make better connection
with our customers.
</p><p>
Realizing this need Mr. sandeep baral established his brain child : "Everest aroma" which specializes In Essential oils.
He has tremendous faith that if the intention is right everything else is bound to be succesful.
</p><p>
Since day 1 Everest aroma has been commited towards social responsiblity and upliftment of poor communities. 
We feel proud to state that our company is the first inclusive  model business in nepal.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
				<div class="col-lg-4">
				<!-- for video -->
					<div class="col-inside">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/J4qAUCKBKvs" frameborder="0" gesture = "media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-lg-8">
						<!--Kabir Part Starts-->
						<div class="product-container">
								<h2>Product</h2>		
												<?php

												include '../eaPortions/dbConnect.php';
												$count=0;
												$sql="SELECT * FROM products WHERE homeShow ='yes'";

												$result = mysqli_query($db, $sql);


												if (mysqli_num_rows($result) > 0) {
											                                  // output data of each row

													while($row = mysqli_fetch_assoc($result)) {
														echo ' 
																		 
																			<div class="col-lg-3 col-md-6 col-xs-12">
																					<div class="product">
																						<center>';
																							echo '<a href="productsDescription.php?viewProduct'.$row["productID"].'=' .$row["productName"]. '">';
																							echo '<img class="circle" src="admin/'.$row["productPhoto"].'">
																						</a>
																					</center>';
																					echo '<div class="txt" align="center"><div class="contentFont"><center>' .$row["productName"]. '</center></div></div>
																				</div>
																			</div>';
																			$count++; // end product and col-xs-6
																			}

																		}
																			// echo ' <div class="col-xs-1"></div>';
																		// echo '</div>';
																		
															
														mysqli_data_seek($result, 0);
														echo '<br>';

												?>
												<!-- </div> -->
											</div>
					</div>
					<!--Kabir part ends-->
				</div>
				
		<!-- </div>	 -->
	</div>	
<!-- Bhuwan Part Ends-->
		</div>
		<div class="footer-wrapper">
			<?php 
			include 'footer.php';
			?>
		</div>
	</div>

<!-- Script of News Modal -->
<script>
		// Get the modal
		let newsModal = document.getElementById('newsModal');

		// Get the button that opens the modal
		let news = document.getElementById("news");

		// Get the <span> element that closes the modal
		let modalCLose = document.getElementById("modalClose");

		// When the user clicks the button, open the modal 
		news.onclick = function() {
			newsModal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		modalClose.onclick = function() {
			newsModal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == newsModal) {
				newsModal.style.display = "none";
			}
		}
		
		let srcHide = document.getElementById("imgChangeWidth");
		
		if (window.innerWidth < 1340){
			imgChangeWidth.setAttribute("src","img/EA_header_PS_3.png")
		}
	</script>    
</body>
</html>






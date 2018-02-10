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
	<link rel="stylesheet" type="text/css" href="css/navbarStyle.css">
	<link rel="stylesheet" href="css/footerStyle.css">
	<link rel="stylesheet" href="css/homeStyle.css">
	
	<script type="text/javascript" src="js/script.js"></script>
	<!--fonts-->
	<script src="js/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/ee3390d505.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
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
	<div class="body">
		<div id="mainTopPart"><!--top part enclosed in this div-->

			<!-- Navbar moved up to the stars -->

			<div class="everest-aroma-header">
				<div class="img-header-wrapper">
					<img src="img/ea-header.png">
				</div>
			</div>

			<!--gru part starts-->
			<nav class="navBarBackground">
				<!--Navigation bars FAQ left to add(if here)-->
				<div class="row">
				<!-- latest design ma navako vaera commented the logo -->
					<!-- <div class="col-lg-2 ">
						<div class="eaLogo">
							<center><img class="img-responsive" src="EALogo-2.jpg" alt="EA_LOGO" />
							</center>
						</div>
					</div> -->
					<div class="col-lg-8">		
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

			<!--danny part starts-->
			<div id="secondMenu" onclick="leftNavbar()">
				<div class="hamburger"></div>
				<div class="hamburger"></div>
				<div class="hamburger"></div>
			</div>
			<div class="ribbon"></div>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div id="header">
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
										
										<img src="img/home/EA-Temp.jpg" class="cover" alt="Image" style="height: 50vh; width:100%; object-fit: cover;">
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
										<img src="img/home/slider_1.jpg" class="cover" alt="Image" style="height: 50vh; width:100%; object-fit: cover;">
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
										<img src="img/home/slider_2.jpg" class="cover" alt="Image" style="height: 50vh; width:100%; object-fit: cover;">
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
					<div class="col-md-6">
						
					</div>
				</div>
			
			<!--jigree part starts-->

			<!--jigree part end-->
			<!-- <div id="aboveNavbarRight"> -->
				<!-- Removed Logo  ~Godey 04/26-->
				<!-- <img src="img/home/logo.jpg" class="img-responsive" id="eaLogo" alt="Photo Not Avaiable"> -->
				<!-- <div class="container-fluid"  id="aboveNavbar"> -->
					<!-- <div class="row"> -->
						<!-- <div class="col-xs-6 imag">Assigning colum width -->
						<!-- 	<a href="http://www.euroleaf.org/"><img src="img/home/EU-Organic.jpg" class="certificationImg"></a>
						</div>

						<div class="col-xs-6 imag">
							<a href="https://www.ams.usda.gov/services/organic-certification"><img src="img/home/USDA.png" class="certificationImg"></a>
						</div>		
					</div>
					<div class="row languageChoose">
						<div class="col-xs-8" style="color: white; text-align: center;"><div class="contentFont">Choose Language</div></div>
						<div class="col-xs-4">
							<a href="index_fr.html">
								<img src="img/home/france.png" class="button1">
							</a>
							<a href="index.html">
								<img src="img/home/england.png" class="button2">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div  class="container-fluid" id="quote" style="display: none;">
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
			</div>	 -->	

			
		</div>
		<!--top part enclosed div closes-->   

		<!-- NEWS SECTION START -->
		<div class="middle">    
			<div class="row row-eq-height">
				<div class="col-lg-4" >
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
									echo '<img class="img-responsive newsImage" src="admin/'.$newsPicture. '">
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

				<div class="col-lg-8 introductionEverest">

					<!-- for video -->
					<div class="row" >
						<div class="colInside">
							<iframe width="100%" height="100%" src="https://www.youtube.com/embed/Vv54Ka6GG9A" frameborder="0" gesture="media" allowfullscreen></iframe>

						</div>
					</div>

					<!--Intro of EA-->
					<div class="row intro-wrapper" >
						<div class="col introduction" onclick="myhref('redirectionofAboutus.php#WhyEverestAroma');">		    					
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
									</div>
								</div>
							</div>
						</div>
					</div>
				

					<!--Kabir Part Starts-->
					<div class="productContainer">
							<div class="container-fluid">
								<div class="row">
									<br>
									<div class="col-xs-12">
										<div class="row">	
											<div class="col-sm-6">			
												<div class="row">				
												<?php

												include '../eaPortions/dbConnect.php';
												$count=0;
												$sql="SELECT * FROM products WHERE homeShow ='yes'";

												$result = mysqli_query($db, $sql);


												if (mysqli_num_rows($result) > 0) {
											                                  // output data of each row

													while($row = mysqli_fetch_assoc($result)) {
														 if($count == 2){
														 	echo '</div></div> <div class="col-sm-6"><div class="row">';
														 	$count=0;
														 }
														echo ' 
																		 
																			<div class="col-xs-6">
																					<div class="product">
																						<center>';
																							echo '<a href="productsDescription.php?viewProduct'.$row["productID"].'=' .$row["productName"]. '">';
																							echo '<img class="circle" src="admin/'.$row["productPhoto"].'" width="200" height="200" >
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
												</div>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Kabir part ends-->
				</div>
			</div>
		</div>		
<!-- Bhuwan Part Ends-->


<?php 
include 'footer.php';
?>

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
		
		let count = 0; 
		let productMove;
		let sliderButtonFlag = true;
		let productContainer = document.getElementById('productSlider');
		let productList = document.getElementsByClassName('product');
		let buttonRight = document.getElementById('buttonRight');
		let buttonLeft = document.getElementById('buttonLeft');

		startInterval();

		productContainer.addEventListener('mouseover', stopInterval);
		productContainer.addEventListener('mouseout', startInterval);

		buttonRight.addEventListener('click', moveRight);
		buttonLeft.addEventListener('click', moveLeft);

		function startInterval() {
			productMove = setInterval(() => {
				productContainer.style.left = '-' + (count) * 200 + 'px';
				count++;
				if (count > 3) {
					count = 0;
				}
			}, 3000);
		}

		function moveRight() {
			if (sliderButtonFlag) {
				console.log('hello');
				sliderButtonFlag = false;
				stopInterval();
				(count < 3) ? count++ : undefined;

				productContainer.style.left = '-' + count * 200 + 'px';		
				
				startInterval();		
				sliderButtonFlag = true;
			}
		}

		function moveLeft() {
			if (sliderButtonFlag ) {
				sliderButtonFlag = false;
				
				stopInterval();	
				(count > 0) ? count-- : undefined;
				
				
				productContainer.style.left = '-' + count * 200 + 'px';		
				
				startInterval();
				sliderButtonFlag = true;
				

			}
		}

		function stopInterval() {
			clearInterval(productMove);
		}
		
	</script>    
</body>
</html>






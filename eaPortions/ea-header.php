<html>
	<head>
		<title>Admin Home</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
    <script src="..js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	</head>
	<body>
	<!--NAVBAR START ADMIN PAGE check-->
  <nav class="navbar navbar-inverse ">
    <div id="check"  class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <center>
          <ul class="nav navbar-nav">
           <!--FORM SUBMIT-->
            <li>
              <form action="ea-admin-home.php" method="post">
                <input type="submit" class="formLink" name="productsList" value="Products List"/><br>
              </form>
            </li>
          
     		    <li>
              <form action="ea-admin-home.php" method="POST"> 
                <input class="formLink" type="submit" name="submitNews" value="News Update">
              </form>
            </li>
     	
            <li>
              <form action="ea-admin-home.php" method="POST"> 
                <input class="formLink" type="submit" name="productUpdate" value="Product Update">
              </form>
            </li>
            
            <li>
              <form action="ea-admin-home.php" method="post">
                <input type="submit" class="formLink" name="changePassword" value="Change Password"/><br>
              </form>
            </li>

            <li>
              <form action="ea-admin-home.php" method="POST"> 
                <input class="formLink" type="submit" name="addProduct" value="Add Product">
              </form>
            </li>

            <li>
              <form action="ea-admin-home.php" method="POST"> 
                <input class="formLink" type="submit" name="editProduct" value="Edit Product">
              </form>
            </li>

            <li>
              <form action="ea-admin-home.php" method="POST"> 
                <input class="formLink" type="submit" name="editGallery" value="Edit Gallery">
              </form>
            </li>
             <!--FORM SUBMIT-->
          </ul>
        </center>
      </div>
    </div>
  </nav>
<!--NAVBAR CLOSE ADMIN PAGE-->
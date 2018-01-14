<div class=" container addProductStyle">
	<!--copied from frontend website's products.php -->
		<center><h1>Select Product to Edit</h1></center>
		<div class="row">
                  <?php
                 
                  
                  $count=0;
                  $sql="SELECT * FROM products ";

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
                                    
                              			   
                                   		<div class="imag" style="background-image: url('.$row["productPhoto"].');"> 
                                   		
                                    	</div>

                                    	<div class="cent"> 
                                          <form action="ea-admin-home.php" method="POST">               
                                          <p class="editProductStyle"> <input class="button12" type="submit" name="edit'.$row["productID"].'" value="Edit '.$row["productName"].'">';

                      					 echo '  </p> <!--end of nameProd--> 
                                           </form>

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
	       

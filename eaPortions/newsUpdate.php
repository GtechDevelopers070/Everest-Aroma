	<div class="container-fluid">
		<div id="formDiv">

			<div class="row">
				<div class="col-xl-4">

				</div>

				<div class="col-xl-4">
					<div class="headd">  News Update  </div>
					<br>
					<form action="ea-admin-home.php" method="post" enctype="multipart/form-data">
						<label>News Title:</label>
						<textarea class="newsTitle form-control" name="newsTitle" rows="1" cols="22" style="color:black; resize:none; font-size:22px; line-height: 2em;" > 
						</textarea><br><br>
						<label>News:</label>
						<textarea class="newsContent form-control" name="newsContent" rows="10" cols="22" style="color:black; resize:none; font-size:22px;" > </textarea> <br><br>
						<label>Image:</label>
						<center>
							<input type="file" name="image"> <br>
						</center>
						<input class="button12" type="submit" name="submitNewsData" value="Update News"/><br>
					</form>
				</div>
			</div>
		</div>		
	</div>
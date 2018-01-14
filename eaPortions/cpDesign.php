
		<div id="formDiv">

			<div class="row">
				<div class="col-xl-4">

				</div>
		
				<div class="col-xl-4">
					<div class="headd">  Change Password  </div>
						<br><br>
					<form action="ea-admin-home.php" method="post" enctype="multipart/form-data">
						<label>Old Username:</label>
						<input class="areaOldUname" type="text" name="oldUserName" style="color:black;" /><br><br>
						<label>Old Password:</label>
						<input class="areaOldPass" type="password" name="oldUserPassword" style="color:black;" /><br><br>
						<label>New Password:</label>
						<input class="areaNewPass" type="password" name="newUserPassword" style="color:black;" /><br><br>
						<label>Confirm New Password:</label>
						<input class="areaConfirmNewPass" type="password" name="confirmNewUserPassword" style="color:black;" /><br><br>

						<input class="button12" type="submit" name="changePasswordConfirmation" value="Change Password"/><br>
					</form>
				</div>
			</div>

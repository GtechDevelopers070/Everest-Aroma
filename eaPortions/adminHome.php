		<div class="tableContent">
			<table class="table">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Product Name</th>
						<th>Product Picture </th>
						<th>Upload</th>
						<th>Show/Hide</th>
						<th>Update</th>
					</tr>
				</thead>
				<tbody>
					<!--FIRST-->
					<?php
					$sql = "select * from products";
					$result = mysqli_query($db, $sql);
					if (mysqli_num_rows($result) > 0) {
						for ($id=1; $row = mysqli_fetch_assoc($result); $id++) { 
							echo'<tr>
							<td>'. $row["productID"] . '</td>
							<td>'. $row["productName"] . '</td>
							<td> <img class="photoProduct" src="'.$row["productPhoto"] . '"> </td>
							<td> <form action="ea-admin-home.php" method="post" enctype="multipart/form-data"> 
								<input  type="file" name="image">
								<input class="upload" type="submit" name="changeProduct'. $id .'" value="Upload"> </form>
							 </td>
							<td> 
							<form action="ea-admin-home.php" method="post">';
							if($row["visibility"]=='yes'){
							echo '<input type="checkbox" name="showHide" value="Show" checked>'; 
							}
							else if($row["visibility"]=='no'){
								echo '<input type="checkbox" name="showHide" value="Show" >';
							}
							echo'</td> 
							<td>
								<input class="upload" type="submit" name="Update'. $id .'" value="Update '. $id .'"> </form>';

								
								
								
								echo'</td>
							</tr>';


						}}
						else{
							echo "Unsuccessful Retrieval from database";
						}

						?>
					</tbody>
				</table>
			</div>

			
			
				

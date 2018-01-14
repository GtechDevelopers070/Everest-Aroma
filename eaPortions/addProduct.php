<!-- ADD A NEW PRODUCT -->
<div class=" container addProductStyle">

	<form action="ea-admin-home.php" method="POST" class="form-group">
		<div class="row">
		<div class="col-md-4">
		   	English Name: <input type="text" name="englishName" class="form-control" required>	
			Local Name: <input type="text" name="localName" class="form-control" >	
			Botanical Name: <input type="text" name="botanicalName" class="form-control" required>	
			Family Name: <input type="text" name="familyName" class="form-control">	
			Season: <input type="text" name="season" class="form-control">	
			Parts Used: <input type="text" name="partsUsed" class="form-control">	
			 Description: 
			<textarea class="form-control" rows="3" name="description"> </textarea>
			Appearance: <input type="text" name="appearance" class="form-control">
		</div>
		<div class="col-md-4">	
			 Aroma: 
			<textarea class="form-control" rows="2" name="aroma"> </textarea>
			Flash Point: <input type="text" name="flashPoint" class="form-control">
			Specific Gravity: <input type="text" name="specificGravity" class="form-control">
			Refractive Index: <input type="text" name="refractiveIndex" class="form-control">
			Relative Index: <input type="text" name="relativeIndex" class="form-control">
			Ester Value: <input type="text" name="esterValue" class="form-control">
			Ester Value after Acetylation: <input type="text" name="esterValueAfter" class="form-control">
			Optical Rotation: <input type="text" name="opticalRotation" class="form-control">
		</div>
		<div class="col-md-4">
			Acid Number: <input type="text" name="acidNumber" class="form-control">
			Total Alcohol: <input type="text" name="totalAlcohol" class="form-control">
			Solubility: <input type="text" name="solubility" class="form-control">
			Soluble in Water: <input type="text" name="solubleInWater" class="form-control">
			Country of Origin: <input type="text" name="countryOrigin" class="form-control">
			 Uses: 
			<textarea class="form-control" rows="2" name="uses"> </textarea>
			Packaging: <input type="text" name="packaging" class="form-control">
		<br>
		<input class="button12" type="submit" name="addProductConfirmation" value="Add Product"/>
		</div>
	</form>
</div>
<?php 
	include("../assets/header.php");
?>
<div class="container">

<h3>Please Select Pan Service </h3>
<div class="col-md-8 bg-light"><br>
 
	<form action="../config/function.php" method="POST">
		<div class="col-md-8">
<!-- 			<div class="form-group row">
			    <div class="col-md-4">
			      <label for="exampleFormControlInput1">Pan Type</label>
			    </div>
			    <div class="col-md-6">
			      <div class="form-check form-check-inline">
			        <input class="form-check-input" type="radio" name="pan-type" id="inlineRadio1" value="option1">
			        <label class="form-check-label" for="inlineRadio1">Individual</label>
			      </div><br>
			      <div class="form-check form-check-inline">
			        <input class="form-check-input" type="radio" name="pan-type" id="inlineRadio2" value="option2">
			        <label class="form-check-label" for="inlineRadio2">Company, firm, LLP's, etc</label>
			      </div>
			    </div>
		  	</div><hr> -->
		  	<div class="container btn btn-success"><a href="new-pan-basic.php?type=1a">New Pan Card for Individuals</a></div><br><br>
		  	<div class="container btn btn-success"><a href="new-pan-basic.php?type=1b">New Pan Card for Companies, Firms, etc</a></div><br><br>
		  	<div class="container btn btn-danger"><a href="new-pan-basic.php?type=2a">Pan Card Correction for Individuals</a></div><br><br>
		  	<div class="container btn btn-danger"><a href="new-pan-basic.php?type=2b">Pan Card Correction for Companies, Firms, etc</a></div><br><br>
		  	<div class="container btn btn-primary"><a href="new-pan-basic.php?type=3a">Lost/ Damage of Pan Card of Individuals</a></div><br><br>
		  	<div class="container btn btn-primary"><a href="new-pan-basic.php?type=3b">Lost/ Damage of Pan Card of Companies, Firms, etc</a></div><br><br>
		</div>
	
	</form>
</div>
	</div>
	</div>
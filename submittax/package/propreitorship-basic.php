<?php 
	include("../assets/header.php");
?>
<div class="container">
	<div class=""><center><h3>Sole Propreitorship Registration</h3></center></div>
	<br>

   <div class="col-md-8 row">
    <div class="col-md btn btn-warning">Step 1 (Basic Details)</div>
    <!-- <div class="col-md btn btn-light">Step 2 (Extra Details)</div> -->
    <div class="col-md btn btn-light">Step 2 (Payment)</div>

  </div>
</br>

	<div class="col-md-8 bg-light"><br>
<form>

  <div class="form-group row">
    <div class="col-md-4">
    <label for="exampleFormControlInput1">Director name</label>
    </div>
    <div class="col-md-6">
    	<input type="text" class="form-control" name="dir_name" placeholder="Director's Name">
	</div>
 </div>

  <div class="form-group row">
    <div class="col-md-4">
    <label for="exampleFormControlInput1">Company Name</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="company_name" placeholder="Company's Name">
  </div>
 </div>

  <div class="form-group row">
    <div class="col-md-4">
       <label for="exampleFormControlInput1">Capital Contribution</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="cap_contribution" placeholder="(in INR)">
  </div>
 </div>

  <div class="form-group row">
    <div class="col-md-4">
       <label for="exampleFormControlInput1">Email</label>
    </div>
    <div class="col-md-6">
      <input type="Email" class="form-control" name="dir_email" placeholder="abc@xyz.com">
  </div>
 </div>

  <div class="form-group row">
    <div class="col-md-4">
        <label for="exampleFormControlInput1">Contact Number</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="dir_contact" placeholder="Contact Number">
    </div>
 </div>
<br><hr><br>
<div class="form-group row">
    <div class="col-md-4">
     <label for="exampleFormControlFile1">Pan Card</label>
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control-file bg bg-active" name="pan_card">
  </div>

  </div> 
    <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlFile1">Aadhar Card</label>
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control-file bg bg-active" name="aadhar_card">
  </div>
  </div>


  <br><hr><br>
  	<div class="form-check"><center>
	  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
	  <label class="form-check-label" for="defaultCheck1">
	    I confirm all the above details and information provided are true and correct to the best of my knowledge.
	  </label></center>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" required>
	  <label class="form-check-label" for="defaultCheck2">
	    I Accept Terms & Conditions
	  </label>
	</div>
	<br>
  <div class="form-group row">
  	<div class="col-md-5">
      <button type="submit" class="btn btn-primary" name="propreitor-basic-save">Save and Proceed</button>&nbsp;
  	</div>
    <div class="col-md-7">
      <button type="submit" class="btn btn-success">Skip and Proceed to Payment</button>
  	</div>
  <br></div>
</form><br> 
	</div>
</div>
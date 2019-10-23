<?php 
	include("../assets/header.php");
?>
<div class="container">
	<div class=""><center><h3>Private Ltd Company Registration</h3></center></div>
	<br>

   <div class="col-md-8 row">
    <div class="col-md btn btn-warning">Step 1 (Basic Details)</div>
    <div class="col-md btn btn-light">Step 2 (Shareholder Details</div>
    <div class="col-md btn btn-light">Payment</div>

  </div>
</br>

	<div class="col-md-8 bg-light"><br>
<form action="../config/function.php" method="POST">
  <div class="form-group row">
    <label for="exampleFormControlInput1">Company name 1</label>
    <div class="col-md-6">
    	<input type="text" class="form-control" name="cname1" placeholder="submittax pvt ltd">
	</div>
  </div>

  <div class="form-group row">
    <label for="exampleFormControlInput1">Company name 2</label>
    <div class="col-md-6">
    	<input type="text" class="form-control" name="cname2" placeholder="submittax service pvt ltd">
	</div>
  </div>

  <div class="form-group row">
    <label for="exampleFormControlInput1">Company name 3</label>
    <div class="col-md-6">
    	<input type="text" class="form-control" name="cname3" placeholder="quikkloan pvt ltd">
	</div>
  </div>
  <small id="emailHelp" class="form-text text-muted"><strong>Note:-</strong> Company name availability is completely a discretionary power of MCA</small>
  <hr>
  <div class="form-group row">
    <label for="" class="col-md-4">Business Activity of Proposed Company</label>
    <div class="col-md-6">
    <textarea class="form-control" name="bus_activity" rows="1"></textarea>
  	</div>
  </div>
    <small id="emailHelp" class="form-text text-muted"><strong>Note:-</strong>A copy of the in-principle approval of the regulatory authority should be required at the time of filing Incorporation forms if the business activities consists of Insurance, Bank, Stock exchange, Venture Capital, Asset Management, Nidhi, or Mutual Fund etc. </small>
<br>
<hr><br>
  <div class="form-group row">
    <label for="exampleFormControlSelect1">Number of Shareholders</label>
    <div class="col-md-6">
	    <select class="form-control" name="num_of_shareholders">
	      <option value="1">1</option>
	      <option value="2">2</option>
	      <option value="3">3</option>
	      <option value="4">4</option>
	      <option value="5">5</option>
	    </select>
	</div>
  </div><br>
  <hr><br>
	<p>Address Proof for Company Registered Office</p>  
  	
  <div class="form-group row">
    <div class="col-md-4">
     <label for="exampleFormControlFile1">Latest Electricity Bill</label>
    </div>
    <div class="col-md-6">
    	<input type="file" class="form-control-file bg bg-active" name="address_proof">
	</div>

  </div> 
    <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlFile1">NOC From Owner</label>
    </div>
    <div class="col-md-6">
    	<input type="file" class="form-control-file bg bg-active" name="noc">
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
      <button type="submit" name="save-proceed-pvt-ltd" class="btn btn-primary">Save and Proceed</button>&nbsp;
  	</div>
    <div class="col-md-7">
      <button type="submit" class="btn btn-success">Skip and Proceed to Payment</button>
  	</div>
  <br></div>
</form><br> 
	</div>
</div>
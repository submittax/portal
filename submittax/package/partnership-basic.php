<?php 
	include("../assets/header.php");
?>
<div class="container">
	<div class=""><center><h3>Partnership firm Registration</h3></center></div>
	<br>

   <div class="col-md-8 row">
    <div class="col-md btn btn-warning">Step 1 (Basic Details)</div>
    <div class="col-md btn btn-light">Step 2 (Partners Details)</div>
    <div class="col-md btn btn-light">Payment</div>

  </div>
</br>

	<div class="col-md-8 bg-light"><br>
<form>

  <div class="form-group row">
    <div class="col-md-4">
    <label for="exampleFormControlInput1">Proposed firm name</label>
    </div>
    <div class="col-md-6">
    	<input type="text" class="form-control" name="firm_name" placeholder="submittax pvt ltd">
	</div>
 </div>

  <!--<div class="form-group row">
    <label for="exampleFormControlInput1">Company name 2</label>
    <div class="col-md-6">
    	<input type="text" class="form-control" id="" placeholder="submittax service pvt ltd">
	</div>
  </div>

  <div class="form-group row">
    <label for="exampleFormControlInput1">Company name 3</label>
    <div class="col-md-6">
    	<input type="text" class="form-control" id="" placeholder="quikkloan pvt ltd">
	</div>
  </div>
  <small id="emailHelp" class="form-text text-muted"><strong>Note:-</strong> Company name availability is completely a discretionary power of MCA</small>
 -->  <hr>
  <div class="form-group row">
    <div class="col-md-4">
      <label for="" class="col-md-4">Business Activity of Proposed Firm</label>
    </div>
    <div class="col-md-6">
    <textarea class="form-control" name="bus_activity" rows="1"></textarea>
  	</div>
  </div>

<br>

  <hr><br>
      <div class="form-group row">
    <div class="col-md-4">
    <label for="exampleFormControlInput1">Business Address of Firm</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="firm_address" placeholder="Enter Firm Address">
  </div>
  </div>

    <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">state</label>
  </div>  
    <div class="col-md-6">
      <input type="text" class="form-control" name="firm_state" placeholder="State">
  </div>
  </div>

    <div class="form-group row">
    <div class="col-md-4">
    <label for="exampleFormControlInput1">City</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="firm_city" placeholder="City">
  </div>
  </div>

  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Pincode</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="firm_pincode" placeholder="Pincode">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Capital Amount</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="firm_capital_amount" placeholder="(in INR)">
    </div>
  </div>
<hr>
  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlSelect1">Number of Partners</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" name="num_of_partners">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
  </div>
  </div>


  <br><hr><br>
  	<div class="form-check">
	  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
	  <label class="form-check-label" for="defaultCheck1">
	    I confirm all the above details and information provided are true and correct to the best of my knowledge.
	  </label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
	  <label class="form-check-label" for="defaultCheck2">
	    I Accept Terms & Conditions
	  </label>
	</div>
	<br>
  <div class="form-group row">
  	<div class="col-md-5">
      <button type="submit" class="btn btn-primary" name="save-partnership-basic">Save and Proceed</button>&nbsp;
  	</div>
    <div class="col-md-7">
      <button type="submit" class="btn btn-success">Skip and Proceed to Payment</button>
  	</div>
  <br></div>
</form><br> 
	</div>
</div>
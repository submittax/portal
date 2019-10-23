<?php 
	include("../assets/header.php");
?>
<div class="container">
	<div class=""><center><h3>Partnership firm Registration</h3></center></div>
	<br>

   <div class="col-md-8 row">
    <div class="col-md btn btn-light">Step 1 (Basic Details)</div>
    <div class="col-md btn btn-warning">Step 2 (Partners Details)</div>
    <div class="col-md btn btn-light">Payment</div>

  </div>
</br>

	<div class="col-md-8 bg-light"><br>
<form>
  <!-- shareholder 1 -->
  <div>
    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Name</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="partner_name" placeholder="Name">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Father's Name</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="partner_father_name" placeholder="Father's Name">
      </div>
    </div>
    <hr><br>
  <div class="form-group row">
     <div class="col-md-4">
    <label for="exampleFormControlInput1">Residential Address</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="partner_address" placeholder="Enter your Address">
    </div>
  </div>

  <div class="form-group row">
     <div class="col-md-4">
    <label for="exampleFormControlInput1">state</label>
  </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="partner_state" placeholder="State">
    </div>
  </div>

  <div class="form-group row">
       <div class="col-md-4">
      <label for="exampleFormControlInput1">City</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="partner_city" placeholder="City">
    </div>
  </div>

  <div class="form-group row">
     <div class="col-md-4">
    <label for="exampleFormControlInput1">Pincode</label>
  </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="partner_pincode" placeholder="Pincode">
    </div>
  </div>
<hr>
    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleInputEmail1">Email address</label>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control" name="partner_email" aria-describedby="emailHelp" placeholder="chiki@bum.com">
      </div>
    </div>
  
    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Contact Number</label>
      </div>
      <div class="col-md-6">
        <input type="Number" class="form-control" name="partner_contact" placeholder="9548x xxxx" maxlength="10" minlength="10" max="9999999999">
      </div>
    </div>


    <!-- <div class="form-group row">
      <div class="col-md-4">
      <label for="exampleFormControlInput1">Place of Birth</label>
    </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="" placeholder="for e.g Delhi">
      </div>
    </div> -->

<!--   <div class="form-group row">
    <div class="col-md-4">
    <label for="exampleFormControlSelect1">Education Qualification</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" id="exampleFormControlSelect1">
        <option value="X/ SSC/ Junior/ Euivalent">X/ SSC/ Junior/ Euivalent</option>
        <option value="XII/ SSC/ High/ Euivalent">XII/ SSC/ High/ Euivalent</option>
        <option value="Graduate/ Bachelor/ Euivalent">Graduate/ Bachelor/ Euivalent</option>
        <option value="Post Graduate/ Master/ Euivalent">Post Graduate/ Master/ Euivalent</option>
        <option value="Professional">Professional</option>   <option value="Executive Program">Executive Program</option>
        <option value="Doctorate">Doctorate</option>   
        <option value="Diploma">Diploma</option>  
      </select>
  </div>
  </div>
 -->
<!-- <div class="form-group row">
    <div class="col-md-4">
     <label for="exampleFormControlSelect1">Resident Of India</label>
    </div>
    <div class="col-md-6">

    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-primary">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> Yes
    </label>
    <label class="btn btn-primary active">
      <input type="radio" name="options" id="option2" autocomplete="off"> No
    </label>

  </div>
  </div>
</div>
 -->
<!--   <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlSelect1">Occupation</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" id="exampleFormControlSelect1">
        <option value="self employed">Self Employed</option>
        <option value="Professional">Professional</option>
        <option value="Homemaker">Homemaker</option>
        <option value="Student">Student</option>
        <option value="Serviceman">Serviceman</option>   
      </select>
  </div>
  </div>
 -->
  <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Capital Contribution(in INR)</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="partner_capital_contribution" placeholder="(in INR)">
      </div>
  </div>

  <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Profit Loss Sharing ratio(in %)</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="partner_profit_loss_sharing" placeholder="(in %)">
      </div>
  </div>

    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Identity Proof</label>
      </div>
      <div class="col-md-6">  
        <div class="form-check">
          <input class="form-check-input" type="radio" name="partner_id_proof" id="exampleRadios1" value="Driving License">
          <label class="form-check-label" for="exampleRadios1">
            Driving License
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="partner_id_proof" id="exampleRadios2" value="Voter Id">
          <label class="form-check-label" for="exampleRadios2">
            Voter ID Card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="partner_id_proof" id="exampleRadios2" value="Passport">
          <label class="form-check-label" for="exampleRadios2">
            Passport
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="partner_id_proof" id="exampleRadios2" value="Aadhar Card">
          <label class="form-check-label" for="exampleRadios2">
            Aadhar Card
          </label>
        </div>
          <input type="file" class="form-control-file bg bg-active" name="partner_id_proof_doc">

</div>

</div>

     

      <div class="form-check"><center>
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
    I confirm all the above details and information provided are true and correct to the best of my knowledge.
    </label></center>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
    <label class="form-check-label" for="defaultCheck2">
      I Accept Terms & Conditions
    </label>
  </div>
  <div class="form-group row">
  <button type="submit" class="btn btn-primary">Save and Proceed</button>&nbsp;
  <button type="submit" class="btn btn-success">Skip and Proceed to Payment</button>
  </div>
  </div>
</form><br>
	</div>
</div>
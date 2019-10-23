<?php 
	include("../assets/header.php");
?>
<div class="container">
	<div class=""><center><h3>Private Ltd Company Registration</h3></center></div>
	<br>

   <div class="col-md-8 row">
    <div class="col-md btn btn-light">Step 1 (Basic Details)</div>
    <div class="col-md btn btn-warning">Step 2 (Shareholder Details</div>
    <div class="col-md btn btn-light">Payment</div>

  </div>
</br>

	<div class="col-md-8 bg-light"><br>
<form>
  <!-- shareholder 1 -->
  <div>
    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Enter Your Name</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="" placeholder="submittax pvt ltd">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleInputEmail1">Email address</label>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="chiki@bum.com">
      </div>
    </div>
  
    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Contact Number</label>
      </div>
      <div class="col-md-6">
        <input type="Number" class="form-control" id="" placeholder="9548x xxxx" maxlength="10" minlength="10" max="9999999999">
      </div>
    </div>


    <div class="form-group row">
      <div class="col-md-4">
      <label for="exampleFormControlInput1">Place of Birth</label>
    </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="" placeholder="for e.g Delhi">
      </div>
    </div>

  <div class="form-group row">
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

<div class="form-group row">
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

  <div class="form-group row">
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

  <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Shareholding(in %)</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="" placeholder="for e.g. 23">
      </div>
  </div>


  <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Address Proof</label>
      </div>
      <div class="col-md-6">  
        <div class="form-check">
          <input class="form-check-input" type="radio" name="addressProof" id="" value="option1">
          <label class="form-check-label" for="exampleRadios1">
            Bank Statement
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="addressProof" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Electricity Bill
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="addressProof" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Telephone Bill
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="addressProof" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Mobile Bill
          </label>
        </div>

        <input type="file" class="form-control-file bg bg-active" id="exampleFormControlFile1">


</div>
</div>

    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Identity Proof</label>
      </div>
      <div class="col-md-6">  
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
          <label class="form-check-label" for="exampleRadios1">
            Driving License
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Voter ID Card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Passport
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Aadhar Card
          </label>
        </div>
          <input type="file" class="form-control-file bg bg-active" id="exampleFormControlFile1">

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
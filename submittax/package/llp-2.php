<?php 
	include("../assets/header.php");
  print_r($_SESSION);
if(isset($_SESSION['llp-basic']))
{
?>

<div class="container">
	<div class=""><center><h3>LLP Registration</h3></center></div>
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
        <label>Name</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="shareholder_name" placeholder="Name">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleInputEmail1">Email address</label>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control" name="shareholder_email" aria-describedby="emailHelp" placeholder="chiki@bum.com">
      </div>
    </div>
  
    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Contact Number</label>
      </div>
      <div class="col-md-6">
        <input type="Number" class="form-control" name="shareholder_contact" placeholder="9548x xxxx" maxlength="10" minlength="10" max="9999999999">
      </div>
    </div>


    <div class="form-group row">
      <div class="col-md-4">
      <label for="exampleFormControlInput1">Place of Birth</label>
    </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="shareholder_birthplace" placeholder="for e.g Delhi">
      </div>
    </div>

  <div class="form-group row">
    <div class="col-md-4">
    <label for="exampleFormControlSelect1">Education Qualification</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" name="shareholder_education">
        <option value="X/ SSC/ Junior/ Euivalent">X/ SSC/ Junior/ Euivalent</option>
        <option value="XII/ SSC/ High/ Euivalent">XII/ SSC/ High/ Euivalent</option>
        <option value="Graduate/ Bachelor/ Euivalent">Graduate/ Bachelor/ Euivalent</option>
        <option value="Post Graduate/ Master/ Euivalent">Post Graduate/ Master/ Euivalent</option>
        <option value="Professional">Professional</option>   
        <option value="Executive Program">Executive Program</option>
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
      <input type="radio" name="shareholder_roi" id="option1" autocomplete="off" value="yes" checked> Yes
    </label>
    <label class="btn btn-primary active">
      <input type="radio" name="shareholder_roi" id="option2" value="no" autocomplete="off"> No
    </label>

  </div>
  </div>
</div>

  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlSelect1">Occupation</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" name="shareholder_occupation">
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
        <label for="exampleFormControlInput1">Capital Contribution(in INR)</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="shareholder_capital_contribution" placeholder="(in INR)">
      </div>
  </div>

  <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Profit Loss Sharing ratio(in %)</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="shareholder_profit_loss_sharing" placeholder="(in %)">
      </div>
  </div>

  <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Address Proof</label>
      </div>
      <div class="col-md-6">  
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shareholder_address_proof" id="" value="Bank Statement">
          <label class="form-check-label" for="exampleRadios1">
            Bank Statement
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shareholder_address_proof" id="exampleRadios2" value="Electricity Bill">
          <label class="form-check-label" for="exampleRadios2">
            Electricity Bill
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shareholder_address_proof" id="exampleRadios2" value="Telephone Bill">
          <label class="form-check-label" for="exampleRadios2">
            Telephone Bill
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shareholder_address_proof" id="exampleRadios2" value="Mobile Bill">
          <label class="form-check-label" for="exampleRadios2">
            Mobile Bill
          </label>
        </div>
         <input type="file" class="form-control-file bg bg-active" name="shareholder_address_proof_doc">


</div>
</div>

    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Identity Proof</label>
      </div>
      <div class="col-md-6">  
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shareholder_id_proof" id="exampleRadios1" value="Driving License">
          <label class="form-check-label" for="exampleRadios1">
            Driving License
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shareholder_id_proof" id="exampleRadios2" value="Voter ID Card">
          <label class="form-check-label" for="exampleRadios2">
            Voter ID Card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shareholder_id_proof" id="exampleRadios2" value="Passport">
          <label class="form-check-label" for="exampleRadios2">
            Passport
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="shareholder_id_proof" id="exampleRadios2" value="Aadhar Card">
          <label class="form-check-label" for="exampleRadios2">
            Aadhar Card
          </label>
        </div>
          <input type="file" class="form-control-file bg bg-active" name="shareholder_id_proof_doc">

</div>

</div>

      <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Potograph</label>
      </div>
      <div class="col-md-6">  
            <input type="file" class="form-control-file bg bg-active" name="shareholder_photo_doc">
      </div>
    </div>


      <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">PAN card </label>
      </div>
      <div class="col-md-6">  
            <input type="file" class="form-control-file bg bg-active" name="shareholder_pan_card_doc">
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
  <button type="submit" name="llp-2-save" class="btn btn-primary">Save and Proceed</button>&nbsp;
  <button type="submit" name="llp-2-payment" class="btn btn-success">Skip and Proceed to Payment</button>
  </div>
  </div>
</form><br>
	</div>
</div>

<?php  
}
else{
  echo "session id of basic form not set";
  // header("llp-basic.php");
}
?>
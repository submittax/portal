  <?php 
	include("../assets/header.php");
?>
<style type="text/css">
	/* Hide all steps by default: */
.tab {
  display: none;
  border:none;
  background: none; 
}



/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}
button {
  background-color: #4CAF50;
  color: #ffffff;
  /*border: none;*/
  /*padding: 10px 20px;*/
  /*font-size: 17px;*/
  /*font-family: Raleway;*/
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}
	.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

</style>
<div class="container">
	<div class=""><center><h3>One Person Company Registration</h3></center></div>
	<br>

   <div class="col-md-8 row">
    <div class="col-md btn btn-warning">Step 1 (Basic Details)</div>
    <div class="col-md btn btn-light">Step 2 (Shareholder + Nominee Details)</div>
    <div class="col-md btn btn-light">Payment</div>

  </div>
</br>

	<div class="col-md-8 bg-light"><br>
<form id="regForm">
  <div class="tab">
  <div class="form-group row">
    <label for="exampleFormControlInput1">Company name 1</label>
    <div class="col-md-6">
    	<input type="text" class="form-control" name="cname1" placeholder="submittax pvt ltd" oninput="this.className = ''">
	</div>
  </div>

  <div class="form-group row">
    <label for="exampleFormControlInput1">Company name 2</label>
    <div class="col-md-6">
    	<input type="text" class="form-control" name="cname2" placeholder="submittax service pvt ltd" oninput="this.className = ''">
	</div>
  </div>

  <div class="form-group row">
    <label for="exampleFormControlInput1">Company name 3</label>
    <div class="col-md-6">
    	<input type="text" class="form-control" name="cname3" placeholder="quikkloan pvt ltd" oninput="this.className = ''">
	</div>
  </div>
  <small id="emailHelp" class="form-text text-muted"><strong>Note:-</strong> Company name availability is completely a discretionary power of MCA</small>
  </div>
  <div class="tab">
  <hr>
  <div class="form-group row">
    <label for="" class="col-md-4">Business Activity of Proposed Company</label>
    <div class="col-md-6">
    <textarea class="form-control" name="bus_activity" rows="1" oninput="this.className = ''"></textarea>
  	</div>
  </div>
    <small id="emailHelp" class="form-text text-muted"><strong>Note:-</strong>A copy of the in-principle approval of the regulatory authority should be required at the time of filing Incorporation forms if the business activities consists of Insurance, Bank, Stock exchange, Venture Capital, Asset Management, Nidhi, or Mutual Fund etc. </small>
<br>
</div>
<div class="tab">
  <hr><br>

	<p>Address Proof for Company Registered Office</p>  
  	
  <div class="form-group row">
    <div class="col-md-4">
     <label for="exampleFormControlFile1">Latest Electricity Bill</label>
    </div>
    <div class="col-md-6">
    	<input type="file" class="form-control-file bg bg-active" name="address_proof" oninput="this.className = ''">
	</div>

  </div> 
    <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlFile1">NOC From Owner</label>
    </div>
    <div class="col-md-6">
    	<input type="file" class="form-control-file bg bg-active" name="noc" oninput="this.className = ''">
	</div>
  </div>
</div>
  <br><hr><br>
<div class="tab">
  	<div class="form-check"><center>
	  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" oninput="this.className = ''">
	  <label class="form-check-label" for="defaultCheck1">
	    I confirm all the above details and information provided are true and correct to the best of my knowledge.
	  </label></center>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" oninput="this.className = ''">
	  <label class="form-check-label" for="defaultCheck2">
	    I Accept Terms & Conditions
	  </label>
	</div>
	<br>
  	<div class="form-group row">
	  	<div class="col-md-5">
	      <button type="submit" class="btn btn-primary" name="opc-save-basic">Save and Proceed</button>&nbsp;
	  	</div>
	    <div class="col-md-7">
	      <button type="submit" class="btn btn-success">Skip and Proceed to Payment</button>
	  	</div>
  <br></div>
</div>

  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</div>

</form><br> 
	</div><br>
</div>
	<div style="float:right;" class="">
	    <div style="">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
	    </div>
  	</div>
  <!-- Circles which indicates the steps of the form: -->
  


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

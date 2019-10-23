<?php 
	include("../assets/header.php");
?>
<?php 
  $type=$_GET['type'];
  $hide1a="";
  $hide1b="";
  if($type=="1a"){
    $hide1a="hidden";
  }

  if($type=="1b"){
    $hide1b="hidden";
  }
?>
 
	<div class=""><center><h3>Application for New PAN Card</h3></center></div>
  <div class="col-md row">
    <div class="col-md btn btn-warning" id="personal-details-btn">Personal Details</div>
    <!-- <div class="col-md btn btn-light">Step 2 (Partner Details)</div> -->
    <div class="col-md btn btn-light" id="parents-details-btn" <?=@$hide1b;?>>Parents Details(for Individuals only)</div>
    <div class="col-md btn btn-light" id="address-btn">Address</div>
    <!-- <div class="col-md btn btn-light" id="contact-details-btn">Contact Details</div> -->
   <!--  <div class="col-md btn btn-light" id="applicant-status-details-btn">Status of Applicant</div> -->
    <!-- <div class="col-md btn btn-light" id="registration-details-btn" <?=@$hide1a; ?>>Registration Number (for companies,firms,etc)</div> -->
    <!-- <div class="col-md btn btn-light" id="ra-details-btn">Representative Assessee (RA)</div> -->
    <div class="col-md btn btn-light" id="document-btn">Documents</div>
    <div class="col-md btn btn-light" id="payment-btn">check out</div>

  </div> 
<div class="container row">
	<br>
  <div class="col-md-4">sdjhfjhdvsf</div>
  
  </br>

	<div class="col-md-8 bg-light"><br>
 
<form action="../config/function.php" method="POST" class="pan-form" enctype="multipart/form-data">
      <input type="text" class="form-control" name="type" value=<?=@$type?> hidden>
  <div id="basic-information" class="">  
    <h4>Contact information</h4>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="exampleFormControlInput1">Contact Number</label>
        </div>
        <div class="col-md-6">
        	<input type="text" class="form-control" name="contact_num" placeholder="Mobile Number" required>
    	  </div>
      </div>

      <div class="form-group row">
        <div class="col-md-4">
          <label for="exampleFormControlInput1">Email</label>
        </div>
        <div class="col-md-6">
        	<input type="Email" class="form-control" name="contact_email" id="" placeholder="abc@xyz.com" required>
    	 </div>
      </div>

      <small id="" class="form-text text-muted"><strong>Note:-</strong> Make sure you're giving the correct details. In case of any discrepancies in your PAN Application, we'll assist you personally.</small>
      <hr>
    <h4>Personal Information</h4>
  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Applicant Category</label>
    </div>
    <div class="col-md-6">
      <div class="form-check form-check-inline" <?=@$hide1b?>>
        <input class="form-check-input" type="radio" name="applicant-category" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Individual</label>
      </div>
      <div class="form-check form-check-inline" <?=@$hide1b?>>
        <input class="form-check-input" type="radio" name="applicant-category" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Army</label>
      </div>
      <div class="form-check form-check-inline" <?=@$hide1b?>>
        <input class="form-check-input" type="radio" name="applicant-category" id="inlineRadio3" value="option2">
        <label class="form-check-label" for="inlineRadio3">Air Force</label>
      </div>
      <div class="form-check form-check-inline" <?=@$hide1b?>>
        <input class="form-check-input" type="radio" name="applicant-category" id="inlineRadio4" value="option2">
        <label class="form-check-label" for="inlineRadio4">Navy</label>
      </div>
<!--       <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="applicant-category" id="inlineRadio5" value="sole propreiter">
        <label class="form-check-label" for="inlineRadio5">Sole Propreiter</label>
      </div> -->
      <div class="form-check form-check-inline" <?=@$hide1a?>>
        <input class="form-check-input" type="radio" name="applicant-category" id="inlineRadio6" value="partnership firm">
        <label class="form-check-label" for="inlineRadio6">Partnership Firm</label>
      </div>
    </div>
  </div>

 <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Applicant Name</label>
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" name="fname" placeholder="First Name" required>
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Abbreviated name you would like to be printed on PAN Card</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="abbr_name" placeholder="John Doe" required>
    </div>
  </div>
  
  <div class="form-group row" >
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Gender</label>
      </div>
    <div class="col-md-6">
      <div class="form-check form-check-inline col-md-3">
        <input class="form-check-input" type="radio" name="gender" id="gender_male" value="Male" required>
        <label class="form-check-label" for="gender_male">Male</label>
      </div>
      <div class="form-check form-check-inline col-md-3">
        <input class="form-check-input" type="radio" name="gender" id="gender_female" value="female" required>
        <label class="form-check-label" for="gender_female">Female</label>
      </div>
    </div>
  </div>

    <div class="form-group row" <?=@$hide1b?>>
      <div class="col-md-4">
        <label for="marital_status">Marital Status</label>
      </div>
      <div class="col-md-6">
        <div class="form-check form-check-inline col-md-3">
          <input class="form-check-input" type="radio" name="marital_status" id="" value="single">
          <label class="form-check-label" for="single">Single</label>
        </div>
        <div class="form-check form-check-inline col-md-3">
          <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2" value="married">
          <label class="form-check-label" for="married">Married</label>
        </div>
      </div>
    </div>
  <hr>
  <h5>Have you ever been known by other names ?</h5>
  <div class="form-group row">
    <div class="col-md">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="other-name-radio" value="yes">
        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio"  name="other-name-radio" value="no">
        <label class="form-check-label" for="inlineCheckbox2">No</label>
      </div>
    </div>
  </div>
  <div class="hide1" id="other-name">
  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Other Name</label>
    </div>

    <div class="col-md-4">
      <input type="text" class="form-control" id="other-fname" name="other_fname" placeholder="first name">
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" id="other-lname" name="other_lname" placeholder="last name">
    </div>
  </div>
</div>
</div>
<div id="aadhar-number" class="hide" <?=@$hide1b?>>
  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Aadhar Number</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" id="" name="aadhar_number" placeholder="Aadhar number w/o dashes">
  </div>
  </div>

  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Name as per Aadhar</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="aadhar_name" placeholder="Name as per Aadhar">
  </div>
  </div>

  <div class="form-group row">
    <div class="col-md-4">
     <label for="exampleFormControlFile1">Aadhar Card</label>
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control bg bg-active" name="aadhar_card" id="exampleFormControlFile1">
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-md-4">Date Of Birth</label>
    <div class="col-md-6">
      <input placeholder="Selected date" id="dob-picker" type="date" name="dob" class="form-control"> 
    </div>
  </div>
</div>


 

<div id="parent-details" class="hide" <?=@$hide1b?>>
    <h4>Parent Details</h4>
    <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">Father's Name</label>
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" id="" name="father_fname" placeholder="first name">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" id="" name="father_lname" placeholder="last name">
      </div>
    </div>

  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Mother's Name</label>
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" id="" name="mother_fname" placeholder="first name">
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" id="" name="mother_lname" placeholder="last name">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Parent Name to be printed on PAN card</label>
    </div>
    <div class="col-md-6">
      <div class="form-check form-check-inline col-md-3">
        <input class="form-check-input" type="radio" name="parent_on_pan" id="parent_on_pan_father" value="father">
        <label class="form-check-label" for="parent_on_pan_father">Father</label>
      </div>
      <div class="form-check form-check-inline col-md-3">
        <input class="form-check-input" type="radio" name="parent_on_pan" id="parent_on_pan_mother" value="mother">
        <label class="form-check-label" for="parent_on_pan_mother">Mother</label>
      </div>
    </div>
  </div>
  <hr>
</div>



<!--     <small id="emailHelp" class="form-text text-muted"><strong>Note:-</strong>A copy of the in-principle approval of the regulatory authority should be required at the time of filing Incorporation forms if the business activities consists of Insurance, Bank, Stock exchange, Venture Capital, Asset Management, Nidhi, or Mutual Fund etc. </small> -->

<div class="hide" id="income">
<div class="form-group row" id="income-source">
    
    <div class="col-md-4">
     <label for="exampleFormControlFile1">Income Source</label>
    </div>
    <div class="col-md-6">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="income_source" id="inlineCheckbox1" value="no income">
        <label class="form-check-label" for="inlineCheckbox1">No Income</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="income_source" id="inlineCheckbox2" value="Business/ Profession">
        <label class="form-check-label" for="inlineCheckbox2">Business/ Profession</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="income_source" value="salaried">
        <label class="form-check-label" for="inlineCheckbox2">Salary</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="income_source" id="inlineCheckbox2" value="house property">
        <label class="form-check-label" for="inlineCheckbox2">House Property</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="capital gains" name="income_source">
        <label class="form-check-label" for="inlineCheckbox2">Capital Gains</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="other sources" name="income_source">
        <label class="form-check-label" for="inlineCheckbox2">Other Sources</label>
      </div>
  </div>
  </div>

  <div class="form-group row" id="annual-income">
    <div class="col-md-4">
      <label for="exampleFormControlSelect1">Annual Income (INR)</label>
    </div>
    <div class="col-md-6">
	    <select class="form-control" name="annual_income" id="exampleFormControlSelect1">
	      <option value="" disabled selected>Select your option</option>
	      <option value="Less than 3Lakh">Less than 3Lakh</option>
	      <option value="Between 3L and 5L">Between 3L and 5L</option>
	      <option value="Between 5L and 8L">Between 5L and 8L</option>
	      <option value="Greater than 8L">Greater than 8L</option>
	    </select>
	 </div>
  </div>
    <div class="form-group row" id="business-type">
    <div class="col-md-4">
      <label for="exampleFormControlSelect1">Business Type</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" name="business_type" id="exampleFormControlSelect1">
        <option value="" disabled selected>Select your option</option>
        <option value="Medical Profession and Business">Medical Profession and Business</option>
        <option value="Engineering">Engineering</option>
        <option value="Architecture">Architecture</option>
        <option value="Chartered Account/ Accountancy">Chartered Account/ Accountancy</option>
        <option value="Interior Decoration">Interior Decoration</option>
        <option value="Technical Consultancy">Technical Consultancy</option>
        <option value="Company Secretary">Company Secretary</option>
        <option value="Legal Practitioner and solicitors">Legal Practitioner and solicitors</option>
        <option value="Government Contractors">Government Contractors</option>
        <option value="Insurance Agency">Insurance Agency</option>
        <option value="others">others</option>


      </select>
  </div>
  </div>
</div>

<div id="address" class="hide">
  <h5>Address for Communication ?</h5>
  <div class="form-group row">
    <div class="col-md">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="comm-address" value="residence">
        <label class="form-check-label" for="inlineCheckbox1">Residence</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio"  name="comm-address" value="office">
        <label class="form-check-label" for="inlineCheckbox2">Office</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Residential Address</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" id="" name="residence_address" placeholder="Enter your Address">
    </div>
  </div>

  <div class="form-group row">
      <div class="col-md-4">
        <label for="exampleFormControlInput1">state</label>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="residence_state" placeholder="State">
      </div>
  </div>

  <div class="form-group row">
       <div class="col-md-4">
          <label for="exampleFormControlInput1">City</label>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="residence_city" placeholder="City">
        </div>
  </div>

  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Pincode</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="residence_pincode" placeholder="Pincode">
    </div>
  </div><hr>
  <div class="hide1" id="office-address">
  <div class="form-group row ">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Office Address</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="office_address" placeholder="Office Address">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-md-4">
        <label for="exampleFormControlInput1">state</label>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="office_state" placeholder="State">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">City</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="office_city" placeholder="City">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlInput1">Pincode</label>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" name="office_pincode" placeholder="Pincode">
    </div>
  </div>
</div>
</div>

<div id="document" class="hide">

  <h4>Documents</h4>
  <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlSelect1">Proof of ID</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" id="exampleFormControlSelect1" name="poi_name">
        <option value="" disabled selected>Select your option</option>
        <option value="Aadhar Card">Aadhar Card</option>
        <option value="Voter Card">Voter Card</option>
        <option value="Driving License">Driving License</option>
        <option value="Passport">Passport</option>
        <option value="Ration Card">Ration Card having applicant photo</option>
        
      </select>
   </div>
  </div>
  <div class="form-group row">
    <div class="col-md-4">
     <label for="exampleFormControlFile1">Upload Doc</label>
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control bg bg-active" id="exampleFormControlFile1" name="poi_doc">
    </div>
  </div>  

    <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlSelect1">Proof of Address</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" id="exampleFormControlSelect1" name="poa_name">
        <option value="" disabled selected>Select your option</option>
        <option value="Aadhar Card">Aadhar Card</option>
        <option value="Voter Card">Voter Card</option>
        <option value="Driving License">Driving License</option>
        <option value="Passport">Passport</option>
        <option value="Domicile Cerificate">Domicile Cerificate</option>
        <option value="Electricity/ water/ Telephone/ Broadband bill">Latest Electricity/ water/ Telephone/ Broadband/ Gas Connection bill</option>
        <option value="Rent Agreement">Rent Agreement</option>
        <option value="Domicile Cerificate">Domicile Cerificate</option>
      </select>
   </div>
  </div>
  <div class="form-group row">
    <div class="col-md-4">
     <label for="exampleFormControlFile1">Upload Doc</label>
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control bg bg-active" name="poa_doc" id="exampleFormControlFile1">
    </div>
  </div>  

    <div class="form-group row">
    <div class="col-md-4">
      <label for="exampleFormControlSelect1">Proof of Date of Birth</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" id="exampleFormControlSelect1" name="pob_name">
        <option value="" disabled selected>Select your option</option>
        <option value="Aadhar Card">Aadhar Card</option>
        <option value="Voter Card">Voter Card</option>
        <option value="Driving License">Driving License</option>
        <option value="Passport">Passport</option>
        <option value="Birth Certificate">Birth Certificate</option>
        <option value="mark sheet">Matriculation Certificate/ Mark Sheet of recognized board</option>
        <option value="Government ID card">ID card issued by Central/State Government</option>
      </select>
   </div>
  </div>
  <div class="form-group row">
    <div class="col-md-4">
     <label for="exampleFormControlFile1">Upload Doc</label>
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control bg bg-active" name="pob_doc" id="exampleFormControlFile1">
    </div>
  </div>
<hr>
  <div class="form-group row" <?=@$hide1b?>>
    <div class="col-md-4">
     <label for="exampleFormControlFile1">Applicant's Pic</label>
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control bg bg-active" name="applicant_pic">
    </div>
  </div>

  <div class="form-group row" <?=@$hide1b?>>
    <div class="col-md-4">
      <label for="exampleFormControlFile1">Applicant's Sign</label>
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control bg bg-active" name="applicant_sign">
    </div>
  </div>  
</div>
  <div id="tnc" class="hide">  
  <div class="form-check">
      <hr>
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
</div>

  <div class="form-group row">
  	<div class="col-md-5">
      <a type="submit" id="save-proceed-pan-btn" name="save-proceed-pan" class="btn btn-primary">Save and Proceed</a>&nbsp;
  	</div>
    <div class="col-md-7">
      <button type="submit" class="btn btn-success" name="save-proceed-pan-payment" id="submit-proceed-payement">Skip and Proceed to Payment</button>
  	</div>
</div>
</form><br> 
	</div>
</div>



<script type="text/javascript">
  <?php 
    //individual applicant  
    if($type=="1a" || $type=="2a" || $type=="3a"){
      ?>
        var elArray = ['basic-information','parent-details','aadhar-number','income','address','document','tnc'];
      <?php
    }
    else{ //for companies
      ?>
          var elArray = ['basic-information','address','income','document','tnc'];
      <?php
    }
      ?>

  var elementIndex=0;



  (function(){
    document.getElementById("save-proceed-pan-btn").addEventListener("click",function(){
    // elArray[elementIndex++].show(),  
    // elArray[elementIndex].hide(),
      if(elementIndex<elArray.length-1)
      {
        console.log("#"+elArray[elementIndex]);
       var tmp=elementIndex;
       ++elementIndex;

        document.querySelector("#"+elArray[tmp]).classList.toggle("hide");
        document.querySelector("#"+elArray[elementIndex]).classList.toggle("hide");
        if(elArray[elementIndex]=="tnc")
        {
          document.getElementById("save-proceed-pan-btn").classList.add("hide");  
          document.getElementById("submit-proceed-payement").innerHTML="Proceed to Payment";
        }
      }
      
    })
  })();

   $(document).ready(function(){
        $("input[type='radio'][name='other-name-radio']").click(function(){
          var radioValue = $("input[name='other-name-radio']:checked").val();
            if(radioValue=='yes'){
                document.querySelector("#other-name").classList.remove("hide1");
                  // alert("Your are a - " + radioValue);
            }
            else{
                document.querySelector("#other-name").classList.add("hide1");
            }

        });

        // comm address
        $("input[type='radio'][name='comm-address']").click(function(){
          var radioValue = $("input[name='comm-address']:checked").val();
            if(radioValue=='office'){
                document.querySelector("#office-address").classList.remove("hide1");
                  // alert("Your are a - " + radioValue);
            }
            else{
                document.querySelector("#office-address").classList.add("hide1");
            }

        });
    });

// $(document).ready(function(){
//   $("#document-btn").click(function(){
//     $("#"+visibleEl).toggle();
//   }),
// });

</script>
<?php 
include('controllers/db.php');
include('controllers/config.php');




?>





<!DOCTYPE html>
<html>
    
<!-- Mirrored from www.Gozyfarms.com/Gozyversion/registration.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 08:33:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="users/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="users/js/bootstrap.js" rel="stylesheet" type="text/css" media="all">

<script src="js/jquery-2.1.1.min.js"></script> 
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-image: url(images/bg.jpg);
  background-size: cover;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

select {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
select.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
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


</head>
<body>

<form id="regForm" method="post" action="#">
	<p align="center"><img src="images/logo.png" style="border-radius: 50em; width: 10em;"></p>
  <h1>Register:</h1>
	<?php 
		if($reg_success != ""){?>
			 <div class="alert alert-success">
			<strong>Success!</strong> Registration was successful. <a href="login/" class='btn btn-success'>Login Here</a>
			</div>
	<?php } ?>
  
  
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Names:

    <p><input placeholder="First name..." oninput="this.className = ''" type="text" name="fname" required autocomplete="off"></p>

    <p><input placeholder="Last name..." oninput="this.className = ''" type="text" name="lname" required autocomplete="off"></p>

  </div>
  <div class="tab">Contact Info:
    
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email" type="email" required autocomplete="off"></p>

    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone" type="number" required autocomplete="off"></p>

  </div>
  <div class="tab">Account Details:
  	
  	<p><input placeholder="Account number" oninput="this.className = ''" name="acct_no" type="number" required="required" autocomplete="off"></p>

    <p><select name="bank" oninput="this.className = ''" required>
    	<option disabled="disabled" selected="selected">Select bank</option>
	                <option>ACCESS BANK</option>
                            <option>ACCESSMOBILE</option>
                            <option>ASO SAVINGS AND LOANS</option>
                            <option>CELLULANT</option>
                            <option>CENTRAL BANK OF NIGERIA</option>
                            <option>CITIBANK</option>
                            <option>CORONATION MERCHANT BANK</option>
                            <option>CORPORETTI</option>
                            <option>COVENANT MICROFINANCE BANK</option>
                            <option>DIAMOND BANK</option>
                            <option>EARTHOLEUM (QIK QIK)</option>
                            <option>ECOBANK NIGERIA</option>
                            <option>ECOMOBILE</option>
                            <option>EKONDO MICROFINANCE BANK</option>
                            <option>ENTERPRISE BANK</option>
                            <option>EQUITORIAL TRUST BANK</option>
                            <option>E-TRANZACT</option>
                            <option>FBN M-MONEY</option>
                            <option>FBN MORTGAGES</option>
                            <option>FETS (MY WALLET)</option>
                            <option>FIDELITY BANK</option>
                            <option>FIDELITY MOBILE</option>
                            <option>FINATRUST MICROFINANCE BANK</option>
                            <option>FIRST BANK OF NIGERIA</option>
                            <option>FIRST CITY MONUMENT BANK</option>
                            <option>FIRST INLAND BANK</option>
                            <option>FORTIS MICROFINANCE BANK</option>
                            <option>FORTIS MOBILE</option>
                            <option>FSDH</option>
                            <option>GT MOBILE MONEY</option>
                            <option>GUARANTY TRUST BANK</option>
                            <option>HEDONMARK</option>
                            <option>HERITAGE BANK</option>
                            <option>IMPERIAL HOMES MORTGAGE BANK</option>
                            <option>INTERCONTINENTAL BANK</option>
                            <option>JAIZ BANK</option>
                            <option>JUBILEE LIFE</option>
                            <option>KEGOW</option>
                            <option>KEYSTONE BANK</option>
                            <option>MAINSTREET BANK</option>
                            <option>MIMONEY (POWERED BY INTELLIFIN)</option>
                            <option>M-KUDI</option>
                            <option>MONETIZE</option>
                            <option>MONEYBOX</option>
                            <option>NEW PRUDENTIAL BANK</option>
                            <option>NPF MFB</option>
                            <option>OCEANIC BANK</option>
                            <option>OMOLUABI SAVINGS AND LOANS</option>
                            <option>ONE FINANCE</option>
                            <option>PAGA</option>
                            <option>PAGE MFBANK</option>
                            <option>PARALLEX</option>
                            <option>PARKWAY (READY CASH)</option>
                            <option>PAYATTITUDE ONLINE</option>
                            <option>PAYCOM</option>
                            <option>PROVIDUS BANK</option>
                            <option>SAFETRUST MORTGAGE BANK</option>
                            <option>SEED CAPITAL MICROFINANCE BANK</option>
                            <option>SKYE BANK</option>
                            <option>STANBIC IBTC BANK</option>
                            <option>STANBIC MOBILE</option>
                            <option>STANDARD CHARTERED BANK</option>
                            <option>STERLING BANK</option>
                            <option>STERLING MOBILE</option>
                            <option>SUNTRUST</option>
                            <option>TEASY MOBILE</option>
                            <option>TRUSTBOND</option>
                            <option>U-MO</option>
                            <option>UNION BANK OF NIGERIA</option>
                            <option>UNITED BANK FOR AFRICA</option>
                            <option>UNITY BANK</option>
                            <option>VFD MICROFINANCE BANK</option>
                            <option>VISUAL ICT</option>
                            <option>VTNETWORK</option>
                            <option>WEMA BANK</option>
                            <option>ZENITH BANK</option>
                            <option>ZENITH MOBILE</option>
                          </select>
    </p>

  </div>
  <div class="tab">Login Info:

    <p><input placeholder="Password" oninput="this.className = ''" name="pass" type="password" required="required" autocomplete="off"></p>

    <p><input style="cursor: no-drop;" placeholder="Referal (if any)" value="" readonly="readonly" type="text" name="myref" autocomplete="off"></p>

  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

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
    document.getElementById("nextBtn").innerHTML = "<button type='submit' name='submit'>Submit</button>";
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
</body>

<!-- Mirrored from www.Gozyfarms.com/Gozyversion/registration.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 08:33:42 GMT -->
</html>
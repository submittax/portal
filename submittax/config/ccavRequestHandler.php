<html>
<head>
<title> SubmitTax Payment</title>
</head>
<body>
<center>
<?php include('Crypto.php')?>
<?php 

	error_reporting(0);

	$working_key='5E462F5110B4F6FBED0E846A54184270';//Shared by CCAVENUES
	$access_code='AVUH83GC79AH84HUHA';//Shared by CCAVENUES
	$merchant_data='';
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}
	
	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

	$production_url='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;
?>
<iframe src="<?php echo $production_url?>" id="paymentFrame" style="float:right" width="482" height="450" frameborder="0" scrolling="No" ></iframe>

<script type="text/javascript" src="jquery-1.7.2.js"></script>
<script type="text/javascript">
    	$(document).ready(function(){
    		 window.addEventListener('message', function(e) {
		    	 $("#paymentFrame").css("height",e.data['newHeight']+'px'); 	 
		 	 }, false);
	 	 	
		});
</script>
</center>
</body>
</html>


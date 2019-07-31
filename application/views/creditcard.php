<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pay | Creditcard</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet">
	<script src="http://staging.doku.com/doku-js/assets/js/doku-1.2.js"></script>
	<link href="http://staging.doku.com/doku-js/assets/css/doku.css" rel="stylesheet">
	
</head>
<body>

<?php 
require_once('pay/Doku.php');
Doku_Initiate::$sharedKey = 'U5M4zEteuQ84';
Doku_Initiate::$mallId = '7052';

$params = array('amount' => '10000.00','invoice' => '0120190724102635', 'currency' => '360');

$words = doku_Library::doCreateWords($params); ?>

<script type="text/javascript">
$(document).ready(function() {
var data = new Object();
data.req_merchant_code = '7052';
data.req_chain_merchant = 'NA';
data.req_payment_channel = '15'; // ‘15’ = credit card
data.req_transaction_id = '<?=$params['invoice']?>';
data.req_currency = '<?=$params['currency']?>';
data.req_amount = '<?=$params['amount']?>';
data.req_words = '<?php echo $words ?>';
data.req_form_type = 'full';
getForm(data, 'staging'); //for production environment, change ‘staging’ to ‘production’
});
</script>

<form action="charge" method="POST" id="payment-form">
    <div doku-div='form-payment'>
        <input id="doku-token" name="doku-token" type="hidden" />
        <input id="doku-pairing-code" name="doku-pairing-code" type="hidden" />
        <input id="doku-invoice-no" name="doku-invoice-no" type="hidden" />
    </div>
</form><br>
<center><a href>Start new payment request</a></center>
</body>
</html>
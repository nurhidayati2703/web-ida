<?php 
require_once('Doku.php');
Doku_Initiate::$sharedKey = 'U5M4zEteuQ84';
Doku_Initiate::$mallId = '7052';
$token = isset($_POST['doku-token'])?$_POST['doku-token']:'';
$pairing_code = isset($_POST['doku-pairing-code'])?$_POST['doku-pairing-code']:'';
$invoice_no = isset($_POST['doku-invoice-no'])?$_POST['doku-invoice-no']:'';
$params = array('amount' => '10000.00', 'invoice' => $invoice_no, 'currency' => '360', 'pairing_code' => $pairing_code, 'token' => $token);
$words = Doku_Library::doCreateWords($params);
$basket[] = array('name' => 'sayur', 'amount' => '10000.00', 'quantity' => '1', 'subtotal' => '10000.00');
$customer = array('name' => 'TEST NAME','data_phone' => '08121111111', 'data_email' => 'test@test.com', 'data_address' => 'bojong gede');
$dataPayment = array('req_mall_id' => '7052', 'req_chain_merchant' => 'NA','req_amount' => '10000.00','req_words' => $words, 'req_purchase_amount' => '10000.00', 'req_trans_id_merchant' => $invoice_no, 'req_request_date_time' => date('YmdHis'), 'req_currency' => '360', 'req_purchase_currency' => '360', 'req_session_id' => sha1(date('YmdHis')), 'req_name' => $customer['name'], 'req_payment_channel' => 15, 'req_basket' => $basket, 'req_email' => $customer['data_email'], 'req_token_id' => $token);
$result = Doku_Api::doPayment($dataPayment);
if($result->res_response_code == '0000'){
    echo 'SUCCESS';   //success
}else{
    echo 'FAILED';  //failed 
}

?>
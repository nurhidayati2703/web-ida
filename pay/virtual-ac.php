<?php 

require_once('Doku.php');
date_default_timezone_set('Asia/Jakarta');
Doku_Initiate::$sharedKey = 'U5M4zEteuQ84';
Doku_Initiate::$mallId = '7052';

$params = array('amount' => '10000.00', 'invoice' => 'INV-01910192032', 'currency' => '360');

$words = Doku_Library::doCreateWords($params);

$customer = array('name' => 'TEST NAME','data_phone' => '08121111111', 'data_email' => 'test@test.com', 'data_address' => 'bojong gede #1 08/01');

$dataPayment = array('req_mall_id' => '7052', 'req_chain_merchant' => 'NA', 'req_amount' => $params['amount'], 'req_words' => $words, 'req_trans_id_merchant' => 'INV-01910192032', 'req_purchase_amount' => $params['amount'], 'req_request_date_time' => date('YmdHis'), 'req_session_id' => sha1(date('YmdHis')), 'req_email' => $customer['data_email'], 'req_name' => $customer['name'], 'req_basket' => 'sayur,10000.00,1,10000.00;', 'req_address' => 'Jl Kembang 1 No 5 Cilandak Jakarta', 'req_mobile_phone' => '081987987999', 'req_expiry_time' => '360');

$response = Doku_Api::doGeneratePaycode($dataPayment);

print_r($response);

if(isset($response->res_response_code)){
        echo 'GENERATE SUCCESS -- ';
}else{
        echo 'GENERATE FAILED -- ';
} ?>
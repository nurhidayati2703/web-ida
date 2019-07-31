<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
    
    public function index()
    {
        $this->load->view('payment');
    }
	
	public function charge(){
	
		require_once('pay/Doku.php');
		Doku_Initiate::$sharedKey = 'U5M4zEteuQ84';
		Doku_Initiate::$mallId = '7052';
		$token = isset($_POST['doku_token'])?$_POST['doku_token']:'';
		$pairing_code = isset($_POST['doku_pairing_code'])?$_POST['doku_pairing_code']:'';
		$invoice_no = isset($_POST['doku_invoice_no'])?$_POST['doku_invoice_no']:'';
		$params = array('amount' => '10000.00', 'invoice' => $invoice_no, 'currency' => '360', 'pairing_code' => $pairing_code, 'token' => $token);
		$words = Doku_Library::doCreateWords($params);
		$basket[] = array('name' => 'TES', 'amount' => '10000.00', 'quantity' => '1', 'subtotal' => '10000.00');
		
		$customer = array('name' => 'TEST NAME','data_phone' => '08121111111', 'data_email' => 'test@test.com', 'data_address' => 'bojong gede');
		
		$dataPayment = array(
		 'req_mall_id' => Doku_Initiate::$mallId,
		 'req_chain_merchant' => 'NA',
		 'req_amount' => '10000.00',
		 'req_words' => $words,
		 'req_purchase_amount' => '10000.00',
		 'req_trans_id_merchant' => $invoice_no,
		 'req_request_date_time' => date('YmdHis'),
		 'req_currency' => '360',
		 'req_purchase_currency' => '360',
		 'req_session_id' => sha1(date('YmdHis')),
		 'req_name' => $customer['name'],
		 'req_payment_channel' => 15,
		 'req_basket' => $basket,
		 'req_email' => $customer['data_email'],
		 'req_token_id' => $token,
		 'req_mobile_phone' => $customer['data_phone'],
		 'req_address' => $customer['data_address']
		 );
	 
		//print_r($dataPayment)."<hr>";
 
		$responsePayment = Doku_Api::doPayment($dataPayment);
		
		//print_r($result)."<hr>";
		
		if($responsePayment->res_response_code == '0000'){

			//merchant process
			//do what you want to do

			//process tokenization
			if(isset($responsePayment->res_bundle_token)) {
				$tokenPayment = json_decode($responsePayment->res_bundle_token);

				if ($tokenPayment->res_token_code == '0000') {
					//save token
					$getTokenPayment = $tokenPayment->res_token_payment;
				}
			}

			//redirect process to doku
	//        $responsePayment->res_redirect_url = '../example-payment/merchant-redirect-example.php';
			$responsePayment->res_redirect_url = '../payment/?TRANSIDMERCHANT='.$responsePayment->res_response_msg;
			$responsePayment->res_show_doku_page = true; //true if you want to show doku page first before redirecting to redirect url
			
			//example : Response doku to merchant
			//MIPPayment.processRequest ACKNOWLEDGE : {"res_approval_code":"245391","res_trans_id_merchant":"invoice_1461728094","res_amount":"50000.00","res_payment_date_time":"20160427003515","res_verify_score":"-1","res_verify_id":"","res_verify_status":"NA","res_words":"00a22b8d81a731d948605b682578d6a9074de5c47498312cd13abd0ef2f80e7a","res_response_msg":"SUCCESS","res_mcn":"5*****8754","res_mid":"094345145394964","res_bank":"Bank BNI","res_response_code":"0000","res_session_id":"b249a07ff9c5251dddc87997d482836ea3b8affd","res_payment_channel":"15"}        
			
			echo json_encode($responsePayment);

		}else{

			echo json_encode($responsePayment);

		}
	
	}
	
	public function va (){
	
		require_once('pay/Doku.php');
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
		} 
	
	}
  
}

?>
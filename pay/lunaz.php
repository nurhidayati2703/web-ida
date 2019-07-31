lunaz
<?php

$header = array(
'Content-Type: application/json',
'Accept: application/json');

$key='iuheWEI3klfODAKSkaOSkjse';
$code='1129';

$signature = hash('sha256',$code.hash('sha256', $key));

$data = array( 
'offline' => false, // konstan
'code' => '1129', // bank tersedia: bca, bni, mandiri, bri, muamalat
'signature' => $signature // jumlah request
);

$ch = curl_init('https://ib.bankmandiri.co.id/retail/TrxHistoryInq.do');
		curl_setopt( $ch, CURLOPT_POST, 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $ch, CURLOPT_HEADER, 0);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);

		$responseJson = curl_exec( $ch );

		curl_close($ch);



print_r($responseJson); // ini berupa data json
<?php 
if(isset($_POST['doku_token'])){
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

//}else{
    //prepayment fail
//  echo json_encode($responsePrePayment);
//}
	die();
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>Payment Ticket | Intelligent Transport System Indonesia 2019</title>
    <meta name="description" content="Responsive EventHunt HTML Template"/>
    <meta name="keywords" content="Bootstrap3, Event,  Conference, Meetup, Template, Responsive, HTML5"/>
    <meta name="author" content="themearth.com"/>

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@yourtwitterusername"/>
    <meta name="twitter:creator" content="@yourtwitterusername"/>
    <meta name="twitter:url" content="http://yourdomain.com"/>
    <meta name="twitter:title" content="Your home page title, max 140 char"/>
    <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char "/>
    <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/img/twittercardimg/twittercard-280-150.jpg"/>
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends from here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title"/>
    <meta property="og:url" content="http://your domain here.com"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Your site name here"/>
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="assets/img/opengraph/fbphoto.jpg"/>
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>/assets/img/favicon.ico"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="<?= base_url();?>/assets/img/favicon.ico"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url();?>/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url();?>/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url();?>/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url();?>/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url();?>/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url();?>/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url();?>/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url();?>/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url();?>/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url();?>/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url();?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url();?>/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url();?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url();?>/assets/img/favicon/manifest.json">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/libs/bootstrap/css/bootstrap.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/libs/fontawesome/css/font-awesome.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/libs/maginificpopup/magnific-popup.css" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/libs/timer/TimeCircles.css" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="<?= base_url();?>/assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="<?= base_url();?>/assets/css/style-default.min.css" media="all"/>
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
	
    <!-- MODERNIZER CSS  -->
    <script src="<?= base_url();?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
	
	<!-- CUSTOM  STYLESHEET  -->
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/style-custom.css" media="all"/>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet">
	<script src="https://staging.doku.com/doku-js/assets/js/doku-1.2.js"></script>
	<link href="https://staging.doku.com/doku-js/assets/css/doku.css" rel="stylesheet">

	
</head>

<body class="home">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="lgx-container ">
<!-- ***  ADD YOUR SITE CONTENT HERE *** -->


<!--HEADER-->
<header>
    <div id="lgx-header" class="lgx-header">
        <div class="lgx-header-position lgx-header-position-white lgx-header-position-fixed "> <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
            <div class="lgx-container"> <!--lgx-container-fluid-->
                <nav class="navbar navbar-default lgx-navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="lgx-logo">
                            <a href="index.html" class="lgx-scroll">
                                <img src="<?= base_url();?>/assets/img/logo-its-white.png" alt="Eventhunt Logo"/>
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <div class="lgx-nav-right navbar-right">
                            <div class="lgx-cart-area">
                                <a class="lgx-btn lgx-btn-red" href="buy-ticket.html">Buy Ticket</a>
                            </div>
                        </div>
                        <ul class="nav navbar-nav lgx-nav navbar-right">
                            
                            <li><a class="lgx-scroll" href="index.html">Home</a></li>
                            <li><a class="lgx-scroll" href="about.html">About</a></li>
							<!--<li><a class="lgx-scroll" href="#lgx-speakers">Speaker</a></li>-->
                            <li><a class="lgx-scroll" href="schedules.html">Schedule</a></li>
                            <li><a class="lgx-scroll" href="contact.html">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </nav>
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</header>
<!--HEADER END-->



    <!--Banner Inner-->
    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">BUY TICKET</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                    <li><a href="index.html">Ticket</a></li>
                                    <li><a href="index.html">Buy Ticket Form</a></li>
                                    <li class="active">Payment</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.Banner Inner-->


    <main>
        <div class="lgx-page-wrapper">
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-6 col-md-offset-3">
<?php 
require_once('pay/Doku.php');
Doku_Initiate::$sharedKey = 'U5M4zEteuQ84';
Doku_Initiate::$mallId = '7052';

date_default_timezone_set("Asia/Bangkok");
$invoice='01'.date("YmdHis");

$params = array('amount' => '10000.00','invoice' => "$invoice", 'currency' => '360');

$words = doku_Library::doCreateWords($params); 

?>

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
data.req_customer_id = '12124';
getForm(data, 'staging'); //for production environment, change ‘staging’ to ‘production’
});
</script>

<form action="http://its-event.co.id/payment/payment/charge" method="POST" id="payment-form">
    <div doku-div='form-payment'>
        <input id="doku-token" name="doku-token" type="hidden" />
        <input id="doku-pairing-code" name="doku-pairing-code" type="hidden" />
        <input id="doku-invoice-no" name="doku-invoice-no" type="hidden" />
    </div>
</form>
                           

                        </div> <!--//.COL-->
                    </div>
                </div><!-- //.CONTAINER -->
            </section>
            <!--News END-->
            <?php if ($this->session->flashdata('pesan_berhasil')) { ?>
                                        <div style="text-align:center"class="alert alert-success"> <?= $this->session->flashdata('pesan_berhasil')?> </div>
                                    <?php } ?>
        </div>
    </main>

<!--FOOTER-->
<footer>
    <div id="lgx-footer" class="lgx-footer lgx-footer-black"> <!--lgx-footer-black-->
        <div class="lgx-inner-footer">
           
            <div class="container">
                <div class="lgx-footer-area">
                    <div class="lgx-footer-single">
                        <a class="logo" href="index.html"><img src="<?= base_url();?>/assets/img/footer-logo-its.png" alt="Logo"></a>
                    </div> <!--//footer-area-->
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Venue Location </h3>
                        <h4 class="date">
                            26-28 October, 2019
                        </h4>
                        <address>
                            Jakarta - Bali, Indonesia
                        </address>
                        <a id="myModalLabel2" data-toggle="modal" data-target="#lgx-modal-map" class="map-link" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> View Map location</a>
                    </div>
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Social Connection</h3>
                        <p class="text">
                            You should connect social area <br> for Any update
                        </p>
                        <ul class="list-inline lgx-social-footer">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Modal-->
                <div id="lgx-modal-map" class="modal fade lgx-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="lgxmapcanvas map-canvas-default" id="map_canvas"> </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- //.Modal-->

                <div class="lgx-footer-bottom">
                    <div class="lgx-copyright">
                         <p> <span>©</span> 2019 Intelligent Transport System is powered by <a href="#">PT Gamatechno Indonesia.</a></p>
                    </div>
                </div>

            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.footer Middle -->
    </div>
</footer>
<!--FOOTER END-->


</div>
<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->

<!-- BOOTSTRAP JS  -->
<script src="<?= base_url();?>/assets/libs/bootstrap/js/bootstrap.min.js"></script>

<!-- Smooth Scroll  -->
<script src="<?= base_url();?>/assets/libs/jquery.smooth-scroll.js"></script>

<!-- SKILLS SCRIPT  -->
<script src="<?= base_url();?>/assets/libs/jquery.validate.js"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvRGGtL6OrpP5xVMxq_0NgiMiRhm3ycI"></script>

<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="<?= base_url();?>/assets/libs/gmap/jquery.googlemap.js"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="<?= base_url();?>/assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- Owl Carousel  -->
<script src="<?= base_url();?>/assets/libs/owlcarousel/owl.carousel.min.js"></script>

<!-- COUNTDOWN   -->
<script src="<?= base_url();?>/assets/libs/countdown.js"></script>
<script src="<?= base_url();?>/assets/libs/timer/TimeCircles.js"></script>

<!-- Counter JS -->
<script src="<?= base_url();?>/assets/libs/waypoints.min.js"></script>
<script src="<?= base_url();?>/assets/libs/counterup/jquery.counterup.min.js"></script>

<!-- SMOTH SCROLL -->
<script src="<?= base_url();?>/assets/libs/jquery.smooth-scroll.min.js"></script>
<script src="<?= base_url();?>/assets/libs/jquery.easing.min.js"></script>

<!-- type js -->
<script src="<?= base_url();?>/assets/libs/typed/typed.min.js"></script>

<!-- header parallax js -->
<script src="<?= base_url();?>/assets/libs/header-parallax.js"></script>

<!-- instafeed js -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
<script src="<?= base_url();?>/assets/libs/instafeed.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="<?= base_url();?>/assets/js/custom.script.js"></script>







</body>
</html>

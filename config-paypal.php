<?php 
 
// Product Details 
$itemNumber = "DP12345"; 
$itemName = "Demo Product"; 
$itemPrice = 100;  
$currency = "USD"; 
 
/* PayPal REST API configuration 
 * You can generate API credentials from the PayPal developer panel. 
 * See your keys here: https://developer.paypal.com/dashboard/ 
 */ 
define('PAYPAL_SANDBOX', true); //TRUE=Sandbox | FALSE=Production 
define('PAYPAL_SANDBOX_CLIENT_ID', 'AY4n34WUiajM7q-gc3NWjji_ruqjE7jsq6mBLcPVPe8ILtDYmpUT016DQMddG2PZyS21i3bOge_xiJaC'); 
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EPTO424azhkDkovNoOA1FEo1yAkcSr5jqK9VeVqZQnQbrfZyh0fu2Fa4ssmXubynAGEPOnhp7AwYki8E'); 
define('PAYPAL_PROD_CLIENT_ID', 'AT0f05LN5fpPpztgmcdkeqU3lx5Gw5W3Ogag5vi_ev9-R7WayqNEY817vLik_yLr2D00y58sMYXw1WT3'); 
define('PAYPAL_PROD_CLIENT_SECRET', 'EGbBcnIJFnlRZ-prfZpPbCF8sR7BFXTHAyuybObBCf7u5AyzHZ0OYvFugC5iDb9lh8b0x_EIOh7da-YI'); 
  
// Database configuration  
// define('DB_HOST', 'kingdomvn.store');  
// define('DB_USERNAME', 'u950735164_perfume');  
// define('DB_PASSWORD', 'Kingdomvn@123');  
// define('DB_NAME', 'u950735164_perfume'); 
 
?>

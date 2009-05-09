<?php

/* 
You need the nusoap library bundled here, please extract it to lib/ 

Set $username, $senderid, $password, $message, $numbers etc. to the 
correct values.
*/

require_once('lib/nusoap.php');

$username1 = "janeesh";
$password1 = "tasc787captain";
$senderid1 = "QREAD";//this will be for gsm numbers, you can set the cdma sender id in the website. GSM sender id should be max 11 chars
$api_path = "http://api.infinitesms.in/webservice/falertservicerevised.php?wsdl";
$client = new soapclient1($api_path, true);
$param = array('username'=>$username1, 'senderid'=>$senderid1, 'password'=>$password1, 'message'=>$message, 'number'=>$numbers);

?>


<?php

/* 
You need the nusoap library bundled here, please extract it to lib/ 

Set $username, $senderid, $password, $message, $numbers etc. to the 
correct values.
*/

require_once('api.php');



$result = $client->call('getBalance', $param, '', '', false, true);



?>


<?php

/**
 * simsimi_api - simsimi_api.php is a php file which is requesting information to Server.
 *
 * @Project Simsimi API Example
 * @Date 2014.08.04
 */


include("request_param.php");


$requestparam = new requestParam();
$key = $requestparam->getKey();
$requestparam->setLC(($_GET['lc']));
$requestparam->setText($_GET['text']);
$lc = $requestparam->getLC();
$text =$requestparam->getText();


$ch = curl_init(); // Session Initialization.
curl_setopt ($ch, CURLOPT_URL,"http://api.simsimi.com/request.p?key=".$key."&lc=vn&ft=1.0&text=".$text); // URL to request information to Server.
curl_setopt ($ch, CURLOPT_HTTPGET, 1); // Http method is GET
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); // whether you receitved returned result
$result = curl_exec ($ch); //curl execute.
$result = json_decode($result,true);
curl_close ($ch); // close curl session.


    header('Content-type: application/json');


echo '{
 "messages": [
   {"text": "'.$result['response'].'"}
 ]
}';

?>
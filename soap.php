<?php

$wsdl   = "https://10.50.171.106:501/indigo.asmx?wsdl";
$client = new SoapClient($wsdl, array('trace'=>1));  // The trace param will show you errors stack

// web service input params
$request_param = array(
    "TransactionId" => "1234",
    "ServiceUser" => "user",
    "ServicePassword" => "pass123",
    "MSISDN" => "03001234567",
    "Amount" => "50"
);

try
{
    $responce_param = $client->webservice_methode_name($request_param);
    //$responce_param =  $client->call("webservice_methode_name", $request_param); // Alternative way to call soap method
}
catch (Exception $e)
{
    echo "<h2>Exception Error!</h2>";
    echo $e->getMessage();
}
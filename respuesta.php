<?php
/**
 * I initialize the PHP SDK
 */
require_once __DIR__ . '/rest-php-sdk-master/src/autoload.php';
require_once __DIR__ . '/keys.php';

/** 
 * Initialize the SDK 
 * see keys.php
 */
$client = new Lyra\Client();
//$_POST['kr-hash']= 'Yga5AOlU5qomnyEj3EQvwMvpotybpd7q4Yk0z9ZZtUaJQ';

/* Check the signature using password */

if (!$client->checkHash()) {
    //something wrong, probably a fraud ....
    signature_error($formAnswer['kr-answer']['transactions'][0]['uuid'], $hashKey, 
                    $client->getLastCalculatedHash(), $_POST['kr-hash']);
    throw new Exception('invalid signature');
}

$rawAnswer = $client->getParsedFormAnswer();
$formAnswer = $rawAnswer['kr-answer'];

/* Retrieve the transaction id from the IPN data */
$transaction = $formAnswer['transactions'][0];

/* get some parameters from the answer */
$orderStatus = $formAnswer['orderStatus'];
$orderId = $formAnswer['orderDetails']['orderId'];
$transactionUuid = $transaction['uuid'];

echo json_encode($formAnswer);

?>
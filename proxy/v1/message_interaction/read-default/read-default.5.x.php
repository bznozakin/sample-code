<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
$sid    = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token  = "your_auth_token";
$twilio = new Client($sid, $token);

$messageInteractions = $twilio->proxy->v1->services("KSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->sessions("KCXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->participants("KPXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->messageInteractions
                                         ->read();

foreach ($messageInteractions as $record) {
    print($record->sid);
}
<?php

use EvansWanguba\OnfonmediaSMS\BulkSMS;

require "vendor/autoload.php";

$onfonmediaSms = new BulkSMS();

/*
* Send Bulk SMS
*/
$message = "This is just a notification";
$bulkSms = [
    [
        "Number" => "254700000000", "Text" => $message
    ],
    [
        "Number" => "254700000001", "Text" => $message
    ]
];
$onfonmediaSms->sendBulkSms($bulkSms);

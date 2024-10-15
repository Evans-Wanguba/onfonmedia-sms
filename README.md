# Onfon Media Bulk SMS API

This is a PHP package for Onfon Media Bulk SMS API integration. 
For more information, check out [Onfon Media Bulk SMS API](https://developer.onfonmedia.co.ke) Guide.

## Installation

Pull in the package through Composer.
```bash
composer require evans-wanguba/onfonmedia-sms
```

Create the following variables in your .env file.
Find Sender ID under Dashboard > Sender IDs > All Sender IDs
Find API Key under Dashboard > Settings > API SETTINGS tab
Find Client ID under Dashboard > Settings > API SETTINGS tab
```bash
ONFONMEDIA_SMS_SENDER_ID=SenderID
ONFONMEDIA_SMS_API_KEY=APIKey
ONFONMEDIA_SMS_CLIENT_ID=ClientID
```

## Supported API Services
- Bulk SMS

## Usage
To send bulk SMS request is simple. Just initiate the `BulkSMS` and post the transaction:
```php
use EvansWanguba\OnfonmediaSMS\BulkSMS;

require "vendor/autoload.php";

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
```

## Support
Email me at `ewanguba@gmail.com`

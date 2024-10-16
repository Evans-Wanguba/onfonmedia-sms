<?php

namespace EvansWanguba\OnfonmediaSMS;

/**
 * Class BulkSMS.
 *
 * @category PHP
 * @author   Evans Wanguba <ewanguba@gmail.com>
 */
class BulkSMS
{
    /**
     * The base URI to be called.
     *
     * @var string
     */
    private $baseUri = 'https://api.onfonmedia.co.ke/v1/sms/SendBulkSMS';

    /**
     * Initiate a BancAssuranceFileService request.
     *
     * @return string
     */
    public function sendBulkSms($params)
    {
        try {            
            // API Credentials
            $api_key = env('ONFONMEDIA_SMS_API_KEY');
            $sender_id = env('ONFONMEDIA_SMS_SENDER_ID'); 
            $client_id = env('ONFONMEDIA_SMS_CLIENT_ID');

            // Prepare the payload
            $payload = json_encode([
                'SenderId' => $sender_id,
                'MessageParameters' => $params,
                'ApiKey' => $api_key,
                'ClientId' => $client_id
            ]);
            
            // Initialize cURL
            $ch = curl_init($this->baseUri);
            
            // Set cURL options
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'AccessKey: ' . $api_key,
                'Content-Type: application/json',
            ]);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            
            // Execute the request
            $response = curl_exec($ch);
            
            // Close cURL session
            curl_close($ch);

            return $response;
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}

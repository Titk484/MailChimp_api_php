<?php
$email = $_POST['subscriber_email'];
if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    // MailChimp API credentials
    $apiKey = '6fda41c3f5c978940596d9b70e31e054-us21';
    $audienceId = '9c83bd5a92';
    
    // MailChimp API URL
    $memberID   = md5(strtolower($email));
    $dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
    $url        = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $audienceId . '/members/' . $memberID;
    
    // member information
    $dmail = array(
        'email_address' => $email,
        'status' => 'subscribed'
    );
    $json  = json_encode($dmail);
    
    // send a HTTP POST request with curl
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result   = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
}
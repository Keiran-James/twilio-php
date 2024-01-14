<?php
require(__DIR__.'/../src/Twilio/autoload.php');

use Twilio\Rest\Client;

$sid = "ACf3749560e2c799e1c5295a150e82b464";
$token = "ca8d67a3a65b854024618bc3f9732f88";
$client = new Client($sid, $token);

// Specify the phone numbers in [E.164 format](https://www.twilio.com/docs/glossary/what-e164) (e.g., +16175551212)
// This parameter determines the destination phone number for your SMS message. Format this number with a '+' and a country code
$phoneNumber = "+61421024697";

// This must be a Twilio phone number that you own, formatted with a '+' and country code
$twilioPurchasedNumber = "+61481615022";

// Send a text message
$message = $client->messages->create(
    $phoneNumber,
    [
        'from' => $twilioPurchasedNumber,
        'body' => "Hey Keiran! This is a test text message."
    ]
);
print("Message sent successfully with sid = " . $message->sid ."\n\n");

// Print the last 10 messages
$messageList = $client->messages->read([],10);
foreach ($messageList as $msg) {
    print("ID:: ". $msg->sid . " | " . "From:: " . $msg->from . " | " . "TO:: " . $msg->to . " | "  .  " Status:: " . $msg->status . " | " . " Body:: ". $msg->body ."\n");
}

$response->say("Hello World!");

header("content-type: text/xml");
echo $response;
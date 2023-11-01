<?php
require_once("./vendor/autoload.php");

use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;
  //{"title": "hello", "body":"hello body", "url": "http://localhost:3000"}
$auth = [
    'VAPID' => [
        'subject' => 'mailto:me@website.com', // can be a mailto: or your website address
        'publicKey' => 'BOzeUpvZ9K0cw0v4Us7gad1C11aMEwmxmF95_gb6_y7FP_aQMY2F7aFU3z8vqa-c1M6FSdfW5bTXPoMS1k0pNIc', 
        'privateKey' => 'qvL8murvzGZtXGlrheqo6-96ZRjl1yxLCiDiNhDf98k'
    ],
];

$webPush = new WebPush($auth);

$subscription = Subscription::create(json_decode('{"endpoint":"https://fcm.googleapis.com/fcm/send/ffPFAXkZQCk:APA91bH1Z1cLDBCIzr98Le9G1wosaLu3cDrTpXtA7hqnwzcVuXfavQ7_yAEYx4f_k3rPHttPgHqA-EXmCb-JRKsCTtAhkkoKlNrcHXmKa9hFpRM0iDu6Syz4QODMXwlxIQyESyPGHbd7","expirationTime":null,"keys":{"p256dh":"BHrQCKX31BlVYVRFQugxTiJKE3tCdMCoz66g4RSrg3hCZxyscht8T3y2rxB3bkdqbVj6GeJZu0KCOlRvshaUAeo","auth":"JF0vQgQCdpO7V6oc2hujvw"}}', true));
$payload = '{"title": "hello", "body":"hello body", "url": "http://localhost:3000"}';
$report = $webPush->sendOneNotification($subscription, $payload, ['TTL' => 5000]);

print_r($report);

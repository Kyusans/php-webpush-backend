<?php
require_once("vendor/autoload.php");

use Minishlink\WebPush\VAPID;

$vapidKeys = VAPID::createVapidKeys();

print_r($vapidKeys);

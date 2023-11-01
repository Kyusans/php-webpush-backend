<?php
require_once("vendor/autoload.php");

use Minishlink\WebPush\VAPID;

$vapidKeys = VAPID::createVapidKeys();

var_dump(VAPID::createVapidKeys());

/* 
  ["publicKey"]=> BA-Nqq2lYA6oDxHWLf-He6WjjjwQp-A_k_pGwBHg2vx8S0Nu-bKI1zD-WUpnDywVmJ8KCMZvmVxfhBtHPTQwqbE
  ["privateKey"]=> M_mjCj0IkN-D1tq0RyPd3uISOXSJkjJrLVwZbYyKx0Y
*/
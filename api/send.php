<?php

use Minishlink\WebPush\WebPush;

$auth = [
    'VAPID' => [
        'subject' => 'mailto:me@website.com', // can be a mailto: or your website address
        'publicKey' => 'BA-Nqq2lYA6oDxHWLf-He6WjjjwQp-A_k_pGwBHg2vx8S0Nu-bKI1zD-WUpnDywVmJ8KCMZvmVxfhBtHPTQwqbE', 
        'privateKey' => 'M_mjCj0IkN-D1tq0RyPd3uISOXSJkjJrLVwZbYyKx0Y'
    ],
];

$webPush = new WebPush($auth);
<?php


require __DIR__ . '/vendor/autoload.php';

use \App\DTO\LongDelivery\RequestDTO;

$Server = new RequestDTO(['ss'=>'sad']);
dd($Server);

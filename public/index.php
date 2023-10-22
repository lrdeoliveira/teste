<?php

use Beerandcode\Modulo5\Services\Checkout;

require __DIR__.'/../vendor/autoload.php';

$service = new Checkout("bbbb@.com" , 1000);

echo $service->handle();
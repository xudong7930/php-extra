<?php

require 'vendor/autoload.php';

use Acme\Billing\StripBilling;
use Acme\Billing\StripBilling as S;

$strip = new StripBilling;
var_dump($strip);

var_dump(new S);

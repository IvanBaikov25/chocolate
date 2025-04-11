<?php

require 'vendor/autoload.php';

use ChocolateFactoryChocolateFactory;

$factory = new ChocolateFactory();
$factory->orderSnack('bar');
$factory->orderSnack('truffle');
$factory->orderSnack('cookie');

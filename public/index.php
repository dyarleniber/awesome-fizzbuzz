<?php

require_once __DIR__ . '/../vendor/autoload.php';

use FizzBuzz\BuzzHandler;
use FizzBuzz\FizzBuzzHandler;
use FizzBuzz\FizzHandler;
use FizzBuzz\PlainNumberHandler;

$chain = (new FizzBuzzHandler())
    ->setNext(new BuzzHandler())
    ->setNext(new FizzHandler())
    ->setNext(new PlainNumberHandler());

for ($i = 1; $i <= 100; $i++) {
    echo $chain->handle($i) . "\n";
}

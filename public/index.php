<?php declare (strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\BuzzHandler;
use App\FizzBuzzHandler;
use App\FizzHandler;
use App\PlainNumberHandler;

$chain = new FizzBuzzHandler();
$chain->setNext(new BuzzHandler())
    ->setNext(new FizzHandler())
    ->setNext(new PlainNumberHandler());

for ($i = 1; $i <= 100; $i++) {
    echo "{$chain->handle($i)} <br />";
}

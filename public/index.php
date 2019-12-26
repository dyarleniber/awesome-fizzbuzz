<?php declare (strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Builder\Director;
use App\Builder\FullBuilder;

$chain = (new Director())->build(
    new FullBuilder()
);

for ($i = 1; $i <= 100; $i++) {
    echo "{$chain->handle($i)} <br />";
}

<?php declare (strict_types = 1);

namespace App\Builder;

use App\ChainOfResponsibility\BuzzHandler;
use App\ChainOfResponsibility\FizzBuzzHandler;
use App\ChainOfResponsibility\FizzHandler;
use App\ChainOfResponsibility\PlainNumberHandler;

class FullBuilder extends Builder
{
    public function getHandlers(): array
    {
        return [
            new FizzBuzzHandler(),
            new BuzzHandler(),
            new FizzHandler(),
            new PlainNumberHandler(),
        ];
    }
}

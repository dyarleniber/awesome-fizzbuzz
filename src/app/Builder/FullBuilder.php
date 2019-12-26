<?php declare (strict_types = 1);

namespace App\Builder;

use App\ChainOfResponsibility\BuzzHandler;
use App\ChainOfResponsibility\FizzBuzzHandler;
use App\ChainOfResponsibility\FizzHandler;
use App\ChainOfResponsibility\Handler;
use App\ChainOfResponsibility\PlainNumberHandler;

class FullBuilder implements Builder
{
    private $chain;

    public function addHandlers(): void
    {
        $this->chain = new FizzBuzzHandler();
        $this->chain->setNext(new BuzzHandler())
            ->setNext(new FizzHandler())
            ->setNext(new PlainNumberHandler());
    }

    public function getChain(): Handler
    {
        return $this->chain;
    }
}

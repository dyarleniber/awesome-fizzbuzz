<?php

namespace Tests\App;

use App\Builder\Director;
use App\Builder\FullBuilder;
use App\ChainOfResponsibility\BuzzHandler;
use App\ChainOfResponsibility\FizzBuzzHandler;
use App\ChainOfResponsibility\FizzHandler;
use App\ChainOfResponsibility\PlainNumberHandler;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanBuildFullChain()
    {
        $fizzBuzzHandler = (new Director())->build(
            new FullBuilder()
        );
        $buzzHandler = $fizzBuzzHandler->getNext();
        $fizzHandler = $buzzHandler->getNext();
        $plainNumberHandler = $fizzHandler->getNext();

        $this->assertInstanceOf(FizzBuzzHandler::class, $fizzBuzzHandler);
        $this->assertInstanceOf(BuzzHandler::class, $buzzHandler);
        $this->assertInstanceOf(FizzHandler::class, $fizzHandler);
        $this->assertInstanceOf(PlainNumberHandler::class, $plainNumberHandler);
    }
}

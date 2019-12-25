<?php

namespace Tests\App;

use App\BuzzHandler;
use App\FizzBuzzHandler;
use App\FizzHandler;
use App\PlainNumberHandler;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    private $chain;

    protected function setUp(): void
    {
        $this->chain = new FizzBuzzHandler();
        $this->chain->setNext(new BuzzHandler())
            ->setNext(new FizzHandler())
            ->setNext(new PlainNumberHandler());
    }

    /**
     * @dataProvider additionProvider
     */
    public function testHandler($request, $expected)
    {
        $this->assertSame($expected, $this->chain->handle($request));
    }

    public function additionProvider()
    {
        return [
            'Fizz' => [3, 'Fizz'],
            'Fizz' => [6, 'Fizz'],
            'Fizz' => [9, 'Fizz'],
            'Buzz' => [5, 'Buzz'],
            'Buzz' => [10, 'Buzz'],
            'Buzz' => [20, 'Buzz'],
            'FizzBuzz' => [15, 'FizzBuzz'],
            'FizzBuzz' => [30, 'FizzBuzz'],
            'FizzBuzz' => [45, 'FizzBuzz'],
            'Plain number' => [1, '1'],
            'Plain number' => [2, '2'],
            'Plain number' => [4, '4'],
        ];
    }
}

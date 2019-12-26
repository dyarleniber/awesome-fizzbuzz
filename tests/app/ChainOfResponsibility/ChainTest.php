<?php

namespace Tests\App;

use App\Builder\Director;
use App\Builder\FullBuilder;
use PHPUnit\Framework\TestCase;

class ChainTest extends TestCase
{
    private $chain;

    protected function setUp(): void
    {
        $this->chain = (new Director())->build(
            new FullBuilder()
        );
    }

    /**
     * @dataProvider additionProvider
     */
    public function testHandlers($request, $expected)
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

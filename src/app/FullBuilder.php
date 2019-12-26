<?php declare (strict_types = 1);

namespace App;

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

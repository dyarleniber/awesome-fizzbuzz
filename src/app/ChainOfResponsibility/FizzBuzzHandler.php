<?php declare (strict_types = 1);

namespace App\ChainOfResponsibility;

class FizzBuzzHandler extends Handler
{
    public function handle(int $request): ?string
    {
        if ($request % 15 === 0) {
            return "FizzBuzz";
        }

        return parent::handle($request);
    }
}

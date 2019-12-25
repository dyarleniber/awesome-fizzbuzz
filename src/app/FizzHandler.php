<?php declare(strict_types=1);

namespace App;

class FizzHandler extends Handler
{
    public function handle(int $request): ?string
    {
        if ($request % 3 === 0) {
            return "Fizz";
        }

        return parent::handle($request);
    }
}

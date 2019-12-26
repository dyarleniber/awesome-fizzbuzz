<?php declare (strict_types = 1);

namespace App\ChainOfResponsibility;

class BuzzHandler extends Handler
{
    public function handle(int $request): ?string
    {
        if ($request % 5 === 0) {
            return "Buzz";
        }

        return parent::handle($request);
    }
}

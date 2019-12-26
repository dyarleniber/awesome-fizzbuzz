<?php declare (strict_types = 1);

namespace App\ChainOfResponsibility;

class PlainNumberHandler extends Handler
{
    public function handle(int $request): ?string
    {
        return (string) $request;
    }
}

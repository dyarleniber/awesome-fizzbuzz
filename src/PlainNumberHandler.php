<?php

namespace FizzBuzz;

class PlainNumberHandler extends Handler
{
    public function handle(int $request): ?string
    {
        return (string) $request;
    }
}

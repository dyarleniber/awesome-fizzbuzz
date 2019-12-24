<?php

namespace FizzBuzz;

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

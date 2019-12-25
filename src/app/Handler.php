<?php declare (strict_types = 1);

namespace App;

abstract class Handler
{
    private $nextHandler = null;

    final public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    public function handle(int $request): ?string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}

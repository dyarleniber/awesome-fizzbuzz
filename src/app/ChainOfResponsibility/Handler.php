<?php declare (strict_types = 1);

namespace App\ChainOfResponsibility;

abstract class Handler
{
    private $nextHandler = null;

    final public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    final public function getNext(): ?Handler
    {
        return $this->nextHandler;
    }

    public function handle(int $request): ?string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}

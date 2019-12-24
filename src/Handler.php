<?php

namespace FizzBuzz;

abstract class Handler implements IHandler
{
    /**
     * @var IHandler
     */
    private $nextHandler;

    public function setNext(IHandler $handler): IHandler
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

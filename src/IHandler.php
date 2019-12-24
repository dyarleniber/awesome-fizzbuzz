<?php

namespace FizzBuzz;

interface IHandler
{
    public function setNext(IHandler $handler): IHandler;

    public function handle(int $request): ?string;
}

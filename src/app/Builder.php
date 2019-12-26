<?php declare (strict_types = 1);

namespace App;

abstract class Builder
{
    private $chain;

    private $handlerStack;

    public function addHandlers(): void
    {
        $handlers = $this->getHandlers();
        foreach ($handlers as $handler) {
            $this->addHandlerToStack($handler);
        }
        $this->addHandlerStackToChain();
    }

    abstract protected function getHandlers(): array;

    private function addHandlerToStack(Handler $handler): void
    {
        $this->handlerStack[] = $handler;
    }

    private function addHandlerStackToChain(): void
    {
        $chain = $this->chain;
        foreach ($this->handlerStack as $handler) {
            $chain = $this->addHandlerToChain($handler, $chain);

            if (!$this->chain) {
                $this->chain = $chain;
            }
        }
        $this->handlerStack = [];
    }

    private function addHandlerToChain(Handler $handler, ?Handler $chain): Handler
    {
        if ($chain) {
            $chain = $chain->setNext($handler);
        } else {
            $chain = $handler;
        }
        return $chain;
    }

    public function getChain(): Handler
    {
        return $this->chain;
    }
}

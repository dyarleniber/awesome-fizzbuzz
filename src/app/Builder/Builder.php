<?php declare (strict_types = 1);

namespace App\Builder;

use App\ChainOfResponsibility\Handler;

interface Builder
{
    public function addHandlers(): void;

    public function getChain(): Handler;
}

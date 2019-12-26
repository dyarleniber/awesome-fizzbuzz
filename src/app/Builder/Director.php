<?php declare (strict_types = 1);

namespace App\Builder;

use App\ChainOfResponsibility\Handler;

class Director
{
    public function build(Builder $builder): Handler
    {
        $builder->addHandlers();

        return $builder->getChain();
    }
}

<?php declare (strict_types = 1);

namespace App;

class Director
{
    public function build(Builder $builder): Handler
    {
        $builder->addHandlers();

        return $builder->getChain();
    }
}

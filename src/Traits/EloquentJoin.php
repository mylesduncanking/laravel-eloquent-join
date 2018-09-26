<?php

namespace Southcoastweb\Laravel\EloquentJoin\Traits;

use Southcoastweb\Laravel\EloquentJoin\EloquentJoinBuilder;

trait EloquentJoin
{
    use ExtendRelationsTrait;

    public function newEloquentBuilder($query)
    {
        return new EloquentJoinBuilder($query);
    }
}

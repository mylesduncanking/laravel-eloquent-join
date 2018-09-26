<?php

namespace Southcoastweb\Laravel\EloquentJoin\Relations;

use Southcoastweb\Laravel\EloquentJoin\Traits\JoinRelationTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;

class HasOneJoin extends HasOne
{
    use JoinRelationTrait;
}

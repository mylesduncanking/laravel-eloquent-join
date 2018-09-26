<?php

namespace Southcoastweb\Laravel\EloquentJoin\Relations;

use Southcoastweb\Laravel\EloquentJoin\Traits\JoinRelationTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BelongsToJoin extends BelongsTo
{
    use JoinRelationTrait;
}

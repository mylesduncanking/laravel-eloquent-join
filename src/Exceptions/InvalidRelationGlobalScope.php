<?php

namespace Southcoastweb\Laravel\EloquentJoin\Exceptions;

class InvalidRelationGlobalScope extends \Exception
{
    public $message = 'Package allows only SoftDeletingScope global scope.';
}

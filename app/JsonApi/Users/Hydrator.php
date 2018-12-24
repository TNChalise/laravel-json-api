<?php

namespace App\JsonApi\Users;

use CloudCreativity\LaravelJsonApi\Hydrator\EloquentHydrator;

class Hydrator extends EloquentHydrator
{

    /**
     * @var array|null
     */
    protected $attributes = [
        'first_name',
        'last_name',
        'email'
    ];

    /**
     * @var array
     */
    protected $relationships = [
        //
    ];

}

<?php
/**
 * Created by PhpStorm.
 * User: tnchalise
 * Date: 2018-12-24
 * Time: 13:54
 */

namespace App\Http\Controllers\Api\V1;

use App\Models\Auth\User;
use App\Http\Controllers\Api\ApiController;
use CloudCreativity\JsonApi\Contracts\Hydrator\HydratorInterface;

class UsersController extends ApiController
{
    /**
     * UsersController constructor.
     * @param User $model
     * @param HydratorInterface|null $hydrator
     */
    public function __construct(User $model, ?HydratorInterface $hydrator = null)
    {
        parent::__construct($model, $hydrator);
    }
}
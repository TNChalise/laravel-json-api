<?php
/**
 * Created by PhpStorm.
 * User: tnchalise
 * Date: 2018-12-24
 * Time: 13:37
 */

use CloudCreativity\LaravelJsonApi\Facades\JsonApi;
use CloudCreativity\LaravelJsonApi\Routing\ApiGroup as Api;

JsonApi::register('v1', ['namespace' => 'V1', 'middleware' => 'auth:api'], function ($api, $router) {
    $api->resource('users');
});
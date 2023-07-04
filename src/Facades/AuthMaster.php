<?php

namespace Mgcodeur\AuthMaster\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mgcodeur\AuthMaster\AuthMaster
 */
class AuthMaster extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mgcodeur\AuthMaster\AuthMaster::class;
    }
}

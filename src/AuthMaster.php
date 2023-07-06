<?php

namespace Mgcodeur\AuthMaster;

use Mgcodeur\AuthMaster\Traits\AuthenticatableAuthMasterTrait;

class AuthMaster
{
    use AuthenticatableAuthMasterTrait;

    private static string $authModel = 'App\Models\User';

    public static function setAuthModel(string $model = null): string
    {
        if ($model) {
            self::$authModel = $model;
        }

        return self::$authModel;
    }

    public static function getAuthModel(): string
    {
        return self::$authModel;
    }
}

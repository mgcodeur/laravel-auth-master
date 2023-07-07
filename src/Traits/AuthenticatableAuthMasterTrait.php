<?php

namespace Mgcodeur\AuthMaster\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

trait AuthenticatableAuthMasterTrait
{
    /**
     * TODO: DOC - Create User and respond with access token.
     * 1. fillable: first_name, last_name, email, password, is_online, last_connection
     * 2. this method is available on class: Mgcodeur\AuthMaster\AuthMaster
     * 3. test
     */
    public static function createUserAndGenerateAccessToken(array $data): Model
    {
        $user = self::$authModel::create($data);

        $user->update([
            'is_online' => true,
            'last_connection' => Carbon::now(),
        ]);

        $user->access_token = $user->createToken('auth')->accessToken;

        return $user;
    }
}

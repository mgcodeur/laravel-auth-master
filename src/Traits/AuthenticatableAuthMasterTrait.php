<?php

namespace Mgcodeur\AuthMaster\Traits;

trait AuthenticatableAuthMasterTrait
{
    /**
     * TODO: DOC - Create User and respond with access token.
     * 1. fillable: first_name, last_name, email, password, is_online, last_connection
     * 2. this method is available on class: Mgcodeur\AuthMaster\AuthMaster
     * 3. test
     */
    public static function createUserAndGenerateAccessToken(array $data): array
    {
        $model = _getAuthMasterModel();
        $user = $model::create($data);

        return [
            'access_token' => $user->createToken('auth')->accessToken,
        ];
    }
}

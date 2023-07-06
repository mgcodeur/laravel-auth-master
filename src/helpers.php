<?php

if (! function_exists('_getAuthMasterModel')) {
    function _getAuthMasterModel(): string
    {
        return \Mgcodeur\AuthMaster\AuthMaster::getAuthModel();
    }
}

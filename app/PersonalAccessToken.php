<?php

namespace App;

use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken
{
    public $incrementing = true;

    protected $primaryKey = "id";
    protected $keyType = "string";
}

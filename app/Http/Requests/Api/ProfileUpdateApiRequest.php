<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\FormRequestJSON;
use App\Http\Requests\Web\ProfileUpdateRequest;

class ProfileUpdateApiRequest extends ProfileUpdateRequest
{
    use FormRequestJSON;
}

<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\FormRequestJSON;
use App\Http\Requests\Web\UpdatePasswordRequest;

class UpdatePasswordApiRequest extends UpdatePasswordRequest
{
    use FormRequestJSON;
}

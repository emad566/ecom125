<?php

namespace App\Http\Requests;

use App\Http\Controllers\Api\BaseApiController;
use Dotenv\Exception\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CustomFormRequest  extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        $baseApiController = new BaseApiController;
        $check = $baseApiController->checkValidator($validator);

        if ($check) {
            throw new HttpResponseException(response()->json($check->original, 422));
        }

        parent::failedValidation($validator);
    }
}


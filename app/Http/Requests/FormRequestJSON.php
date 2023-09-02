<?php

namespace App\Http\Requests;

use App\Http\Controllers\Traits\ApiResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

trait FormRequestJSON
{
    use ApiResponse;
    protected function failedValidation(Validator $validator)
    {
        $check = $this->checkValidator($validator);
        if ($check) {
            throw new HttpResponseException(response()->json($check->original, 422));
        }

        parent::failedValidation($validator);
    }
}


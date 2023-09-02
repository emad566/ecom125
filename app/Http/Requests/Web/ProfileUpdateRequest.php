<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:50'],
            'username' => 'required|max:50|unique:users,id,'.$this->id,
            'email' => 'required|max:50|email|unique:users,id,'.$this->id,
//            'image' => 'max:240',
            'phone' => ['required', 'max:15'],
        ];
    }
}

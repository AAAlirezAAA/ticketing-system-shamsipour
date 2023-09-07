<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone_number' => 'required|min:11|max:11',
            'name' => 'required|min:3|max:255',
            'surname' => 'required|min:3|max:255',
//            'password' => 'confirmed|min:6|max:255',
            'profile_picture' => '',
        ];
    }
}

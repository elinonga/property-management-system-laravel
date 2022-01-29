<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'phone' => 'required|max:255',
            'about' => 'required',
            'facebook' => 'required|max:255',
            'twitter' => 'required|max:255',
            'google' => 'required|max:255',
            'linkedin' => 'required|max:255',
            'pinterest' => 'required|max:255',
            'email' => 'required|max:255',
            'avatar' => 'required',
            'password' => 'required|confirmed',
        ];
    }
}

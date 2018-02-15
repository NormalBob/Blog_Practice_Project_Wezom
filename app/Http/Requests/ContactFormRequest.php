<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|min:2|max: 255',
            'telephone' => 'requiredregex:/(+38)[0-9]{9}/',
            'email'     => 'required|email',
            'message'   => 'required|min:10|max: 255'
        ];
    }
}

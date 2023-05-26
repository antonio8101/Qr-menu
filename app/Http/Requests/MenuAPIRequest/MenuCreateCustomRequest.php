<?php

namespace App\Http\Requests\MenuAPIRequest;

use App\Traits\AvoidRedirectOnValidationFailed;
use Illuminate\Foundation\Http\FormRequest;

class MenuCreateCustomRequest extends FormRequest
{
    use AvoidRedirectOnValidationFailed;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_menu'=> 'required'
        ];
    }
}

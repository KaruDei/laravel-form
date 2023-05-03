<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends FormRequest
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
			'email' => 'required|email',
			'password' => 'required',
			'checkbox' => 'required'
        ];
    }

	//  public function messages()
	//  {
	// 	return [
	// 	'email.required' => 'Поле Email не заполненно',
	// 	'password.required' => 'Поле Password не заполненно',
	// 	'checkbox.required' => 'Checkbox не активирован'
	// 	];
	//  }
}

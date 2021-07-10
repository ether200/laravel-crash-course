<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        # if it's false, it will rejected
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        # it will check the rules before we perform

        return [
            # check if name already exist
            # can use two ways
            'name' => ['required'], ['unique:cars'],
            # use custom rule
            // 'name' => new Uppercase,
            # check for integer and add min and max
            'founded' => 'required|integer|min:0|max:2021',
            'description' => 'required'
        ];
    }
}

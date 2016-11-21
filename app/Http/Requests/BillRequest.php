<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillRequest extends FormRequest
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
            'mileage'  => 'required|integer',
            'amount'   => 'required|numeric|max:100',
            'added_on' => 'required|unique:bills'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'amount.required'  => 'An amount is required',
            'mileage.required' => 'An mileage is required',
            'added_on.unique'  => 'A bill already exists for this day',
        ];
    }
}

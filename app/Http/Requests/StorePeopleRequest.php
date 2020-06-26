<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeopleRequest extends FormRequest
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
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'address_line_1' => 'required|max:100',
            'address_line_2' => 'max:100|nullable',
            'city' => 'required|max:20',
            'lng' => 'nullable|max:20',
            'lat' => 'nullable|max:20',
            'email' => 'required|max:70',
            'phone' => 'required|max:20',
        ];
    }

    

}

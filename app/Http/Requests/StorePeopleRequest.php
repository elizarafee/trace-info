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

    public function messages()
    {
        return[
            'first_name.required' => 'First name is required',
            'first_name.max' => "First name field's max length is 30",
            'last_name.required' => 'Last name is required',
            'last_name.max' => "Last name field's max length is 30",
            'address_line_1.required' => 'Address is required',
            'address_line_1.max' => "Address field's max length is 100",
            'address_line_2.max' => "Street field's max length is 100",
            'city.required' => 'City is required',
            'city.max' => "City field's max length is 30",
            'lng.max' => "Longitude field's max length is 20",
            'lat.max' => "Lattitude field's max length is 100",
            'email.required' => 'Email is required',
            'email.max' => "Email field's max length is  70",
            'phone.required' => 'Phone number is required',
            'phone.max' => "Phone number's field's max length is",
        ];
    }
}

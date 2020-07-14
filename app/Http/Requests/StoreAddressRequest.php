<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
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
            'address_line_1' => 'required|max:100',
            'address_line_2' => 'max:100|nullable',
            'city' => 'required|max:20',
            'country' => 'required|max:30',
            'postcode' => 'required|max:20',
            'lng' => 'nullable|max:20',
            'lat' => 'nullable|max:20',
        ];
    }

    public function messages()
    {
        return[
            'address_line_1.required' => 'Address is required',
            'address_line_1.max' => "Address field's max length is 100",
            'address_line_2.max' => "Street field's max length is 100",
            'city.required' => 'City is required',
            'city.max' => "City field's max length is 30",
            'lng.max' => "Longitude field's max length is 20",
            'lat.max' => "Lattitude field's max length is 100",
            'country.required' => 'Country is required',
            'country.max' => "Country field's max length is 30",
            'postcode.required' => 'Postcode number is required',
            'postcode.max' => "Postcode field's max length is",
        ];
    }
}

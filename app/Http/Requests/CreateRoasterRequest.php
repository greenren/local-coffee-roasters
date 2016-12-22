<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Utilities\Location;

class CreateRoasterRequest extends FormRequest
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

    // private $states = implode(",", Location::getStates());
    // private $countries = implode(",", Location::getCountries());

    // private function getStatesArray() {
    //
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'established_year' => 'required|date_format:Y',
            'website_url' => 'required|url',
            'store_url' => 'required|url',
            'city' => 'required',
            'state' => 'required|in:' . implode(',', array_keys(Location::getStates())),
            'country' => 'required|in:' . implode(',', Location::getCountries()),
            'logo' => ''
        ];
    }
}

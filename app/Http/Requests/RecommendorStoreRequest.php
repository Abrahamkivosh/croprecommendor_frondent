<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecommendorStoreRequest extends FormRequest
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
            'nitrogen'=>'required|numeric|max:100|min:0',
            'phosphorus'=>'required|numeric|max:100|min:0',
            'potassium'=>'required|numeric|max:100|min:0',
            'temperature'=>'required|numeric|max:100|min:0',
            'humidity'=>'required|numeric|max:100|min:0',
            'ph'=>'required|numeric|max:100|min:0',
            'rainfall'=>'required|numeric|max:100|min:0',   
            'location'=>'required|string'         
        ];
    }
}

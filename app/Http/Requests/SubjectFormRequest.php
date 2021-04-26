<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectFormRequest extends FormRequest
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
            'name'=>'min:3|required',
            'description' => 'nullable',
            'credit_value'=>'numeric|required',
            'code'=>'regex:/IK-[A-Z]{3}[0-9]{3}/'
        ];
    }
}

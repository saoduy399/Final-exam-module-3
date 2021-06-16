<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllFormRequest extends FormRequest
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
            'type_of_group' => 'required|min:3|max:50',
            'full_name' => 'required|min:3|max:50',
            'gender' => 'required|min:3|max:10',
            'phone_number' => 'required|numeric',
        ];
    }

    public function messages()
    {
        $messages = [
            'type_of_group.required' => 'We need to know your group!',
            'type_of_group.min' => 'group size must be more than three!',
            'type_of_group.max' => 'group size limit at 50 words',
            'full_name.required' => 'We need to know your full name!',
            'full_name.min' => 'full name size must be more than three!',
            'full_name.max' => 'full name size limit at 50 words!',
            'gender.required' => 'We need to know your gender!',
            'gender.min' => 'gender size must be more than three!',
            'gender.max' => 'gender size limit at 10 words!!',
            'phone_number.required' => 'We need to know your phone number!',
            'phone_number.numeric' => 'You must type here numbers!',
        ];
        return $messages;
    }
}

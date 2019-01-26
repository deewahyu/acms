<?php

namespace Modules\Endproject\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentDataRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'field_code' => 'required|string|max:5',
            'student_number' => 'required|string|max:9',
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'supervisor' => 'required|string|max:3',
            'phone_number' => 'required|string|max:12'
        ];
    }

    public function messages()
    {
        return [
            /*'field_code' => 'is required!',
            'student_number' => 'Student number is required!',
            'first_name' => 'First name is required!',
            'last_name' => 'Last name is required!',
            'supervisor' => 'Academic supervisor is required!',
            'phone_number' => 'Phone number is required!'
            */
        
        ];
    }

    public function filters()
    {
        return [
            'first_supervisor' => 'trim|uppercase',
            'second_supervisor' => 'trim|uppercase'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}

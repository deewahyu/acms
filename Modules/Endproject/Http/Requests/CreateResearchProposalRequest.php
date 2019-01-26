<?php

namespace Modules\Endproject\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateResearchProposalRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:100',
            'aim' => 'required|string|max:1000',
            'background' => 'required|string|max:1000',
            'originality' => 'required|string|max:1000',
            'schedule' => 'required|string|max:1000',
            'method' => 'required|string|max:1000',
            'first_supervisor' => 'required|string|max:3',
            'second_supervisor' => 'required|string|max:3'
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

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Title is required!',
            'aim.required' => 'Research Aim is required!',
            'background.required' => 'Background is required!',
            'originality.required' => 'Originality is required!',
            'schedule.required' => 'Schedule is required!',
            'method.required' => 'Method is required!',
            'first_supervisor.required' => 'First Supervisor is required!',
            'second_supervisor.required' => 'Second Supervisor is required!'

        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            'first_supervisor' => 'trim|uppercase',
            'second_supervisor' => 'trim|uppercase'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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
            'name' => 'required',
            'content_task' => 'required',
            'source_code_html' => 'nullable',
            'source_code_css' => 'nullable',
            'lesson_id' => 'required',
            'stt' => 'required'
        ];
    }
}

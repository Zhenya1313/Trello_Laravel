<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'task' => 'required|min:5|max:50',
            'details' => 'required|min:2|max:500',
            'date' => 'after:yesterday',

        ];
    }
    public function messages()
    {
        return[
            'task.required' => 'Название задачи должно быть от 5 символов!',
            'details.required' => 'Описание должно быть больше 10 символов!',
            'date.after' => 'Дата должна быть не раньше сегодняшней!'


        ];
    }
}

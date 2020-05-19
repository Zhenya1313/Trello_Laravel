<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Objective;

class ObjectiveRequest extends FormRequest
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
            'title' => 'required|min:5|max:20',
            'date' => 'after:yesterday',
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Название задачи должно быть больше 5 символов!',
            'date.after' => 'Дата должна быть не раньше сегодняшней!'
        ];
    }
}

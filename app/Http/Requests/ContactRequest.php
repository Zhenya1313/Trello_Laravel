<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:5|max:50',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:10|max:500'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Поле "Имя" является обязательным!',
            'email.required' => 'Поле "E-mail" является обязательным!',
            'subject.required' => 'Поле "Тема сообщения" является обязательным!',
            'subject.min' => '"Тема сообщения" должна бьть 5-50 символов!',
            'message.required' => 'Поле "Сообщение" является обязательным!',
            'message.min' => '"Сообщение" должно бьть 10-500 символов!',

            ];
    }
}

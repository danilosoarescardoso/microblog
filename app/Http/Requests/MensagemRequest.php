<?php

namespace Microblog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MensagemRequest extends FormRequest
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
            //
            'autor' => 'required|min:3',
            'mensagem' => 'required|max:255'
        ];
    }

    public function messages(){
        return[
            'required' => 'O campo :attribute é obrigatório!'
        ];
    }
    
}

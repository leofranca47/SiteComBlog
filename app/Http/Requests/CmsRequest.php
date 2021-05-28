<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CmsRequest extends FormRequest
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
        $id = $this->segment(2);

        return [
            'title' => 'required|max:255|unique:posts,title,' . $id . ',id',
            'cover' => 'nullable|image',
            'subtitle' => 'required|min:10',
            'content' => 'required|min:10',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O título é obrigatório',
            'title.unique' => 'Esse titulo já existe',
            'subtitle.required' => 'O subtitulo é obrigatório',
            'subtitle.min' => 'O minimo do subititulo são 10 caracteres',
            'content.required' => 'É necessário escrever o artigo',
            'content.min' => 'É obrigatorio digitar um texto completo',
        ];
    }
}

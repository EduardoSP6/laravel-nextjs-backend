<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        switch ($this->method())
        {
            case "PUT":
            case "POST":
                return [
                    'name' => 'required|string|unique:categories|max:191'
                ];
            default:
                return [];
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório',
            'name.unique' => 'Nome deve ser único',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nome'
        ];
    }

}

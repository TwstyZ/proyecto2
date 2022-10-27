<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibro extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'txtISBN'=>'required|min:13',
            'txtTitulo'=>'required',
            'txtAutor'=>'required',
            'txtPaginas'=>'required',
            'txtEditorial'=>'required',
            'txtEmail'=>'required|email'
        ];
    }
}
$txtTitulo=$_POST["txtTitulo"];
